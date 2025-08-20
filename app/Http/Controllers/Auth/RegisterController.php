<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\ServiceProviderProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    public function showSeekerForm()
    {
        return view('auth.register-seeker');
    }

    public function showProviderForm()
    {
        return view('auth.register-provider');
    }

    public function registerSeeker(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20', 'unique:user_profiles,phone_number'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:255'],
        ]);

        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            UserProfile::create([
                'user_id' => $user->id,
                'full_name' => $request->name,
                'phone_number' => $request->phone,
                'address' => $request->address,
                'user_type' => 'service_seeker',
            ]);

            DB::commit();
            auth()->login($user);

            return redirect()->route('dashboard')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withInput()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }

    public function registerProvider(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20', 'unique:user_profiles,phone_number'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:255'],
            'business_name' => ['required', 'string', 'max:255'],
            'services' => ['required', 'array', 'min:1'],
            'bio' => ['required', 'string', 'max:1000'],
        ]);

        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            UserProfile::create([
                'user_id' => $user->id,
                'full_name' => $request->name,
                'phone_number' => $request->phone,
                'address' => $request->address,
                'user_type' => 'service_provider',
            ]);

            ServiceProviderProfile::create([
                'user_id' => $user->id,
                'business_name' => $request->business_name,
                'bio' => $request->bio,
                'service_areas' => [$request->address],
                'skills' => $request->services,
                'is_available' => true,
            ]);

            DB::commit();
            auth()->login($user);

            return redirect()->route('provider.dashboard')->with('success', 'Registration successful! Please complete your verification.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withInput()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }
}
