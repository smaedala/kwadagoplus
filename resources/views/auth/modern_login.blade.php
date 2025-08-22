<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In - KwadagoPlus</title>
    <meta name="description" content="Sign in to KwadagoPlus - Connect with trusted local workers in Bauchi State">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root {
            --primary-green: #16A34A;
            --primary-green-dark: #15803D;
            --primary-green-light: #22C55E;
            --text-primary: #1b1b18;
            --text-secondary: #706f6c;
            --bg-primary: #FDFDFC;
            --bg-secondary: #F5F5F3;
            --border-light: #19140035;
        }
        
        * {
            scroll-behavior: smooth;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #16A34A 0%, #22C55E 100%);
        }
        
        .glass-effect {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-15px) rotate(1deg); }
            66% { transform: translateY(-5px) rotate(-1deg); }
        }
        
        .pulse-ring {
            animation: pulse-ring 3s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }
        
        @keyframes pulse-ring {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(2.4);
                opacity: 0;
            }
        }
        
        .slide-in {
            animation: slideIn 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .input-focus {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .input-focus:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(22, 163, 74, 0.15);
        }
        
        .btn-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(22, 163, 74, 0.4);
        }
        
        .btn-hover:active {
            transform: translateY(0);
        }
        
        .error-shake {
            animation: shake 0.5s ease-in-out;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        .success-bounce {
            animation: bounce 0.6s ease-in-out;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* Mobile optimizations */
        @media (max-width: 640px) {
            .mobile-padding {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            
            .mobile-text {
                font-size: 1.5rem;
            }
            
            .mobile-input {
                font-size: 16px; /* Prevents zoom on iOS */
            }
        }
        
        /* Touch-friendly elements */
        .touch-target {
            min-height: 44px;
            min-width: 44px;
        }
        
        /* Loading state */
        .loading {
            position: relative;
            overflow: hidden;
        }
        
        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: loading 1.5s infinite;
        }
        
        @keyframes loading {
            0% { left: -100%; }
            100% { left: 100%; }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#FDFDFC] via-[#F5F5F3] to-[#E8F5E8] min-h-screen font-['Inter'] antialiased">
    <!-- Background decorative elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full opacity-10 blur-3xl floating"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-tr from-[#22C55E] to-[#16A34A] rounded-full opacity-10 blur-3xl floating" style="animation-delay: -2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-[#16A34A] to-[#22C55E] rounded-full opacity-5 blur-3xl floating" style="animation-delay: -4s;"></div>
        
        <!-- Floating icons -->
        <div class="absolute top-20 left-20 w-16 h-16 bg-white/20 rounded-full flex items-center justify-center floating" style="animation-delay: -1s;">
            <svg class="w-8 h-8 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
            </svg>
        </div>
        
        <div class="absolute bottom-20 right-20 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center floating" style="animation-delay: -3s;">
            <svg class="w-6 h-6 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
        </div>
        
        <div class="absolute top-1/3 right-1/4 w-8 h-8 bg-[#16A34A]/20 rounded-full floating" style="animation-delay: -5s;"></div>
        <div class="absolute bottom-1/3 left-1/4 w-6 h-6 bg-[#22C55E]/20 rounded-full floating" style="animation-delay: -2.5s;"></div>
    </div>

    <div class="relative z-10 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 slide-in">
            <!-- Logo and Header -->
            <div class="text-center">
                <a href="{{ url('/') }}" class="inline-flex items-center mb-8 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-2xl mr-3 flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105 group-hover:rotate-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <span class="text-3xl lg:text-4xl font-bold bg-gradient-to-r from-[#16A34A] to-[#22C55E] bg-clip-text text-transparent">KwadagoPlus</span>
                </a>
                
                <div class="mb-8">
                    <h1 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-3 mobile-text">Welcome Back!</h1>
                    <p class="text-[#706f6c] text-lg">Sign in to connect with trusted local workers</p>
                </div>
            </div>

            <!-- Login Form Card -->
            <div class="glass-effect rounded-3xl p-8 space-y-6 shadow-2xl hover:shadow-3xl transition-all duration-500 border border-white/30">
                <!-- Session Status -->
                @if (session('status'))
                    <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6 success-bounce">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">{{ session('status') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6 error-shake">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">Please correct the following errors:</h3>
                                <div class="mt-2 text-sm text-red-700">
                                    <ul class="list-disc pl-5 space-y-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6" id="loginForm">
                    @csrf

                    <!-- Phone Number Input -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-[#1b1b18] mb-3">Phone Number or Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <input 
                                id="email" 
                                name="email" 
                                type="text" 
                                autocomplete="email" 
                                required
                                placeholder="Enter phone number or email"
                                class="w-full pl-14 pr-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                value="{{ old('email') }}" 
                            />
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-[#1b1b18] mb-3">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                autocomplete="current-password" 
                                required
                                placeholder="Enter your password"
                                class="w-full pl-14 pr-14 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                            />
                            <button 
                                type="button" 
                                onclick="togglePassword()" 
                                class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#706f6c] hover:text-[#16A34A] transition-colors duration-200 touch-target"
                            >
                                <svg id="eye-open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                <svg id="eye-closed" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"/>
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center group cursor-pointer">
                            <input 
                                type="checkbox" 
                                name="remember" 
                                class="h-5 w-5 text-[#16A34A] focus:ring-[#16A34A] border-gray-300 rounded transition-colors duration-200 touch-target"
                            >
                            <span class="ml-3 text-sm text-[#706f6c] group-hover:text-[#1b1b18] transition-colors duration-200">Remember me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <div class="text-sm">
                                <a href="{{ route('password.request') }}" class="font-medium text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 touch-target">
                                    Forgot password?
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <div>
                        <button 
                            type="submit" 
                            class="w-full bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transform transition-all duration-300 text-lg focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:ring-offset-2 btn-hover touch-target"
                            id="loginButton"
                        >
                            <span class="flex items-center justify-center" id="buttonContent">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                                </svg>
                                Sign In
                            </span>
                            <span class="hidden items-center justify-center" id="loadingContent">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Signing In...
                            </span>
                        </button>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center">
                        <p class="text-sm text-[#706f6c]">
                            Don't have an account? 
                            <a href="{{ route('register') }}" class="font-semibold text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 touch-target">
                                Create account
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Terms and Privacy -->
            <p class="text-center text-sm text-[#706f6c] mt-8 mobile-padding">
                By signing in, you agree to our 
                <a href="#" class="text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 touch-target">Terms of Service</a> 
                and 
                <a href="#" class="text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 touch-target">Privacy Policy</a>
            </p>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Password toggle functionality
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeOpen = document.getElementById('eye-open');
            const eyeClosed = document.getElementById('eye-closed');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeOpen.classList.add('hidden');
                eyeClosed.classList.remove('hidden');
            } else {
                passwordInput.type = 'password';
                eyeOpen.classList.remove('hidden');
                eyeClosed.classList.add('hidden');
            }
        }

        // Nigerian phone number formatting
        document.getElementById('email').addEventListener('input', function(e) {
            let value = e.target.value;
            
            // Check if it looks like a phone number (starts with digits or +)
            if (/^[\d+]/.test(value)) {
                // Remove all non-digits except +
                let cleaned = value.replace(/[^\d+]/g, '');
                
                // If it starts with +234, format as international
                if (cleaned.startsWith('+234')) {
                    let digits = cleaned.substring(4);
                    if (digits.length <= 3) {
                        e.target.value = '+234 ' + digits;
                    } else if (digits.length <= 6) {
                        e.target.value = '+234 ' + digits.slice(0, 3) + ' ' + digits.slice(3);
                    } else if (digits.length <= 10) {
                        e.target.value = '+234 ' + digits.slice(0, 3) + ' ' + digits.slice(3, 6) + ' ' + digits.slice(6);
                    } else {
                        e.target.value = '+234 ' + digits.slice(0, 3) + ' ' + digits.slice(3, 6) + ' ' + digits.slice(6, 10);
                    }
                }
                // If it starts with 234 (without +), add the +
                else if (cleaned.startsWith('234')) {
                    let digits = cleaned.substring(3);
                    if (digits.length <= 3) {
                        e.target.value = '+234 ' + digits;
                    } else if (digits.length <= 6) {
                        e.target.value = '+234 ' + digits.slice(0, 3) + ' ' + digits.slice(3);
                    } else if (digits.length <= 10) {
                        e.target.value = '+234 ' + digits.slice(0, 3) + ' ' + digits.slice(3, 6) + ' ' + digits.slice(6);
                    } else {
                        e.target.value = '+234 ' + digits.slice(0, 3) + ' ' + digits.slice(3, 6) + ' ' + digits.slice(6, 10);
                    }
                }
                // If it starts with 0, format as local Nigerian number
                else if (cleaned.startsWith('0')) {
                    if (cleaned.length <= 4) {
                        e.target.value = cleaned;
                    } else if (cleaned.length <= 7) {
                        e.target.value = cleaned.slice(0, 4) + ' ' + cleaned.slice(4);
                    } else if (cleaned.length <= 11) {
                        e.target.value = cleaned.slice(0, 4) + ' ' + cleaned.slice(4, 7) + ' ' + cleaned.slice(7);
                    }
                }
                // If user types just digits, assume they want to add +234
                else if (/^\d{10}$/.test(cleaned)) {
                    e.target.value = '+234 ' + cleaned.slice(0, 3) + ' ' + cleaned.slice(3, 6) + ' ' + cleaned.slice(6);
                }
            }
        });

        // Form submission with loading state
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const button = document.getElementById('loginButton');
            const buttonContent = document.getElementById('buttonContent');
            const loadingContent = document.getElementById('loadingContent');
            
            button.disabled = true;
            button.classList.add('loading');
            buttonContent.classList.add('hidden');
            loadingContent.classList.remove('hidden');
            loadingContent.classList.add('flex');
        });

        // Add focus animations to inputs
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('scale-105');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('scale-105');
            });
        });

        // Add ripple effect to buttons
        document.querySelectorAll('button, a').forEach(element => {
            element.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.slide-in').forEach(el => {
            observer.observe(el);
        });

        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && e.target.tagName !== 'BUTTON' && e.target.type !== 'submit') {
                const form = e.target.closest('form');
                if (form) {
                    const submitButton = form.querySelector('button[type="submit"]');
                    if (submitButton) {
                        submitButton.click();
                    }
                }
            }
        });

        // Auto-focus first input on page load
        window.addEventListener('load', function() {
            const firstInput = document.querySelector('input');
            if (firstInput) {
                setTimeout(() => {
                    firstInput.focus();
                }, 500);
            }
        });
    </script>

    <style>
        /* Ripple effect */
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        /* Enhanced shadow */
        .shadow-3xl {
            box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
        }

        /* Smooth transitions for all interactive elements */
        * {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-green);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-green-dark);
        }

        /* Focus visible for accessibility */
        *:focus-visible {
            outline: 2px solid var(--primary-green);
            outline-offset: 2px;
        }

        /* High contrast mode support */
        @media (prefers-contrast: high) {
            .glass-effect {
                background: rgba(255, 255, 255, 0.95);
                border: 2px solid var(--primary-green);
            }
        }

        /* Reduced motion support */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</body>
</html>

