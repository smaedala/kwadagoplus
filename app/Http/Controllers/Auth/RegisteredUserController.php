<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\ServiceProviderProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // email may be optional for seekers; if absent we'll generate a unique placeholder below
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['nullable', 'string', 'unique:user_profiles,phone_number'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type' => ['nullable', 'in:service_seeker,service_provider'],
        ]);

        DB::beginTransaction();
        try {
            // Normalize phone first so we can use it for a fallback email and for profile
            $rawPhone = $request->input('phone');
            $normalizedPhone = null;
            if ($rawPhone) {
                $digits = preg_replace('/\D+/', '', $rawPhone);
                if (str_starts_with($digits, '0')) {
                    // local Nigerian number, replace leading 0 with +234
                    $normalizedPhone = '+234' . ltrim($digits, '0');
                } elseif (str_starts_with($digits, '234')) {
                    $normalizedPhone = '+' . $digits;
                } elseif (str_starts_with($digits, '+' )) {
                    $normalizedPhone = $digits; // unlikely, keep as-is
                } else {
                    $normalizedPhone = $digits;
                }
            }

            // Ensure we have a usable, unique email for the users table (it is non-nullable)
            $email = $request->input('email');

            if (! $email) {
                // prefer a phone-based fallback when available
                if ($normalizedPhone) {
                    $local = preg_replace('/\D+/', '', $normalizedPhone);
                    $email = $local . '@kwadagoplus.local';
                } else {
                    $email = 'user' . time() . '@kwadagoplus.local';
                }
            }

            $email = Str::lower($email);

            // If generated email somehow collides, append a timestamp
            if (User::where('email', $email)->exists()) {
                $email = pathinfo($email, PATHINFO_FILENAME) . '.' . time() . '@' . pathinfo($email, PATHINFO_EXTENSION);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $email,
                'password' => Hash::make($request->password),
            ]);

            // create a basic profile record so the database carries registration info
            UserProfile::create([
                'user_id' => $user->id,
                'full_name' => $request->name,
                'phone_number' => $normalizedPhone,
                'address' => $request->input('location') ?? null,
                'user_type' => $request->input('user_type') ?? 'service_seeker',
            ]);

            // if the registration form provided provider-specific fields, create a provider profile
            if ($request->input('user_type') === 'service_provider') {
                // parse comma-separated services into array
                $servicesRaw = $request->input('services', '');
                $skillsArray = array_values(array_filter(array_map('trim', explode(',', $servicesRaw))));

                ServiceProviderProfile::create([
                    'user_id' => $user->id,
                    'business_name' => $request->input('business_name'),
                    'bio' => $request->input('bio'),
                    'service_areas' => $request->filled('location') ? [$request->input('location')] : [],
                    'skills' => $skillsArray,
                    'is_available' => true,
                ]);
            }

            event(new Registered($user));

            Auth::login($user);

            DB::commit();

            return redirect(route('dashboard', absolute: false));
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return back()->withInput()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }
}
