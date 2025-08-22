<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-br from-[#FDFDFC] via-[#F5F5F3] to-[#E8F5E8] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full opacity-10 blur-3xl"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-tr from-[#22C55E] to-[#16A34A] rounded-full opacity-10 blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-[#16A34A] to-[#22C55E] rounded-full opacity-5 blur-3xl"></div>
        </div>

        <div class="max-w-4xl mx-auto relative z-10">
            <!-- Logo and Header -->
            <div class="text-center mb-8">
                <a href="{{ url('/') }}" class="inline-flex items-center mb-6 group">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl mr-3 flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <span class="text-3xl font-bold bg-gradient-to-r from-[#16A34A] to-[#22C55E] bg-clip-text text-transparent">KwadagoPlus</span>
                </a>
                <h2 class="text-3xl font-bold text-[#1b1b18] mb-2">Join KwadagoPlus</h2>
                <p class="text-[#706f6c] text-lg">Connect with trusted local workers or start offering your services</p>
            </div>

            <!-- Progress Indicator -->
            <div class="flex items-center justify-center mb-8">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <div id="step1-indicator" class="w-8 h-8 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-full flex items-center justify-center text-sm font-semibold">1</div>
                        <span id="step1-text" class="ml-2 text-sm font-medium text-[#16A34A]">Choose Role</span>
                    </div>
                    <div class="w-16 h-1 bg-gray-200 rounded-full">
                        <div id="progress-bar" class="h-1 bg-gradient-to-r from-[#16A34A] to-[#22C55E] rounded-full transition-all duration-500" style="width: 50%"></div>
                    </div>
                    <div class="flex items-center">
                        <div id="step2-indicator" class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center text-sm font-semibold">2</div>
                        <span id="step2-text" class="ml-2 text-sm font-medium text-gray-500">Create Account</span>
                    </div>
                </div>
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6 max-w-2xl mx-auto">
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

            <!-- Step 1: Role Selection -->
            <div id="step1" class="step-container">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <!-- Service Seeker Card -->
                    <div class="role-card bg-white/80 backdrop-blur-xl border border-white/20 shadow-2xl rounded-2xl p-8 cursor-pointer hover:shadow-3xl transform hover:scale-105 transition-all duration-500" onclick="selectRole('seeker')">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-[#1b1b18] mb-4">I Need a Worker</h3>
                            <p class="text-[#706f6c] mb-6 leading-relaxed">Find trusted local professionals for your home and business needs. Get quality work done quickly and safely.</p>
                            <div class="space-y-2 text-sm text-[#706f6c] mb-6">
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Browse verified workers
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Compare prices and reviews
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Secure payment protection
                                </div>
                            </div>
                            <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                Select This Option
                            </button>
                        </div>
                    </div>

                    <!-- Service Provider Card -->
                    <div class="role-card bg-white/80 backdrop-blur-xl border border-white/20 shadow-2xl rounded-2xl p-8 cursor-pointer hover:shadow-3xl transform hover:scale-105 transition-all duration-500" onclick="selectRole('provider')">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-[#1b1b18] mb-4">I Am a Worker</h3>
                            <p class="text-[#706f6c] mb-6 leading-relaxed">Offer your skills and services to customers in your area. Build your business and earn more income.</p>
                            <div class="space-y-2 text-sm text-[#706f6c] mb-6">
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Get more customers
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Set your own rates
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Build your reputation
                                </div>
                            </div>
                            <button class="w-full bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                Select This Option
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Registration Forms -->
            <div id="step2" class="step-container hidden">
                <!-- Back Button -->
                <div class="mb-6">
                    <button onclick="goBackToStep1()" class="inline-flex items-center text-[#16A34A] hover:text-[#15803D] transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Back to role selection
                    </button>
                </div>

                <!-- Service Seeker Form -->
                <div id="seeker-form" class="registration-form hidden">
                    <div class="bg-white/80 backdrop-blur-xl border border-white/20 shadow-2xl rounded-2xl p-8 max-w-2xl mx-auto">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-[#1b1b18] mb-2">Create Your Account</h3>
                            <p class="text-[#706f6c]">Join as a service seeker to find trusted local workers</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}" class="space-y-6">
                            @csrf
                            <input type="hidden" name="role" value="seeker">

                            <!-- Full Name -->
                            <div>
                                <label for="seeker_name" class="block text-sm font-semibold text-[#1b1b18] mb-2">Full Name</label>
                                <input 
                                    id="seeker_name" 
                                    name="name" 
                                    type="text" 
                                    autocomplete="name" 
                                    required
                                    placeholder="Enter your full name"
                                    class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                    value="{{ old('name') }}" 
                                />
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label for="seeker_phone" class="block text-sm font-semibold text-[#1b1b18] mb-2">Phone Number</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <span class="text-[#706f6c] text-lg">+234</span>
                                    </div>
                                    <input 
                                        id="seeker_phone" 
                                        name="phone" 
                                        type="tel" 
                                        required
                                        placeholder="Enter phone number"
                                        class="w-full pl-16 pr-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                        value="{{ old('phone') }}" 
                                    />
                                </div>
                            </div>

                            <!-- Email (Optional) -->
                            <div>
                                <label for="seeker_email" class="block text-sm font-semibold text-[#1b1b18] mb-2">Email Address <span class="text-[#706f6c] font-normal">(Optional)</span></label>
                                <input 
                                    id="seeker_email" 
                                    name="email" 
                                    type="email" 
                                    autocomplete="email"
                                    placeholder="Enter email address"
                                    class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                    value="{{ old('email') }}" 
                                />
                            </div>

                            <!-- Password Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="seeker_password" class="block text-sm font-semibold text-[#1b1b18] mb-2">Password</label>
                                    <div class="relative">
                                        <input 
                                            id="seeker_password" 
                                            name="password" 
                                            type="password" 
                                            autocomplete="new-password" 
                                            required
                                            placeholder="Create password"
                                            class="w-full px-4 pr-12 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                        />
                                        <button 
                                            type="button" 
                                            onclick="togglePasswordVisibility('seeker_password')" 
                                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#706f6c] hover:text-[#16A34A] transition-colors duration-200"
                                        >
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <label for="seeker_password_confirmation" class="block text-sm font-semibold text-[#1b1b18] mb-2">Confirm Password</label>
                                    <input 
                                        id="seeker_password_confirmation" 
                                        name="password_confirmation" 
                                        type="password" 
                                        required
                                        placeholder="Confirm password"
                                        class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                    />
                                </div>
                            </div>

                            <!-- Password Strength Meter -->
                            <div id="seeker-password-strength" class="hidden">
                                <div class="text-sm text-[#706f6c] mb-2">Password Strength:</div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div id="seeker-strength-bar" class="h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                                </div>
                                <div id="seeker-strength-text" class="text-sm mt-1"></div>
                            </div>

                            <!-- Location -->
                            <div>
                                <label for="seeker_location" class="block text-sm font-semibold text-[#1b1b18] mb-2">Location</label>
                                <div class="relative">
                                    <input 
                                        id="seeker_location" 
                                        name="location" 
                                        type="text" 
                                        required
                                        placeholder="Enter your location"
                                        class="w-full px-4 pr-32 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                        value="{{ old('location') }}" 
                                    />
                                    <button 
                                        type="button" 
                                        onclick="getCurrentLocation()" 
                                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 text-sm font-medium"
                                    >
                                        Use Current
                                    </button>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="flex items-start">
                                <input 
                                    id="seeker_terms" 
                                    name="terms" 
                                    type="checkbox" 
                                    required
                                    class="h-4 w-4 text-[#16A34A] focus:ring-[#16A34A] border-gray-300 rounded mt-1"
                                >
                                <label for="seeker_terms" class="ml-3 text-sm text-[#706f6c]">
                                    I agree to the <a href="#" class="text-[#16A34A] hover:text-[#15803D]">Terms & Conditions</a> and <a href="#" class="text-[#16A34A] hover:text-[#15803D]">Privacy Policy</a>
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button 
                                type="submit" 
                                class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-[1.02] transition-all duration-300 text-lg"
                            >
                                Create Account
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Service Provider Form -->
                <div id="provider-form" class="registration-form hidden">
                    <div class="bg-white/80 backdrop-blur-xl border border-white/20 shadow-2xl rounded-2xl p-8 max-w-4xl mx-auto">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-[#1b1b18] mb-2">Create Your Worker Profile</h3>
                            <p class="text-[#706f6c]">Join as a service provider to offer your skills to customers</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-6">
                            @csrf
                            <input type="hidden" name="role" value="provider">

                            <!-- Basic Information -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="provider_name" class="block text-sm font-semibold text-[#1b1b18] mb-2">Full Name</label>
                                    <input 
                                        id="provider_name" 
                                        name="name" 
                                        type="text" 
                                        autocomplete="name" 
                                        required
                                        placeholder="Enter your full name"
                                        class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                        value="{{ old('name') }}" 
                                    />
                                </div>

                                <div>
                                    <label for="provider_phone" class="block text-sm font-semibold text-[#1b1b18] mb-2">Phone Number</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <span class="text-[#706f6c] text-lg">+234</span>
                                        </div>
                                        <input 
                                            id="provider_phone" 
                                            name="phone" 
                                            type="tel" 
                                            required
                                            placeholder="Enter phone number"
                                            class="w-full pl-16 pr-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                            value="{{ old('phone') }}" 
                                        />
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="provider_email" class="block text-sm font-semibold text-[#1b1b18] mb-2">Email Address</label>
                                <input 
                                    id="provider_email" 
                                    name="email" 
                                    type="email" 
                                    autocomplete="email" 
                                    required
                                    placeholder="Enter email address"
                                    class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                    value="{{ old('email') }}" 
                                />
                            </div>

                            <!-- Password Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="provider_password" class="block text-sm font-semibold text-[#1b1b18] mb-2">Password</label>
                                    <div class="relative">
                                        <input 
                                            id="provider_password" 
                                            name="password" 
                                            type="password" 
                                            autocomplete="new-password" 
                                            required
                                            placeholder="Create password"
                                            class="w-full px-4 pr-12 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                        />
                                        <button 
                                            type="button" 
                                            onclick="togglePasswordVisibility('provider_password')" 
                                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#706f6c] hover:text-[#16A34A] transition-colors duration-200"
                                        >
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <label for="provider_password_confirmation" class="block text-sm font-semibold text-[#1b1b18] mb-2">Confirm Password</label>
                                    <input 
                                        id="provider_password_confirmation" 
                                        name="password_confirmation" 
                                        type="password" 
                                        required
                                        placeholder="Confirm password"
                                        class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                    />
                                </div>
                            </div>

                            <!-- Password Strength Meter -->
                            <div id="provider-password-strength" class="hidden">
                                <div class="text-sm text-[#706f6c] mb-2">Password Strength:</div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div id="provider-strength-bar" class="h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                                </div>
                                <div id="provider-strength-text" class="text-sm mt-1"></div>
                            </div>

                            <!-- Service Information -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="service_category" class="block text-sm font-semibold text-[#1b1b18] mb-2">Service Category</label>
                                    <select 
                                        id="service_category" 
                                        name="service_category" 
                                        required
                                        class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                    >
                                        <option value="">Select your service</option>
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

                                <div>
                                    <label for="experience_years" class="block text-sm font-semibold text-[#1b1b18] mb-2">Years of Experience</label>
                                    <select 
                                        id="experience_years" 
                                        name="experience_years" 
                                        required
                                        class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
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

                            <!-- Location and Service Area -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="provider_location" class="block text-sm font-semibold text-[#1b1b18] mb-2">Your Location</label>
                                    <div class="relative">
                                        <input 
                                            id="provider_location" 
                                            name="location" 
                                            type="text" 
                                            required
                                            placeholder="Enter your location"
                                            class="w-full px-4 pr-32 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                            value="{{ old('location') }}" 
                                        />
                                        <button 
                                            type="button" 
                                            onclick="getCurrentLocation()" 
                                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#16A34A] hover:text-[#15803D] transition-colors duration-200 text-sm font-medium"
                                        >
                                            Use Current
                                        </button>
                                    </div>
                                </div>

                                <div>
                                    <label for="service_radius" class="block text-sm font-semibold text-[#1b1b18] mb-2">Service Area Radius</label>
                                    <select 
                                        id="service_radius" 
                                        name="service_radius" 
                                        required
                                        class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                    >
                                        <option value="">Select radius</option>
                                        <option value="5">Within 5km</option>
                                        <option value="10">Within 10km</option>
                                        <option value="20">Within 20km</option>
                                        <option value="50">Within 50km</option>
                                        <option value="unlimited">Anywhere in Bauchi</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Hourly Rate -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="hourly_rate_min" class="block text-sm font-semibold text-[#1b1b18] mb-2">Minimum Hourly Rate (₦)</label>
                                    <input 
                                        id="hourly_rate_min" 
                                        name="hourly_rate_min" 
                                        type="number" 
                                        min="500" 
                                        step="100"
                                        required
                                        placeholder="e.g. 2000"
                                        class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                        value="{{ old('hourly_rate_min') }}" 
                                    />
                                </div>

                                <div>
                                    <label for="hourly_rate_max" class="block text-sm font-semibold text-[#1b1b18] mb-2">Maximum Hourly Rate (₦)</label>
                                    <input 
                                        id="hourly_rate_max" 
                                        name="hourly_rate_max" 
                                        type="number" 
                                        min="500" 
                                        step="100"
                                        required
                                        placeholder="e.g. 5000"
                                        class="w-full px-4 py-4 border border-gray-200 rounded-xl bg-white/50 backdrop-blur-sm text-[#1b1b18] placeholder-[#706f6c] focus:outline-none focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all duration-300 text-lg"
                                        value="{{ old('hourly_rate_max') }}" 
                                    />
                                </div>
                            </div>

                            <!-- Document Uploads -->
                            <div class="space-y-6">
                                <h4 class="text-lg font-semibold text-[#1b1b18]">Document Verification</h4>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- ID Upload -->
                                    <div>
                                        <label class="block text-sm font-semibold text-[#1b1b18] mb-2">Government ID</label>
                                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-[#16A34A] transition-colors duration-300">
                                            <input type="file" id="id_document" name="id_document" accept="image/*,.pdf" class="hidden" onchange="handleFileUpload(this, 'id-preview')">
                                            <label for="id_document" class="cursor-pointer">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="mt-2">
                                                    <span class="text-[#16A34A] font-medium">Upload ID</span>
                                                    <p class="text-sm text-[#706f6c]">PNG, JPG or PDF up to 5MB</p>
                                                </div>
                                            </label>
                                            <div id="id-preview" class="mt-2 hidden"></div>
                                        </div>
                                    </div>

                                    <!-- Certificate Upload -->
                                    <div>
                                        <label class="block text-sm font-semibold text-[#1b1b18] mb-2">Certificates <span class="text-[#706f6c] font-normal">(Optional)</span></label>
                                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-[#16A34A] transition-colors duration-300">
                                            <input type="file" id="certificates" name="certificates[]" accept="image/*,.pdf" multiple class="hidden" onchange="handleFileUpload(this, 'cert-preview')">
                                            <label for="certificates" class="cursor-pointer">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="mt-2">
                                                    <span class="text-[#16A34A] font-medium">Upload Certificates</span>
                                                    <p class="text-sm text-[#706f6c]">Training certificates, licenses</p>
                                                </div>
                                            </label>
                                            <div id="cert-preview" class="mt-2 hidden"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Profile Photo -->
                                <div>
                                    <label class="block text-sm font-semibold text-[#1b1b18] mb-2">Profile Photo</label>
                                    <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-[#16A34A] transition-colors duration-300">
                                        <input type="file" id="profile_photo" name="profile_photo" accept="image/*" class="hidden" onchange="handleFileUpload(this, 'photo-preview')">
                                        <label for="profile_photo" class="cursor-pointer">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                <path d="M20 12a8 8 0 11-16 0 8 8 0 0116 0zm-8 9s-4 4-4 6v3h16v-3c0-2-4-6-4-6s-4 4-8 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="mt-2">
                                                <span class="text-[#16A34A] font-medium">Upload Photo</span>
                                                <p class="text-sm text-[#706f6c]">Clear photo of yourself</p>
                                            </div>
                                        </label>
                                        <div id="photo-preview" class="mt-2 hidden"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="flex items-start">
                                <input 
                                    id="provider_terms" 
                                    name="terms" 
                                    type="checkbox" 
                                    required
                                    class="h-4 w-4 text-[#16A34A] focus:ring-[#16A34A] border-gray-300 rounded mt-1"
                                >
                                <label for="provider_terms" class="ml-3 text-sm text-[#706f6c]">
                                    I agree to the <a href="#" class="text-[#16A34A] hover:text-[#15803D]">Terms & Conditions</a>, <a href="#" class="text-[#16A34A] hover:text-[#15803D]">Privacy Policy</a>, and <a href="#" class="text-[#16A34A] hover:text-[#15803D]">Service Provider Agreement</a>
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button 
                                type="submit" 
                                class="w-full bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-[1.02] transition-all duration-300 text-lg"
                            >
                                Create Worker Profile
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Login Link -->
            <div class="text-center mt-8">
                <p class="text-sm text-[#706f6c]">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="font-semibold text-[#16A34A] hover:text-[#15803D] transition-colors duration-200">
                        Sign in
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        let selectedRole = null;

        function selectRole(role) {
            selectedRole = role;
            
            // Update progress
            document.getElementById('step1-indicator').classList.remove('bg-gradient-to-r', 'from-[#16A34A]', 'to-[#22C55E]');
            document.getElementById('step1-indicator').classList.add('bg-gray-400');
            document.getElementById('step1-text').classList.remove('text-[#16A34A]');
            document.getElementById('step1-text').classList.add('text-gray-500');
            
            document.getElementById('step2-indicator').classList.remove('bg-gray-200', 'text-gray-500');
            document.getElementById('step2-indicator').classList.add('bg-gradient-to-r', 'from-[#16A34A]', 'to-[#22C55E]', 'text-white');
            document.getElementById('step2-text').classList.remove('text-gray-500');
            document.getElementById('step2-text').classList.add('text-[#16A34A]');
            
            document.getElementById('progress-bar').style.width = '100%';
            
            // Hide step 1 and show step 2
            document.getElementById('step1').classList.add('hidden');
            document.getElementById('step2').classList.remove('hidden');
            
            // Show appropriate form
            if (role === 'seeker') {
                document.getElementById('seeker-form').classList.remove('hidden');
                document.getElementById('provider-form').classList.add('hidden');
            } else {
                document.getElementById('provider-form').classList.remove('hidden');
                document.getElementById('seeker-form').classList.add('hidden');
            }
            
            // Store role in session storage
            sessionStorage.setItem('selectedRole', role);
        }

        function goBackToStep1() {
            // Reset progress
            document.getElementById('step1-indicator').classList.add('bg-gradient-to-r', 'from-[#16A34A]', 'to-[#22C55E]');
            document.getElementById('step1-indicator').classList.remove('bg-gray-400');
            document.getElementById('step1-text').classList.add('text-[#16A34A]');
            document.getElementById('step1-text').classList.remove('text-gray-500');
            
            document.getElementById('step2-indicator').classList.add('bg-gray-200', 'text-gray-500');
            document.getElementById('step2-indicator').classList.remove('bg-gradient-to-r', 'from-[#16A34A]', 'to-[#22C55E]', 'text-white');
            document.getElementById('step2-text').classList.add('text-gray-500');
            document.getElementById('step2-text').classList.remove('text-[#16A34A]');
            
            document.getElementById('progress-bar').style.width = '50%';
            
            // Show step 1 and hide step 2
            document.getElementById('step1').classList.remove('hidden');
            document.getElementById('step2').classList.add('hidden');
            
            selectedRole = null;
            sessionStorage.removeItem('selectedRole');
        }

        function togglePasswordVisibility(inputId) {
            const input = document.getElementById(inputId);
            const button = input.nextElementSibling;
            const icon = button.querySelector('svg');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"/>';
            } else {
                input.type = 'password';
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>';
            }
        }

        function checkPasswordStrength(password, prefix) {
            const strengthBar = document.getElementById(prefix + '-strength-bar');
            const strengthText = document.getElementById(prefix + '-strength-text');
            const strengthContainer = document.getElementById(prefix + '-password-strength');
            
            if (password.length === 0) {
                strengthContainer.classList.add('hidden');
                return;
            }
            
            strengthContainer.classList.remove('hidden');
            
            let strength = 0;
            let feedback = [];
            
            if (password.length >= 8) strength += 1;
            else feedback.push('At least 8 characters');
            
            if (/[a-z]/.test(password)) strength += 1;
            else feedback.push('Lowercase letter');
            
            if (/[A-Z]/.test(password)) strength += 1;
            else feedback.push('Uppercase letter');
            
            if (/[0-9]/.test(password)) strength += 1;
            else feedback.push('Number');
            
            if (/[^A-Za-z0-9]/.test(password)) strength += 1;
            else feedback.push('Special character');
            
            const percentage = (strength / 5) * 100;
            strengthBar.style.width = percentage + '%';
            
            if (strength <= 2) {
                strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-red-500';
                strengthText.textContent = 'Weak - ' + feedback.join(', ');
                strengthText.className = 'text-sm mt-1 text-red-600';
            } else if (strength <= 3) {
                strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-yellow-500';
                strengthText.textContent = 'Fair - ' + feedback.join(', ');
                strengthText.className = 'text-sm mt-1 text-yellow-600';
            } else if (strength <= 4) {
                strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-blue-500';
                strengthText.textContent = 'Good';
                strengthText.className = 'text-sm mt-1 text-blue-600';
            } else {
                strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-green-500';
                strengthText.textContent = 'Strong';
                strengthText.className = 'text-sm mt-1 text-green-600';
            }
        }

        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    // In a real app, you'd reverse geocode these coordinates
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;
                    
                    // For demo purposes, just set a placeholder
                    const locationInputs = document.querySelectorAll('input[name="location"]');
                    locationInputs.forEach(input => {
                        input.value = 'Current Location (Lat: ' + lat.toFixed(4) + ', Lng: ' + lng.toFixed(4) + ')';
                    });
                }, function(error) {
                    alert('Unable to get your location. Please enter it manually.');
                });
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        }

        function handleFileUpload(input, previewId) {
            const preview = document.getElementById(previewId);
            const files = input.files;
            
            if (files.length > 0) {
                preview.innerHTML = '';
                preview.classList.remove('hidden');
                
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const fileDiv = document.createElement('div');
                    fileDiv.className = 'text-sm text-[#16A34A] bg-green-50 px-3 py-1 rounded-lg inline-block mr-2 mb-2';
                    fileDiv.textContent = file.name;
                    preview.appendChild(fileDiv);
                }
            }
        }

        // Phone number formatting
        function formatPhoneNumber(input) {
            let value = input.value.replace(/\D/g, '');
            
            if (value.length <= 3) {
                input.value = value;
            } else if (value.length <= 6) {
                input.value = value.slice(0, 3) + ' ' + value.slice(3);
            } else {
                input.value = value.slice(0, 3) + ' ' + value.slice(3, 6) + ' ' + value.slice(6, 10);
            }
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Restore role selection from session storage
            const savedRole = sessionStorage.getItem('selectedRole');
            if (savedRole) {
                selectRole(savedRole);
            }
            
            // Password strength checking
            const seekerPassword = document.getElementById('seeker_password');
            const providerPassword = document.getElementById('provider_password');
            
            if (seekerPassword) {
                seekerPassword.addEventListener('input', function() {
                    checkPasswordStrength(this.value, 'seeker');
                });
            }
            
            if (providerPassword) {
                providerPassword.addEventListener('input', function() {
                    checkPasswordStrength(this.value, 'provider');
                });
            }
            
            // Phone number formatting
            const phoneInputs = document.querySelectorAll('input[name="phone"]');
            phoneInputs.forEach(input => {
                input.addEventListener('input', function() {
                    formatPhoneNumber(this);
                });
            });
            
            // Add floating animation to background elements
            const decorativeElements = document.querySelectorAll('.absolute');
            decorativeElements.forEach((element, index) => {
                if (element.classList.contains('w-80') || element.classList.contains('w-96')) {
                    element.style.animation = `float ${3 + index}s ease-in-out infinite`;
                    element.style.animationDelay = `${index * 0.5}s`;
                }
            });
        });
    </script>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }
        
        .shadow-3xl {
            box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
        }
        
        .step-container {
            transition: all 0.5s ease-in-out;
        }
        
        .role-card {
            position: relative;
            overflow: hidden;
        }
        
        .role-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s;
        }
        
        .role-card:hover::before {
            left: 100%;
        }
        
        /* Custom focus styles */
        input:focus, select:focus {
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.1);
        }
        
        /* Smooth transitions for all interactive elements */
        * {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</x-guest-layout>
