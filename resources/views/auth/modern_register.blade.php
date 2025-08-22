<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account - KwadagoPlus</title>
    <meta name="description" content="Join KwadagoPlus - Connect with trusted local workers or offer your services in Bauchi State">
    
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
        
        .role-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }
        
        .role-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px rgba(22, 163, 74, 0.2);
        }
        
        .role-card.selected {
            background: linear-gradient(135deg, #16A34A 0%, #22C55E 100%);
            color: white;
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 40px rgba(22, 163, 74, 0.3);
        }
        
        .step-indicator {
            transition: all 0.3s ease;
        }
        
        .step-indicator.active {
            background: var(--primary-green);
            color: white;
        }
        
        .step-indicator.completed {
            background: var(--primary-green);
            color: white;
        }
        
        .password-strength {
            height: 4px;
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        
        .strength-weak { background: #ef4444; width: 25%; }
        .strength-fair { background: #f59e0b; width: 50%; }
        .strength-good { background: #10b981; width: 75%; }
        .strength-strong { background: #16A34A; width: 100%; }
        
        .file-drop-zone {
            border: 2px dashed #d1d5db;
            transition: all 0.3s ease;
        }
        
        .file-drop-zone.dragover {
            border-color: var(--primary-green);
            background: rgba(22, 163, 74, 0.05);
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
        
        .error-shake {
            animation: shake 0.5s ease-in-out;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
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
            
            .role-card {
                margin-bottom: 1rem;
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
        </div>
        
        <div class="absolute bottom-20 right-20 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center floating" style="animation-delay: -3s;">
            <svg class="w-6 h-6 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
        </div>
    </div>

    <div class="relative z-10 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full space-y-8 slide-in">
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
                    <h1 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-3 mobile-text">Join Our Community</h1>
                    <p class="text-[#706f6c] text-lg">Create your account to get started</p>
                </div>
            </div>

            <!-- Progress Indicator -->
            <div class="flex items-center justify-center mb-8">
                <div class="flex items-center space-x-4">
                    <div class="step-indicator active flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 text-gray-600 font-semibold text-sm">
                        1
                    </div>
                    <div class="w-16 h-1 bg-gray-200 rounded-full">
                        <div class="h-full bg-[#16A34A] rounded-full transition-all duration-500" style="width: 0%" id="progressBar"></div>
                    </div>
                    <div class="step-indicator flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 text-gray-600 font-semibold text-sm">
                        2
                    </div>
                </div>
                <div class="ml-4 text-sm text-[#706f6c]" id="stepText">Step 1 of 2</div>
            </div>

            <!-- Step 1: Role Selection -->
            <div id="step1" class="glass-effect rounded-3xl p-8 shadow-2xl border border-white/30">
                <div class="text-center mb-8">
                    <h2 class="text-2xl lg:text-3xl font-bold text-[#1b1b18] mb-4">How would you like to use KwadagoPlus?</h2>
                    <p class="text-[#706f6c] text-lg">Choose the option that best describes you</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                    <!-- Service Seeker Card -->
                    <div class="role-card bg-white/80 backdrop-blur-sm rounded-2xl p-8 border border-white/30 shadow-lg" onclick="selectRole('seeker')" id="seekerCard">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">I Need a Worker</h3>
                            <p class="text-[#706f6c] mb-6 leading-relaxed">
                                Looking for trusted professionals to help with plumbing, electrical work, carpentry, tailoring, and more.
                            </p>
                            <div class="space-y-2 text-sm text-[#706f6c]">
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Find verified professionals
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Compare prices and reviews
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Secure payment protection
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Provider Card -->
                    <div class="role-card bg-white/80 backdrop-blur-sm rounded-2xl p-8 border border-white/30 shadow-lg" onclick="selectRole('provider')" id="providerCard">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">I Am a Worker</h3>
                            <p class="text-[#706f6c] mb-6 leading-relaxed">
                                Skilled professional ready to offer services like plumbing, electrical work, carpentry, tailoring, and more.
                            </p>
                            <div class="space-y-2 text-sm text-[#706f6c]">
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Get more customers
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Set your own rates
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Build your reputation
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button 
                        id="continueBtn" 
                        class="bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transform transition-all duration-300 text-lg focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:ring-offset-2 btn-hover touch-target disabled:opacity-50 disabled:cursor-not-allowed"
                        onclick="proceedToStep2()"
                        disabled
                    >
                        Continue to Registration
                        <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Step 2: Registration Form -->
            <div id="step2" class="glass-effect rounded-3xl p-8 shadow-2xl border border-white/30 hidden">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-2xl lg:text-3xl font-bold text-[#1b1b18] mb-2" id="formTitle">Create Your Account</h2>
                        <p class="text-[#706f6c] text-lg" id="formSubtitle">Fill in your details to get started</p>
                    </div>
                    <button 
                        onclick="goBackToStep1()" 
                        class="flex items-center text-[#706f6c] hover:text-[#16A34A] transition-colors duration-200 touch-target"
                    >
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Back
                    </button>
                </div>

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

                <form method="POST" action="{{ route('register') }}" class="space-y-6" id="registrationForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_type" id="userType" value="">

                    <!-- Common Fields -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Full Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-[#1b1b18] mb-3">Full Name</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <input 
                                    id="name" 
                                    name="name" 
                                    type="text" 
                                    autocomplete="name" 
                                    required
                                    placeholder="Enter your full name"
                                    class="w-full pl-14 pr-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                    value="{{ old('name') }}" 
                                />
                            </div>
                            @error('name')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-[#1b1b18] mb-3">Phone Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <input 
                                    id="phone" 
                                    name="phone" 
                                    type="tel" 
                                    autocomplete="tel" 
                                    required
                                    placeholder="+234 XXX XXX XXXX"
                                    class="w-full pl-14 pr-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                    value="{{ old('phone') }}" 
                                />
                            </div>
                            @error('phone')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <!-- Email (Optional for seekers, required for providers) -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-[#1b1b18] mb-3">
                            Email Address 
                            <span id="emailOptional" class="text-[#706f6c] font-normal">(Optional)</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                </svg>
                            </div>
                            <input 
                                id="email" 
                                name="email" 
                                type="email" 
                                autocomplete="email"
                                placeholder="Enter your email address"
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

                    <!-- Password Fields -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Password -->
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
                                    autocomplete="new-password" 
                                    required
                                    placeholder="Create a strong password"
                                    class="w-full pl-14 pr-14 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                />
                                <button 
                                    type="button" 
                                    onclick="togglePassword('password')" 
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#706f6c] hover:text-[#16A34A] transition-colors duration-200 touch-target"
                                >
                                    <svg class="h-6 w-6 eye-open" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    <svg class="h-6 w-6 eye-closed hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"/>
                                    </svg>
                                </button>
                            </div>
                            <!-- Password Strength Meter -->
                            <div class="mt-2">
                                <div class="flex justify-between text-xs text-[#706f6c] mb-1">
                                    <span>Password Strength</span>
                                    <span id="strengthText">Weak</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1">
                                    <div class="password-strength strength-weak" id="strengthBar"></div>
                                </div>
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

                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-[#1b1b18] mb-3">Confirm Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <input 
                                    id="password_confirmation" 
                                    name="password_confirmation" 
                                    type="password" 
                                    autocomplete="new-password" 
                                    required
                                    placeholder="Confirm your password"
                                    class="w-full pl-14 pr-14 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                />
                                <button 
                                    type="button" 
                                    onclick="togglePassword('password_confirmation')" 
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#706f6c] hover:text-[#16A34A] transition-colors duration-200 touch-target"
                                >
                                    <svg class="h-6 w-6 eye-open" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    <svg class="h-6 w-6 eye-closed hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"/>
                                    </svg>
                                </button>
                            </div>
                            @error('password_confirmation')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <!-- Location -->
                    <div>
                        <label for="location" class="block text-sm font-semibold text-[#1b1b18] mb-3">Location / Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <input 
                                id="location" 
                                name="location" 
                                type="text" 
                                autocomplete="street-address"
                                placeholder="Enter your location"
                                class="w-full pl-14 pr-32 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                value="{{ old('location') }}" 
                            />
                            <button 
                                type="button" 
                                onclick="getCurrentLocation()" 
                                class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 text-sm font-medium touch-target"
                            >
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Use Current
                            </button>
                        </div>
                        @error('location')
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Provider-specific fields -->
                    <div id="providerFields" class="space-y-6 hidden">
                        <!-- Service Category -->
                        <div>
                            <label for="service_category" class="block text-sm font-semibold text-[#1b1b18] mb-3">Service Category</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                    </svg>
                                </div>
                                <select 
                                    id="service_category" 
                                    name="service_category"
                                    class="w-full pl-14 pr-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                >
                                    <option value="">Select your primary service</option>
                                    <option value="plumbing">Plumbing</option>
                                    <option value="electrical">Electrical</option>
                                    <option value="carpentry">Carpentry</option>
                                    <option value="tailoring">Tailoring</option>
                                    <option value="mechanic">Mechanic</option>
                                    <option value="cleaning">Cleaning</option>
                                    <option value="painting">Painting</option>
                                    <option value="gardening">Gardening</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Years of Experience -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div>
                                <label for="experience_years" class="block text-sm font-semibold text-[#1b1b18] mb-3">Years of Experience</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <select 
                                        id="experience_years" 
                                        name="experience_years"
                                        class="w-full pl-14 pr-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                    >
                                        <option value="">Select experience</option>
                                        <option value="0-1">Less than 1 year</option>
                                        <option value="1-3">1-3 years</option>
                                        <option value="3-5">3-5 years</option>
                                        <option value="5-10">5-10 years</option>
                                        <option value="10+">10+ years</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Service Area Radius -->
                            <div>
                                <label for="service_radius" class="block text-sm font-semibold text-[#1b1b18] mb-3">Service Area Radius</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                                        </svg>
                                    </div>
                                    <select 
                                        id="service_radius" 
                                        name="service_radius"
                                        class="w-full pl-14 pr-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                    >
                                        <option value="">Select service area</option>
                                        <option value="5">Within 5km</option>
                                        <option value="10">Within 10km</option>
                                        <option value="20">Within 20km</option>
                                        <option value="50">Within 50km</option>
                                        <option value="unlimited">Anywhere in Bauchi State</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Hourly Rate Range -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div>
                                <label for="hourly_rate_min" class="block text-sm font-semibold text-[#1b1b18] mb-3">Minimum Hourly Rate (₦)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <span class="text-[#706f6c] font-medium">₦</span>
                                    </div>
                                    <input 
                                        id="hourly_rate_min" 
                                        name="hourly_rate_min" 
                                        type="number" 
                                        min="500"
                                        step="100"
                                        placeholder="1000"
                                        class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                    />
                                </div>
                            </div>

                            <div>
                                <label for="hourly_rate_max" class="block text-sm font-semibold text-[#1b1b18] mb-3">Maximum Hourly Rate (₦)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <span class="text-[#706f6c] font-medium">₦</span>
                                    </div>
                                    <input 
                                        id="hourly_rate_max" 
                                        name="hourly_rate_max" 
                                        type="number" 
                                        min="1000"
                                        step="100"
                                        placeholder="5000"
                                        class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                    />
                                </div>
                            </div>
                        </div>

                        <!-- Business Name (Optional) -->
                        <div>
                            <label for="business_name" class="block text-sm font-semibold text-[#1b1b18] mb-3">
                                Business Name 
                                <span class="text-[#706f6c] font-normal">(Optional)</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-6 w-6 text-[#706f6c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>
                                <input 
                                    id="business_name" 
                                    name="business_name" 
                                    type="text"
                                    placeholder="e.g. Ahmed's Plumbing Services"
                                    class="w-full pl-14 pr-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                    value="{{ old('business_name') }}" 
                                />
                            </div>
                        </div>

                        <!-- Bio -->
                        <div>
                            <label for="bio" class="block text-sm font-semibold text-[#1b1b18] mb-3">Short Bio</label>
                            <textarea 
                                id="bio" 
                                name="bio" 
                                rows="4"
                                placeholder="Tell potential customers about your experience, skills, and what makes you unique..."
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input resize-none"
                            >{{ old('bio') }}</textarea>
                            <div class="mt-2 text-sm text-[#706f6c]">
                                <span id="bioCount">0</span>/500 characters
                            </div>
                        </div>

                        <!-- Services/Skills -->
                        <div>
                            <label for="services" class="block text-sm font-semibold text-[#1b1b18] mb-3">Services / Skills</label>
                            <input 
                                id="services" 
                                name="services" 
                                type="text"
                                placeholder="e.g. plumbing, pipe installation, leak repair, bathroom renovation"
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl bg-white/70 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-[#16A34A] transition-all duration-300 text-lg input-focus mobile-input touch-target"
                                value="{{ old('services') }}" 
                            />
                            <p class="mt-2 text-sm text-[#706f6c]">Separate multiple services with commas</p>
                        </div>

                        <!-- Document Upload Section -->
                        <div class="space-y-6">
                            <h3 class="text-lg font-semibold text-[#1b1b18]">Document Verification</h3>
                            
                            <!-- ID Document -->
                            <div>
                                <label class="block text-sm font-semibold text-[#1b1b18] mb-3">
                                    ID Document 
                                    <span class="text-[#706f6c] font-normal">(National ID, Driver's License, or Voter's Card)</span>
                                </label>
                                <div class="file-drop-zone rounded-xl p-6 text-center cursor-pointer" onclick="document.getElementById('id_document').click()">
                                    <svg class="w-12 h-12 text-[#706f6c] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                    </svg>
                                    <p class="text-[#706f6c] mb-2">Click to upload or drag and drop</p>
                                    <p class="text-sm text-[#706f6c]">PNG, JPG, PDF up to 5MB</p>
                                    <input type="file" id="id_document" name="id_document" class="hidden" accept=".png,.jpg,.jpeg,.pdf" onchange="handleFileUpload(this, 'idPreview')">
                                </div>
                                <div id="idPreview" class="mt-4 hidden">
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-green-700 text-sm" id="idFileName"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Certificates (Optional) -->
                            <div>
                                <label class="block text-sm font-semibold text-[#1b1b18] mb-3">
                                    Certificates 
                                    <span class="text-[#706f6c] font-normal">(Optional - Trade certificates, training certificates)</span>
                                </label>
                                <div class="file-drop-zone rounded-xl p-6 text-center cursor-pointer" onclick="document.getElementById('certificates').click()">
                                    <svg class="w-12 h-12 text-[#706f6c] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    <p class="text-[#706f6c] mb-2">Click to upload or drag and drop</p>
                                    <p class="text-sm text-[#706f6c]">PNG, JPG, PDF up to 5MB each</p>
                                    <input type="file" id="certificates" name="certificates[]" class="hidden" accept=".png,.jpg,.jpeg,.pdf" multiple onchange="handleMultipleFileUpload(this, 'certificatesPreview')">
                                </div>
                                <div id="certificatesPreview" class="mt-4 space-y-2"></div>
                            </div>

                            <!-- Profile Photo -->
                            <div>
                                <label class="block text-sm font-semibold text-[#1b1b18] mb-3">
                                    Profile Photo 
                                    <span class="text-[#706f6c] font-normal">(Optional - Helps build trust with customers)</span>
                                </label>
                                <div class="file-drop-zone rounded-xl p-6 text-center cursor-pointer" onclick="document.getElementById('profile_photo').click()">
                                    <svg class="w-12 h-12 text-[#706f6c] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <p class="text-[#706f6c] mb-2">Click to upload or drag and drop</p>
                                    <p class="text-sm text-[#706f6c]">PNG, JPG up to 2MB</p>
                                    <input type="file" id="profile_photo" name="profile_photo" class="hidden" accept=".png,.jpg,.jpeg" onchange="handleImageUpload(this, 'photoPreview')">
                                </div>
                                <div id="photoPreview" class="mt-4 hidden">
                                    <div class="flex items-center justify-center">
                                        <img id="photoImage" class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg" alt="Profile preview">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-start">
                        <input 
                            type="checkbox" 
                            id="terms" 
                            name="terms" 
                            required
                            class="h-5 w-5 text-[#16A34A] focus:ring-[#16A34A] border-gray-300 rounded mt-1 touch-target"
                        >
                        <label for="terms" class="ml-3 text-sm text-[#706f6c] leading-relaxed">
                            I agree to the 
                            <a href="#" class="text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 touch-target">Terms & Conditions</a> 
                            and 
                            <a href="#" class="text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 touch-target">Privacy Policy</a>. 
                            I confirm that all information provided is accurate and I am authorized to use the uploaded documents.
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button 
                            type="button" 
                            onclick="goBackToStep1()" 
                            class="flex-1 bg-gray-100 text-[#706f6c] font-semibold py-4 px-6 rounded-xl hover:bg-gray-200 transition-all duration-300 text-lg focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 touch-target"
                        >
                            <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Back
                        </button>
                        <button 
                            type="submit" 
                            class="flex-1 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transform transition-all duration-300 text-lg focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:ring-offset-2 btn-hover touch-target"
                            id="submitButton"
                        >
                            <span class="flex items-center justify-center" id="submitContent">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                                Create Account
                            </span>
                            <span class="hidden items-center justify-center" id="submitLoading">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Creating Account...
                            </span>
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center">
                        <p class="text-sm text-[#706f6c]">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="font-semibold text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 touch-target">
                                Sign in
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        let selectedRole = '';
        let currentStep = 1;

        // Role selection
        function selectRole(role) {
            selectedRole = role;
            
            // Remove selection from both cards
            document.getElementById('seekerCard').classList.remove('selected');
            document.getElementById('providerCard').classList.remove('selected');
            
            // Add selection to chosen card
            if (role === 'seeker') {
                document.getElementById('seekerCard').classList.add('selected');
            } else {
                document.getElementById('providerCard').classList.add('selected');
            }
            
            // Enable continue button
            document.getElementById('continueBtn').disabled = false;
            
            // Store selection in session storage
            sessionStorage.setItem('selectedRole', role);
        }

        // Proceed to step 2
        function proceedToStep2() {
            if (!selectedRole) return;
            
            currentStep = 2;
            
            // Hide step 1, show step 2
            document.getElementById('step1').classList.add('hidden');
            document.getElementById('step2').classList.remove('hidden');
            
            // Update progress
            document.getElementById('progressBar').style.width = '100%';
            document.getElementById('stepText').textContent = 'Step 2 of 2';
            
            // Update step indicators
            document.querySelectorAll('.step-indicator')[0].classList.add('completed');
            document.querySelectorAll('.step-indicator')[1].classList.add('active');
            
            // Set user type in form
            document.getElementById('userType').value = selectedRole === 'seeker' ? 'service_seeker' : 'service_provider';
            
            // Update form based on role
            updateFormForRole(selectedRole);
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Go back to step 1
        function goBackToStep1() {
            currentStep = 1;
            
            // Show step 1, hide step 2
            document.getElementById('step1').classList.remove('hidden');
            document.getElementById('step2').classList.add('hidden');
            
            // Update progress
            document.getElementById('progressBar').style.width = '0%';
            document.getElementById('stepText').textContent = 'Step 1 of 2';
            
            // Update step indicators
            document.querySelectorAll('.step-indicator')[0].classList.remove('completed');
            document.querySelectorAll('.step-indicator')[1].classList.remove('active');
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Update form based on selected role
        function updateFormForRole(role) {
            const providerFields = document.getElementById('providerFields');
            const emailOptional = document.getElementById('emailOptional');
            const emailInput = document.getElementById('email');
            const formTitle = document.getElementById('formTitle');
            const formSubtitle = document.getElementById('formSubtitle');
            
            if (role === 'provider') {
                providerFields.classList.remove('hidden');
                emailOptional.classList.add('hidden');
                emailInput.required = true;
                formTitle.textContent = 'Create Your Professional Profile';
                formSubtitle.textContent = 'Tell us about your services and experience';
            } else {
                providerFields.classList.add('hidden');
                emailOptional.classList.remove('hidden');
                emailInput.required = false;
                formTitle.textContent = 'Create Your Account';
                formSubtitle.textContent = 'Fill in your details to get started';
            }
        }

        // Password toggle functionality
        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const button = passwordInput.nextElementSibling;
            const eyeOpen = button.querySelector('.eye-open');
            const eyeClosed = button.querySelector('.eye-closed');
            
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

        // Password strength checker
        document.getElementById('password').addEventListener('input', function(e) {
            const password = e.target.value;
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');
            
            let strength = 0;
            let text = 'Weak';
            let className = 'strength-weak';
            
            // Check password criteria
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            
            // Update strength display
            if (strength >= 4) {
                text = 'Strong';
                className = 'strength-strong';
            } else if (strength >= 3) {
                text = 'Good';
                className = 'strength-good';
            } else if (strength >= 2) {
                text = 'Fair';
                className = 'strength-fair';
            }
            
            strengthBar.className = `password-strength ${className}`;
            strengthText.textContent = text;
        });

        // Nigerian phone number formatting
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value;
            
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
        });

        // Get current location
        function getCurrentLocation() {
            const locationInput = document.getElementById('location');
            const button = event.target;
            
            if (navigator.geolocation) {
                button.innerHTML = '<svg class="w-4 h-4 mr-1 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>Getting...';
                
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        // In a real app, you'd reverse geocode these coordinates
                        // For now, we'll just use a placeholder
                        locationInput.value = `Bauchi, Nigeria (${position.coords.latitude.toFixed(4)}, ${position.coords.longitude.toFixed(4)})`;
                        button.innerHTML = '<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Done';
                        
                        setTimeout(() => {
                            button.innerHTML = '<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>Use Current';
                        }, 2000);
                    },
                    function(error) {
                        alert('Unable to get your location. Please enter it manually.');
                        button.innerHTML = '<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>Use Current';
                    }
                );
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        }

        // Bio character counter
        document.getElementById('bio').addEventListener('input', function(e) {
            const count = e.target.value.length;
            document.getElementById('bioCount').textContent = count;
            
            if (count > 500) {
                e.target.value = e.target.value.substring(0, 500);
                document.getElementById('bioCount').textContent = 500;
            }
        });

        // File upload handlers
        function handleFileUpload(input, previewId) {
            const file = input.files[0];
            const preview = document.getElementById(previewId);
            const fileName = document.getElementById(previewId.replace('Preview', 'FileName'));
            
            if (file) {
                preview.classList.remove('hidden');
                if (fileName) {
                    fileName.textContent = file.name;
                }
            }
        }

        function handleMultipleFileUpload(input, previewId) {
            const files = input.files;
            const preview = document.getElementById(previewId);
            
            preview.innerHTML = '';
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const fileDiv = document.createElement('div');
                fileDiv.className = 'flex items-center p-3 bg-green-50 rounded-lg';
                fileDiv.innerHTML = `
                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-green-700 text-sm">${file.name}</span>
                `;
                preview.appendChild(fileDiv);
            }
        }

        function handleImageUpload(input, previewId) {
            const file = input.files[0];
            const preview = document.getElementById(previewId);
            const image = document.getElementById('photoImage');
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                    preview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        }

        // Drag and drop functionality
        document.querySelectorAll('.file-drop-zone').forEach(zone => {
            zone.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('dragover');
            });
            
            zone.addEventListener('dragleave', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
            });
            
            zone.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
                
                const files = e.dataTransfer.files;
                const input = this.querySelector('input[type="file"]');
                
                if (input && files.length > 0) {
                    input.files = files;
                    input.dispatchEvent(new Event('change'));
                }
            });
        });

        // Form submission with loading state
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const button = document.getElementById('submitButton');
            const content = document.getElementById('submitContent');
            const loading = document.getElementById('submitLoading');
            
            button.disabled = true;
            button.classList.add('loading');
            content.classList.add('hidden');
            loading.classList.remove('hidden');
            loading.classList.add('flex');
        });

        // Restore role selection from session storage
        window.addEventListener('load', function() {
            const savedRole = sessionStorage.getItem('selectedRole');
            if (savedRole) {
                selectRole(savedRole);
            }
        });

        // Add ripple effect to buttons
        document.querySelectorAll('button, .role-card').forEach(element => {
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

        // Auto-focus first input when step 2 is shown
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    const step2 = document.getElementById('step2');
                    if (!step2.classList.contains('hidden')) {
                        setTimeout(() => {
                            const firstInput = step2.querySelector('input');
                            if (firstInput) {
                                firstInput.focus();
                            }
                        }, 300);
                    }
                }
            });
        });

        observer.observe(document.getElementById('step2'), {
            attributes: true,
            attributeFilter: ['class']
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

