<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // allow phone or email in the same field; we'll resolve it during authenticate()
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        $credentials = ['email' => $this->input('email'), 'password' => $this->input('password')];

        // First, try direct attempt assuming user provided an email
        if (Auth::attempt($credentials, $this->boolean('remember'))) {
            RateLimiter::clear($this->throttleKey());
            return;
        }

        // If that failed, and the input looks like a phone (digits, + or spaces), try to find a user by phone
        $input = $this->input('email');
        $clean = preg_replace('/\D+/', '', $input);

        if ($clean) {
            // try to find matching user profile
            $profile = \App\Models\UserProfile::whereRaw("REPLACE(REPLACE(REPLACE(phone_number, ' ', ''), '+', ''), '-', '') LIKE ?", ["%{$clean}%"])->first();
            if ($profile && $profile->user) {
                $userEmail = $profile->user->email;
                if (Auth::attempt(['email' => $userEmail, 'password' => $this->input('password')], $this->boolean('remember'))) {
                    RateLimiter::clear($this->throttleKey());
                    return;
                }
            }
        }

        RateLimiter::hit($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.failed'),
        ]);

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('email')).'|'.$this->ip());
    }
}
