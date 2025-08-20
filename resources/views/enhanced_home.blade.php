<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KwadagoPlus - Find Trusted Local Workers in Bauchi</title>
        <meta name="description" content="Connect with skilled plumbers, electricians, tailors, and more in Bauchi State. KwadagoPlus helps you find trusted local workers fast and safely.">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Google Maps API -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb6SfpP9TuZNj_cRXS8kU_Sqlz9n_6Buk&libraries=places&callback=initMap"></script>
        
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
            
            .hover-lift {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            .hover-lift:hover {
                transform: translateY(-8px);
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            }
            
            .fade-in {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.6s ease-out;
            }
            
            .fade-in.visible {
                opacity: 1;
                transform: translateY(0);
            }
            
            .floating {
                animation: floating 3s ease-in-out infinite;
            }
            
            @keyframes floating {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-10px); }
            }
            
            .pulse-ring {
                animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
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
            
            .typing-animation {
                overflow: hidden;
                border-right: 3px solid var(--primary-green);
                white-space: nowrap;
                animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
            }
            
            @keyframes typing {
                from { width: 0; }
                to { width: 100%; }
            }
            
            @keyframes blink-caret {
                from, to { border-color: transparent; }
                50% { border-color: var(--primary-green); }
            }
            
            .parallax {
                transform: translateZ(0);
                will-change: transform;
            }
            
            .service-card {
                background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
                border: 1px solid rgba(22, 163, 74, 0.1);
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            .service-card:hover {
                background: linear-gradient(145deg, #f8fdf9 0%, #ffffff 100%);
                border-color: var(--primary-green);
                transform: translateY(-5px) scale(1.02);
                box-shadow: 0 20px 40px rgba(22, 163, 74, 0.15);
            }
            
            .testimonial-card {
                background: rgba(255, 255, 255, 0.8);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.3);
                transition: all 0.3s ease;
            }
            
            .testimonial-card:hover {
                background: rgba(255, 255, 255, 0.95);
                transform: translateY(-5px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            }
            
            .stats-counter {
                font-family: 'Inter', sans-serif;
                font-weight: 700;
                color: var(--primary-green);
            }
            
            .search-container {
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(248, 250, 252, 0.9) 100%);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.3);
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            }
            
            .feature-icon {
                background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-light) 100%);
                transition: all 0.3s ease;
            }
            
            .feature-icon:hover {
                transform: rotate(5deg) scale(1.1);
                box-shadow: 0 10px 25px rgba(22, 163, 74, 0.3);
            }
        </style>
    </head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] min-h-screen font-['Inter']">
        <!-- Header -->
        <header class="fixed w-full glass-effect z-50 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <a href="{{ url('/') }}" class="text-2xl font-bold text-[#16A34A] flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-lg mr-2 flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            KwadagoPlus
                        </a>
                    </div>
                    
                    @if (Route::has('login'))
                        <nav class="flex items-center gap-4">
                            <!-- Main Desktop Navigation -->
                            <div class="hidden lg:flex items-center space-x-8">
                                <!-- Services Dropdown -->
                                <div class="relative group">
                                    <button class="flex items-center text-sm text-[#706f6c] hover:text-[#16A34A] transition-all duration-300 font-medium">
                                        Services
                                        <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="absolute left-0 mt-2 w-64 bg-white rounded-xl shadow-xl py-3 hidden group-hover:block border border-gray-100">
                                        <div class="grid grid-cols-1 gap-1">
                                            <a href="#" class="flex items-center px-4 py-3 text-sm text-[#706f6c] hover:text-[#16A34A] hover:bg-[#f8fdf9] transition-all">
                                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium">Plumbing</div>
                                                    <div class="text-xs text-gray-500">Pipes, repairs, installations</div>
                                                </div>
                                            </a>
                                            <a href="#" class="flex items-center px-4 py-3 text-sm text-[#706f6c] hover:text-[#16A34A] hover:bg-[#f8fdf9] transition-all">
                                                <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                                                    <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium">Electrical</div>
                                                    <div class="text-xs text-gray-500">Wiring, fixtures, repairs</div>
                                                </div>
                                            </a>
                                            <a href="#" class="flex items-center px-4 py-3 text-sm text-[#706f6c] hover:text-[#16A34A] hover:bg-[#f8fdf9] transition-all">
                                                <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                                    <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium">Carpentry</div>
                                                    <div class="text-xs text-gray-500">Furniture, repairs, custom work</div>
                                                </div>
                                            </a>
                                            <a href="#" class="flex items-center px-4 py-3 text-sm text-[#706f6c] hover:text-[#16A34A] hover:bg-[#f8fdf9] transition-all">
                                                <div class="w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                                    <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium">Mechanic</div>
                                                    <div class="text-xs text-gray-500">Auto repair, maintenance</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <a href="#about" class="text-sm text-[#706f6c] hover:text-[#16A34A] transition-all duration-300 font-medium">About</a>
                                <a href="#how-it-works" class="text-sm text-[#706f6c] hover:text-[#16A34A] transition-all duration-300 font-medium">How It Works</a>
                                <a href="#testimonials" class="text-sm text-[#706f6c] hover:text-[#16A34A] transition-all duration-300 font-medium">Reviews</a>
                                <a href="#contact" class="text-sm text-[#706f6c] hover:text-[#16A34A] transition-all duration-300 font-medium">Contact</a>
                            </div>

                            <!-- Language Selector -->
                            <div class="hidden md:flex items-center gap-2 ml-6 border-l pl-6 border-[#19140035]">
                                <div class="relative group">
                                    <button class="flex items-center text-sm text-[#706f6c] hover:text-[#16A34A] transition-all duration-300">
                                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                        </svg>
                                        English
                                        <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl py-2 hidden group-hover:block border border-gray-100">
                                        <a href="#" class="flex items-center px-4 py-2 text-sm text-[#706f6c] hover:text-[#16A34A] hover:bg-[#f8fdf9] transition-all">
                                            English
                                            <svg class="w-4 h-4 ml-auto text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-sm text-[#706f6c] hover:text-[#16A34A] hover:bg-[#f8fdf9] transition-all">Hausa</a>
                                        <a href="#" class="flex items-center px-4 py-2 text-sm text-[#706f6c] hover:text-[#16A34A] hover:bg-[#f8fdf9] transition-all">عربي</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Mobile Menu Button -->
                            <button class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-all" id="mobile-menu-button">
                                <svg class="w-6 h-6 text-[#1b1b18]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                            
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-full hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 text-sm font-medium shadow-lg hover:shadow-xl transform hover:scale-105">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                    </svg>
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-sm text-[#1b1b18] hover:text-[#16A34A] transition-all duration-300 font-medium">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-full hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 text-sm font-medium shadow-lg hover:shadow-xl transform hover:scale-105">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                        </svg>
                                        Get Started
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>
        </header>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden">
            <div class="fixed inset-y-0 right-0 w-80 bg-white shadow-2xl transform transition-transform duration-300 translate-x-full">
                <div class="p-6 h-full overflow-y-auto">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="text-xl font-bold text-[#1b1b18]">Menu</h3>
                        <button class="p-2 rounded-lg hover:bg-gray-100 transition-all" id="close-mobile-menu">
                            <svg class="w-6 h-6 text-[#1b1b18]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <nav class="space-y-8">
                        <!-- Services Section -->
                        <div class="space-y-3">
                            <h3 class="text-sm font-semibold text-[#1b1b18] uppercase tracking-wider">Services</h3>
                            <div class="space-y-3 pl-4">
                                <a href="#" class="flex items-center text-[#706f6c] hover:text-[#16A34A] transition-all py-2">
                                    <div class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                        </svg>
                                    </div>
                                    Plumbing
                                </a>
                                <a href="#" class="flex items-center text-[#706f6c] hover:text-[#16A34A] transition-all py-2">
                                    <div class="w-6 h-6 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                        </svg>
                                    </div>
                                    Electrical
                                </a>
                                <a href="#" class="flex items-center text-[#706f6c] hover:text-[#16A34A] transition-all py-2">
                                    <div class="w-6 h-6 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                        </svg>
                                    </div>
                                    Carpentry
                                </a>
                                <a href="#" class="flex items-center text-[#706f6c] hover:text-[#16A34A] transition-all py-2">
                                    <div class="w-6 h-6 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                        </svg>
                                    </div>
                                    Mechanic
                                </a>
                            </div>
                        </div>

                        <a href="#about" class="block text-[#706f6c] hover:text-[#16A34A] transition-all font-medium">About</a>
                        <a href="#how-it-works" class="block text-[#706f6c] hover:text-[#16A34A] transition-all font-medium">How It Works</a>
                        <a href="#testimonials" class="block text-[#706f6c] hover:text-[#16A34A] transition-all font-medium">Reviews</a>
                        <a href="#contact" class="block text-[#706f6c] hover:text-[#16A34A] transition-all font-medium">Contact</a>

                        <!-- Language Selector -->
                        <div class="pt-6 border-t border-gray-200">
                            <h3 class="text-sm font-semibold text-[#1b1b18] mb-3 uppercase tracking-wider">Language</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center text-[#706f6c] hover:text-[#16A34A] transition-all py-2">
                                    English
                                    <svg class="w-4 h-4 ml-auto text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </a>
                                <a href="#" class="block text-[#706f6c] hover:text-[#16A34A] transition-all py-2">Hausa</a>
                                <a href="#" class="block text-[#706f6c] hover:text-[#16A34A] transition-all py-2">عربي</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Hero Section -->
        <section class="relative pt-24 overflow-hidden bg-gradient-to-br from-[#FDFDFC] via-[#F5F5F3] to-[#F0F9F0] min-h-screen flex items-center">
            <!-- Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full opacity-10 floating"></div>
                <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-[#16A34A] to-[#22C55E] rounded-full opacity-5 floating" style="animation-delay: -1s;"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-[#16A34A] to-[#22C55E] rounded-full opacity-5 pulse-ring"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 relative z-10">
                <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                    <div class="mb-12 lg:mb-0 fade-in">
                        <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                            <span class="w-2 h-2 bg-[#16A34A] rounded-full mr-2 animate-pulse"></span>
                            Trusted by 10,000+ customers
                        </div>
                        
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#1b1b18] mb-6 leading-tight">
                            Find Local Services<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E] typing-animation">You Can Trust</span>
                        </h1>
                        
                        <p class="text-xl text-[#706f6c] mb-8 max-w-xl leading-relaxed">
                            Connect with skilled professionals in Bauchi State for all your service needs. From plumbers to electricians, find reliable help in your community with verified reviews and instant booking.
                        </p>
                        
                        <!-- Enhanced Search Bar -->
                        <div class="search-container rounded-2xl p-6 mb-8">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">What service do you need?</label>
                                    <div class="relative">
                                        <input type="text" placeholder="e.g., Plumber, Electrician, Carpenter..." 
                                               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all">
                                        <svg class="absolute right-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="sm:w-48">
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">Location</label>
                                    <div class="relative">
                                        <input type="text" placeholder="Bauchi, Nigeria" 
                                               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all">
                                        <svg class="absolute right-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="sm:w-auto">
                                    <label class="block text-sm font-medium text-transparent mb-2">Search</label>
                                    <button class="w-full sm:w-auto px-8 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="{{ route('register') }}" 
                               class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                                Get Started Free
                            </a>
                            <a href="#how-it-works" 
                               class="inline-flex items-center justify-center px-8 py-4 bg-white text-[#1b1b18] rounded-xl hover:bg-gray-50 transition-all duration-300 font-semibold border border-gray-200 shadow-sm hover:shadow-md">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293H15M9 10v4a2 2 0 002 2h2a2 2 0 002-2v-4M9 10V9a2 2 0 012-2h2a2 2 0 012 2v1"/>
                                </svg>
                                How It Works
                            </a>
                        </div>
                        
                        <!-- Trust Indicators -->
                        <div class="flex items-center gap-8 text-sm text-[#706f6c]">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Verified Professionals
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Instant Booking
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                24/7 Support
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative fade-in" style="animation-delay: 0.3s;">
                        <!-- Hero Image/Illustration -->
                        <div class="relative">
                            <div class="bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-3xl p-8 shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500">
                                <div class="bg-white rounded-2xl p-6 shadow-lg">
                                    <div class="grid grid-cols-2 gap-4 mb-6">
                                        <div class="bg-blue-50 rounded-xl p-4 text-center hover-lift">
                                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-semibold text-sm text-gray-800">Plumbing</h4>
                                            <p class="text-xs text-gray-600">150+ Experts</p>
                                        </div>
                                        <div class="bg-yellow-50 rounded-xl p-4 text-center hover-lift">
                                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-semibold text-sm text-gray-800">Electrical</h4>
                                            <p class="text-xs text-gray-600">200+ Experts</p>
                                        </div>
                                        <div class="bg-orange-50 rounded-xl p-4 text-center hover-lift">
                                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-semibold text-sm text-gray-800">Carpentry</h4>
                                            <p class="text-xs text-gray-600">120+ Experts</p>
                                        </div>
                                        <div class="bg-red-50 rounded-xl p-4 text-center hover-lift">
                                            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-semibold text-sm text-gray-800">Mechanic</h4>
                                            <p class="text-xs text-gray-600">180+ Experts</p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-full text-sm font-medium">
                                            <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                                            650+ Active Professionals
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Floating Elements -->
                            <div class="absolute -top-4 -right-4 w-16 h-16 bg-white rounded-full shadow-lg flex items-center justify-center floating">
                                <svg class="w-8 h-8 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full shadow-lg flex items-center justify-center floating" style="animation-delay: -1.5s;">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center fade-in">
                        <div class="stats-counter text-4xl lg:text-5xl font-bold mb-2" data-target="10000">0</div>
                        <p class="text-[#706f6c] font-medium">Happy Customers</p>
                    </div>
                    <div class="text-center fade-in" style="animation-delay: 0.1s;">
                        <div class="stats-counter text-4xl lg:text-5xl font-bold mb-2" data-target="650">0</div>
                        <p class="text-[#706f6c] font-medium">Verified Professionals</p>
                    </div>
                    <div class="text-center fade-in" style="animation-delay: 0.2s;">
                        <div class="stats-counter text-4xl lg:text-5xl font-bold mb-2" data-target="50000">0</div>
                        <p class="text-[#706f6c] font-medium">Jobs Completed</p>
                    </div>
                    <div class="text-center fade-in" style="animation-delay: 0.3s;">
                        <div class="stats-counter text-4xl lg:text-5xl font-bold mb-2" data-target="98">0</div>
                        <p class="text-[#706f6c] font-medium">% Satisfaction Rate</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about" class="py-20 bg-gradient-to-br from-[#F5F5F3] to-[#F0F9F0]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                    <div class="mb-12 lg:mb-0 fade-in">
                        <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            About KwadagoPlus
                        </div>
                        
                        <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                            Connecting Communities with 
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">Trusted Professionals</span>
                        </h2>
                        
                        <p class="text-lg text-[#706f6c] mb-6 leading-relaxed">
                            Founded in 2023, KwadagoPlus was born from a simple idea: everyone deserves access to reliable, skilled professionals in their community. We started in Bauchi State with a mission to bridge the gap between service providers and customers.
                        </p>
                        
                        <p class="text-lg text-[#706f6c] mb-8 leading-relaxed">
                            Today, we're proud to be the leading platform connecting thousands of verified professionals with customers across Nigeria, ensuring quality service delivery and building trust in every interaction.
                        </p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                            <div class="flex items-start">
                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-[#1b1b18] mb-2">Verified Professionals</h3>
                                    <p class="text-[#706f6c] text-sm">Every professional undergoes thorough background checks and skill verification.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-[#1b1b18] mb-2">24/7 Support</h3>
                                    <p class="text-[#706f6c] text-sm">Round-the-clock customer support to ensure smooth service delivery.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-[#1b1b18] mb-2">Secure Payments</h3>
                                    <p class="text-[#706f6c] text-sm">Safe and secure payment processing with multiple payment options.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="feature-icon w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-[#1b1b18] mb-2">Quality Guarantee</h3>
                                    <p class="text-[#706f6c] text-sm">100% satisfaction guarantee with our quality assurance program.</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#contact" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            Learn More About Us
                        </a>
                    </div>
                    
                    <div class="fade-in" style="animation-delay: 0.3s;">
                        <div class="relative">
                            <!-- Mission & Vision Cards -->
                            <div class="space-y-6">
                                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-bold text-[#1b1b18]">Our Vision</h3>
                                    </div>
                                    <p class="text-[#706f6c] leading-relaxed">
                                        To become the most trusted platform for connecting communities with skilled professionals across Africa, fostering economic growth and empowerment.
                                    </p>
                                </div>
                                
                                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-bold text-[#1b1b18]">Our Mission</h3>
                                    </div>
                                    <p class="text-[#706f6c] leading-relaxed">
                                        To provide a reliable, secure, and user-friendly platform that connects customers with verified professionals, ensuring quality service delivery and building lasting trust.
                                    </p>
                                </div>
                                
                                <div class="bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-2xl p-8 text-white shadow-lg hover-lift">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-bold">Our Values</h3>
                                    </div>
                                    <ul class="space-y-2 text-white/90">
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Trust & Transparency
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Quality Excellence
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Community Impact
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Innovation & Growth
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                        Our Services
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        Professional Services 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">You Can Trust</span>
                    </h2>
                    <p class="text-xl text-[#706f6c] max-w-3xl mx-auto">
                        From emergency repairs to planned installations, our verified professionals are ready to help with all your service needs.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Plumbing Service -->
                    <div class="service-card rounded-2xl p-8 text-center hover-lift">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-4">Plumbing</h3>
                        <p class="text-[#706f6c] mb-6">Expert plumbers for repairs, installations, and emergency services. Available 24/7 for urgent needs.</p>
                        <div class="space-y-2 text-sm text-[#706f6c] mb-6">
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                150+ Verified Plumbers
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Emergency Services
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center text-[#16A34A] hover:text-[#15803D] font-medium transition-colors">
                            Book Now
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Electrical Service -->
                    <div class="service-card rounded-2xl p-8 text-center hover-lift">
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-4">Electrical</h3>
                        <p class="text-[#706f6c] mb-6">Licensed electricians for wiring, installations, and electrical repairs. Safety guaranteed.</p>
                        <div class="space-y-2 text-sm text-[#706f6c] mb-6">
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                200+ Licensed Electricians
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Safety Certified
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center text-[#16A34A] hover:text-[#15803D] font-medium transition-colors">
                            Book Now
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Carpentry Service -->
                    <div class="service-card rounded-2xl p-8 text-center hover-lift">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-4">Carpentry</h3>
                        <p class="text-[#706f6c] mb-6">Skilled carpenters for furniture, repairs, and custom woodwork. Quality craftsmanship guaranteed.</p>
                        <div class="space-y-2 text-sm text-[#706f6c] mb-6">
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                120+ Expert Carpenters
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Custom Work Available
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center text-[#16A34A] hover:text-[#15803D] font-medium transition-colors">
                            Book Now
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Mechanic Service -->
                    <div class="service-card rounded-2xl p-8 text-center hover-lift">
                        <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-4">Auto Mechanic</h3>
                        <p class="text-[#706f6c] mb-6">Professional mechanics for vehicle repairs, maintenance, and diagnostics. Mobile service available.</p>
                        <div class="space-y-2 text-sm text-[#706f6c] mb-6">
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                180+ Certified Mechanics
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#16A34A] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Mobile Service
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center text-[#16A34A] hover:text-[#15803D] font-medium transition-colors">
                            Book Now
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- View All Services Button -->
                <div class="text-center mt-12 fade-in">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                        View All Services
                    </a>
                </div>
            </div>
        </section>

        <!-- Success Gallery Section -->
        <section class="py-20 bg-gradient-to-br from-[#F5F5F3] to-[#F0F9F0]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Our Work
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        Recent Success 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">Stories</span>
                    </h2>
                    <p class="text-xl text-[#706f6c] max-w-3xl mx-auto">
                        Browse through our gallery of successfully completed projects and transformations by our skilled professionals.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Gallery Item 1 -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg hover-lift fade-in">
                        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952" alt="Plumbing Work" class="w-full h-72 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent">
                            <div class="absolute bottom-0 p-6 text-white">
                                <h3 class="text-xl font-bold mb-2">Modern Bathroom Renovation</h3>
                                <p class="text-sm text-gray-200">Complete plumbing overhaul and fixture installation</p>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 2 -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg hover-lift fade-in" style="animation-delay: 0.1s;">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e" alt="Electrical Work" class="w-full h-72 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent">
                            <div class="absolute bottom-0 p-6 text-white">
                                <h3 class="text-xl font-bold mb-2">Smart Home Installation</h3>
                                <p class="text-sm text-gray-200">Complete home automation and lighting system</p>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 3 -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg hover-lift fade-in" style="animation-delay: 0.2s;">
                        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e" alt="Carpentry Work" class="w-full h-72 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent">
                            <div class="absolute bottom-0 p-6 text-white">
                                <h3 class="text-xl font-bold mb-2">Custom Kitchen Cabinets</h3>
                                <p class="text-sm text-gray-200">Handcrafted wooden cabinets and storage solutions</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View More Button -->
                <div class="text-center mt-12 fade-in">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        View More Projects
                    </a>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="py-20 bg-white relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Find Us
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        Discover Service Providers
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">Near You</span>
                    </h2>
                    <p class="text-xl text-[#706f6c] max-w-3xl mx-auto mb-8">
                        Browse our interactive map to find verified professionals in your area. Filter by service type and read reviews.
                    </p>
                </div>

                <!-- Map Container with Controls -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <!-- Search and Filters -->
                    <div class="lg:sticky lg:top-24">
                        <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Search Location</label>
                                <div class="relative">
                                    <input type="text" id="location-search" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent" placeholder="Enter address or area">
                                    <button class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[#16A34A]">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Service Type</label>
                                <select id="service-type" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent">
                                    <option value="all">All Services</option>
                                    <option value="plumbing">Plumbing</option>
                                    <option value="electrical">Electrical</option>
                                    <option value="carpentry">Carpentry</option>
                                    <option value="mechanic">Auto Mechanic</option>
                                </select>
                            </div>

                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Radius</label>
                                <input type="range" id="radius-slider" min="1" max="50" value="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                                <div class="flex justify-between text-sm text-gray-600 mt-2">
                                    <span>1km</span>
                                    <span id="radius-value">10km</span>
                                    <span>50km</span>
                                </div>
                            </div>

                            <button id="apply-filters" class="w-full px-6 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-medium shadow-lg hover:shadow-xl">
                                Apply Filters
                            </button>
                        </div>

                        <!-- Quick Stats -->
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <h3 class="font-semibold text-[#1b1b18] mb-4">Quick Stats</h3>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-600">Available Providers</span>
                                    <span id="providers-count" class="font-semibold text-[#16A34A]">0</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-600">Average Rating</span>
                                    <div class="flex items-center">
                                        <span id="average-rating" class="font-semibold text-[#16A34A] mr-1">0.0</span>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Map -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div id="map" class="w-full h-[600px]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="py-20 bg-gradient-to-br from-[#F5F5F3] to-[#F0F9F0]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        How It Works
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        Get Help in 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">3 Simple Steps</span>
                    </h2>
                    <p class="text-xl text-[#706f6c] max-w-3xl mx-auto">
                        Finding reliable professionals has never been easier. Follow these simple steps to get the help you need.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                    <!-- Step 1 -->
                    <div class="text-center fade-in">
                        <div class="relative mb-8">
                            <div class="w-24 h-24 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mx-auto shadow-lg">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-lg font-bold text-[#16A34A]">1</span>
                            </div>
                            <!-- Connecting Line -->
                            <div class="hidden lg:block absolute top-12 left-full w-full h-0.5 bg-gradient-to-r from-[#16A34A] to-transparent"></div>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-4">Search & Browse</h3>
                        <p class="text-[#706f6c] leading-relaxed">
                            Tell us what service you need and your location. Browse through verified professionals with ratings, reviews, and portfolios.
                        </p>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="text-center fade-in" style="animation-delay: 0.2s;">
                        <div class="relative mb-8">
                            <div class="w-24 h-24 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mx-auto shadow-lg">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-lg font-bold text-[#16A34A]">2</span>
                            </div>
                            <!-- Connecting Line -->
                            <div class="hidden lg:block absolute top-12 left-full w-full h-0.5 bg-gradient-to-r from-[#16A34A] to-transparent"></div>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-4">Connect & Book</h3>
                        <p class="text-[#706f6c] leading-relaxed">
                            Chat with professionals, discuss your needs, get quotes, and book the service that fits your schedule and budget.
                        </p>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="text-center fade-in" style="animation-delay: 0.4s;">
                        <div class="relative mb-8">
                            <div class="w-24 h-24 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mx-auto shadow-lg">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-lg font-bold text-[#16A34A]">3</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-4">Get It Done</h3>
                        <p class="text-[#706f6c] leading-relaxed">
                            Relax while the professional completes your job. Pay securely through our platform and leave a review to help others.
                        </p>
                    </div>
                </div>
                
                <!-- Additional Features -->
                <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-6 shadow-lg text-center hover-lift fade-in">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-[#1b1b18] mb-2">Secure Payments</h3>
                        <p class="text-sm text-[#706f6c]">Your payments are protected with bank-level security and escrow services.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg text-center hover-lift fade-in" style="animation-delay: 0.1s;">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-[#1b1b18] mb-2">Quality Guarantee</h3>
                        <p class="text-sm text-[#706f6c]">100% satisfaction guarantee with our quality assurance program.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg text-center hover-lift fade-in" style="animation-delay: 0.2s;">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-[#1b1b18] mb-2">24/7 Support</h3>
                        <p class="text-sm text-[#706f6c]">Round-the-clock customer support to help you every step of the way.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                        Customer Reviews
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        What Our 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">Customers Say</span>
                    </h2>
                    <p class="text-xl text-[#706f6c] max-w-3xl mx-auto">
                        Don't just take our word for it. Here's what thousands of satisfied customers have to say about KwadagoPlus.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card rounded-2xl p-8 fade-in">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-[#706f6c] mb-6 leading-relaxed">
                            "KwadagoPlus saved my day! I had a plumbing emergency and found a reliable plumber within minutes. The service was excellent and the price was fair. Highly recommended!"
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">AM</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#1b1b18]">Amina Mohammed</h4>
                                <p class="text-sm text-[#706f6c]">Bauchi, Nigeria</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="testimonial-card rounded-2xl p-8 fade-in" style="animation-delay: 0.1s;">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-[#706f6c] mb-6 leading-relaxed">
                            "As a business owner, I need reliable contractors. KwadagoPlus has been my go-to platform for finding skilled electricians and carpenters. The quality is consistently excellent."
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">IB</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#1b1b18]">Ibrahim Bello</h4>
                                <p class="text-sm text-[#706f6c]">Business Owner, Bauchi</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card rounded-2xl p-8 fade-in" style="animation-delay: 0.2s;">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-[#706f6c] mb-6 leading-relaxed">
                            "The mobile mechanic service through KwadagoPlus was a lifesaver! My car broke down and they sent someone to my location within an hour. Professional and affordable."
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">FA</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#1b1b18]">Fatima Abubakar</h4>
                                <p class="text-sm text-[#706f6c]">Teacher, Bauchi</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- More Testimonials Button -->
                <div class="text-center mt-12 fade-in">
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-white text-[#16A34A] rounded-xl hover:bg-gray-50 transition-all duration-300 font-medium border border-[#16A34A] shadow-sm hover:shadow-md">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        Read More Reviews
                    </a>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-gradient-to-br from-[#F5F5F3] to-[#F0F9F0]">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        FAQ
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        Frequently Asked 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">Questions</span>
                    </h2>
                    <p class="text-xl text-[#706f6c]">
                        Got questions? We've got answers. Here are the most common questions about KwadagoPlus.
                    </p>
                </div>
                
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in">
                        <button class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle">
                            <h3 class="text-lg font-semibold text-[#1b1b18]">How do I book a service on KwadagoPlus?</h3>
                            <svg class="w-6 h-6 text-[#16A34A] transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 hidden faq-content">
                            <p class="text-[#706f6c] leading-relaxed">
                                Booking a service is simple! Just search for the service you need, browse through verified professionals, read reviews, and select the one that fits your requirements. You can then chat with them, discuss details, and book directly through our platform.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in" style="animation-delay: 0.1s;">
                        <button class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle">
                            <h3 class="text-lg font-semibold text-[#1b1b18]">Are all professionals on KwadagoPlus verified?</h3>
                            <svg class="w-6 h-6 text-[#16A34A] transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 hidden faq-content">
                            <p class="text-[#706f6c] leading-relaxed">
                                Yes! Every professional on our platform undergoes a thorough verification process including background checks, skill assessments, and document verification. We also continuously monitor their performance through customer reviews and ratings.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in" style="animation-delay: 0.2s;">
                        <button class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle">
                            <h3 class="text-lg font-semibold text-[#1b1b18]">What payment methods do you accept?</h3>
                            <svg class="w-6 h-6 text-[#16A34A] transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 hidden faq-content">
                            <p class="text-[#706f6c] leading-relaxed">
                                We accept various payment methods including bank transfers, mobile money (MTN, Airtel, Glo), debit/credit cards, and cash payments. All online payments are secured with bank-level encryption and processed through trusted payment gateways.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in" style="animation-delay: 0.3s;">
                        <button class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle">
                            <h3 class="text-lg font-semibold text-[#1b1b18]">What if I'm not satisfied with the service?</h3>
                            <svg class="w-6 h-6 text-[#16A34A] transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 hidden faq-content">
                            <p class="text-[#706f6c] leading-relaxed">
                                We offer a 100% satisfaction guarantee. If you're not happy with the service, contact our support team within 24 hours. We'll work with you and the professional to resolve the issue, and if necessary, arrange for a refund or re-service at no extra cost.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden fade-in" style="animation-delay: 0.4s;">
                        <button class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle">
                            <h3 class="text-lg font-semibold text-[#1b1b18]">Do you offer emergency services?</h3>
                            <svg class="w-6 h-6 text-[#16A34A] transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 hidden faq-content">
                            <p class="text-[#706f6c] leading-relaxed">
                                Yes! We have professionals available 24/7 for emergency services including plumbing, electrical, and automotive repairs. Emergency services may have additional charges, but we'll always inform you of the costs upfront before proceeding.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Support -->
                <div class="text-center mt-12 fade-in">
                    <p class="text-[#706f6c] mb-4">Still have questions?</p>
                    <a href="#contact" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        Contact Support
                    </a>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-20 bg-gradient-to-r from-[#16A34A] to-[#22C55E]">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="fade-in">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                        Stay Updated with KwadagoPlus
                    </h2>
                    <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                        Get the latest updates on new services, special offers, and tips for maintaining your home and business.
                    </p>
                    
                    <div class="max-w-md mx-auto">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <input type="email" placeholder="Enter your email address" 
                                   class="flex-1 px-6 py-4 rounded-xl border-0 focus:ring-4 focus:ring-white/20 transition-all text-[#1b1b18]">
                            <button class="px-8 py-4 bg-white text-[#16A34A] rounded-xl hover:bg-gray-50 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Subscribe
                            </button>
                        </div>
                        <p class="text-sm text-white/70 mt-4">
                            We respect your privacy. Unsubscribe at any time.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact Us
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        Get in 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">Touch</span>
                    </h2>
                    <p class="text-xl text-[#706f6c] max-w-3xl mx-auto">
                        Have questions or need support? We're here to help. Reach out to us through any of the channels below.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="fade-in">
                        <div class="bg-gradient-to-br from-[#F5F5F3] to-[#F0F9F0] rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-[#1b1b18] mb-6">Send us a Message</h3>
                            <form class="space-y-6">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-[#1b1b18] mb-2">First Name</label>
                                        <input type="text" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-[#1b1b18] mb-2">Last Name</label>
                                        <input type="text" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">Email Address</label>
                                    <input type="email" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">Phone Number</label>
                                    <input type="tel" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">Subject</label>
                                    <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all">
                                        <option>General Inquiry</option>
                                        <option>Technical Support</option>
                                        <option>Billing Question</option>
                                        <option>Partnership</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">Message</label>
                                    <textarea rows="4" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#16A34A] focus:border-transparent transition-all resize-none"></textarea>
                                </div>
                                <button type="submit" class="w-full px-8 py-4 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                    </svg>
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Contact Information -->
                    <div class="fade-in" style="animation-delay: 0.2s;">
                        <div class="space-y-8">
                            <!-- Office Location -->
                            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#1b1b18] mb-2">Visit Our Office</h3>
                                        <p class="text-[#706f6c] leading-relaxed">
                                            123 Main Street<br>
                                            Bauchi, Nigeria<br>
                                            Open Monday - Friday, 8AM - 6PM
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#1b1b18] mb-2">Call Us</h3>
                                        <p class="text-[#706f6c] leading-relaxed">
                                            <a href="tel:+2348000000000" class="hover:text-[#16A34A] transition-colors">+234 800 000 0000</a><br>
                                            <span class="text-sm">24/7 Emergency Support</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-[#1b1b18] mb-2">Email Us</h3>
                                        <p class="text-[#706f6c] leading-relaxed">
                                            <a href="mailto:support@kwadagoplus.com" class="hover:text-[#16A34A] transition-colors">support@kwadagoplus.com</a><br>
                                            <span class="text-sm">We'll respond within 24 hours</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Social Media -->
                            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                                <h3 class="text-lg font-bold text-[#1b1b18] mb-4">Follow Us</h3>
                                <div class="flex space-x-4">
                                    <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-blue-800 rounded-lg flex items-center justify-center text-white hover:bg-blue-900 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-pink-600 rounded-lg flex items-center justify-center text-white hover:bg-pink-700 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z.017 0z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center text-white hover:bg-red-700 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-[#1b1b18] text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                    <!-- Company Info -->
                    <div class="lg:col-span-1">
                        <div class="flex items-center mb-6">
                            <div class="w-8 h-8 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-lg mr-3 flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold">KwadagoPlus</span>
                        </div>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Connecting communities with trusted professionals across Nigeria. Your reliable partner for all service needs.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-300 hover:text-white hover:bg-[#16A34A] transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-300 hover:text-white hover:bg-[#16A34A] transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-300 hover:text-white hover:bg-[#16A34A] transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z.017 0z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-300 hover:text-white hover:bg-[#16A34A] transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Services -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Services</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Plumbing</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Electrical</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Carpentry</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Auto Mechanic</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Cleaning</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Painting</a></li>
                        </ul>
                    </div>
                    
                    <!-- Company -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Company</h3>
                        <ul class="space-y-3">
                            <li><a href="#about" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Careers</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Press</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Blog</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Partnerships</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Investors</a></li>
                        </ul>
                    </div>
                    
                    <!-- Support -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Support</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Help Center</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Safety Tips</a></li>
                            <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors">Contact Us</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Report Issue</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Community</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Status</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="border-t border-gray-700 pt-8 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-[#16A34A] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-gray-300">123 Main Street, Bauchi, Nigeria</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-[#16A34A] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:support@kwadagoplus.com" class="text-gray-300 hover:text-white transition-colors">support@kwadagoplus.com</a>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-[#16A34A] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:+2348000000000" class="text-gray-300 hover:text-white transition-colors">+234 800 000 0000</a>
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="border-t border-gray-700 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-300 mb-4 md:mb-0">
                            © {{ date('Y') }} KwadagoPlus. All rights reserved.
                        </p>
                        <div class="flex items-center space-x-6">
                            <a href="#" class="text-gray-300 hover:text-white transition-colors text-sm">Privacy Policy</a>
                            <span class="text-gray-600">•</span>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors text-sm">Terms of Service</a>
                            <span class="text-gray-600">•</span>
                            <a href="#" class="text-gray-300 hover:text-white transition-colors text-sm">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Enhanced JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Mobile Menu Functionality
                const mobileMenu = document.getElementById('mobile-menu');
                const mobileMenuPanel = mobileMenu.querySelector('div');
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const closeMobileMenu = document.getElementById('close-mobile-menu');

                function openMenu() {
                    mobileMenu.classList.remove('hidden');
                    setTimeout(() => {
                        mobileMenuPanel.classList.remove('translate-x-full');
                    }, 10);
                }

                function closeMenu() {
                    mobileMenuPanel.classList.add('translate-x-full');
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                    }, 300);
                }

                mobileMenuButton.addEventListener('click', openMenu);
                closeMobileMenu.addEventListener('click', closeMenu);
                mobileMenu.addEventListener('click', (e) => {
                    if (e.target === mobileMenu) {
                        closeMenu();
                    }
                });

                // Close menu when clicking on mobile menu links
                const mobileMenuLinks = mobileMenu.querySelectorAll('a');
                mobileMenuLinks.forEach(link => {
                    link.addEventListener('click', closeMenu);
                });

                // Scroll animations
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                        }
                    });
                }, observerOptions);

                // Observe all fade-in elements
                document.querySelectorAll('.fade-in').forEach(el => {
                    observer.observe(el);
                });

                // Stats counter animation
                function animateCounter(element, target, duration = 2000) {
                    let start = 0;
                    const increment = target / (duration / 16);
                    
                    function updateCounter() {
                        start += increment;
                        if (start < target) {
                            element.textContent = Math.floor(start).toLocaleString();
                            requestAnimationFrame(updateCounter);
                        } else {
                            element.textContent = target.toLocaleString();
                        }
                    }
                    
                    updateCounter();
                }

                // Trigger counter animation when stats section is visible
                const statsCounters = document.querySelectorAll('.stats-counter');
                const statsObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const target = parseInt(entry.target.dataset.target);
                            animateCounter(entry.target, target);
                            statsObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });

                statsCounters.forEach(counter => {
                    statsObserver.observe(counter);
                });

                // FAQ Accordion
                const faqToggles = document.querySelectorAll('.faq-toggle');
                faqToggles.forEach(toggle => {
                    toggle.addEventListener('click', () => {
                        const content = toggle.nextElementSibling;
                        const icon = toggle.querySelector('.faq-icon');
                        
                        // Close all other FAQs
                        faqToggles.forEach(otherToggle => {
                            if (otherToggle !== toggle) {
                                const otherContent = otherToggle.nextElementSibling;
                                const otherIcon = otherToggle.querySelector('.faq-icon');
                                otherContent.classList.add('hidden');
                                otherIcon.style.transform = 'rotate(0deg)';
                            }
                        });
                        
                        // Toggle current FAQ
                        content.classList.toggle('hidden');
                        if (content.classList.contains('hidden')) {
                            icon.style.transform = 'rotate(0deg)';
                        } else {
                            icon.style.transform = 'rotate(180deg)';
                        }
                    });
                });

                // Smooth scrolling for anchor links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });

                // Header background on scroll
                const header = document.querySelector('header');
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 100) {
                        header.classList.add('bg-white/95');
                        header.classList.remove('bg-white/80');
                    } else {
                        header.classList.add('bg-white/80');
                        header.classList.remove('bg-white/95');
                    }
                });

                // Parallax effect for hero section
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    const parallaxElements = document.querySelectorAll('.parallax');
                    
                    parallaxElements.forEach(element => {
                        const speed = element.dataset.speed || 0.5;
                        element.style.transform = `translateY(${scrolled * speed}px)`;
                    });
                });

                // Form submission (placeholder)
                const contactForm = document.querySelector('form');
                if (contactForm) {
                    contactForm.addEventListener('submit', function(e) {
                        e.preventDefault();
                        // Add your form submission logic here
                        alert('Thank you for your message! We\'ll get back to you soon.');
                    });
                }

                // Newsletter subscription (placeholder)
                const newsletterForm = document.querySelector('section input[type="email"]');
                if (newsletterForm) {
                    const subscribeButton = newsletterForm.nextElementSibling;
                    subscribeButton.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (newsletterForm.value) {
                            alert('Thank you for subscribing to our newsletter!');
                            newsletterForm.value = '';
                        }
                    });
                }
                // Initialize Google Maps
                let map;
                let markers = [];
                const bauchi = { lat: 10.3159, lng: 9.8437 }; // Bauchi coordinates

                // Make initMap function globally available
                window.initMap = function() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: bauchi,
                        zoom: 13,
                        styles: [
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry",
                                "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry",
                                "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [{"color": "#dedede"}, {"lightness": 21}]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
                            },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
                            },
                            {
                                "elementType": "labels.icon",
                                "stylers": [{"visibility": "off"}]
                            }
                        ]
                    });

                    // Initialize places service
                    const service = new google.maps.places.PlacesService(map);

                    // Add search box functionality
                    const searchInput = document.getElementById('location-search');
                    const searchBox = new google.maps.places.Autocomplete(searchInput);

                    searchBox.addListener('place_changed', () => {
                        const place = searchBox.getPlace();
                        if (place.geometry) {
                            map.setCenter(place.geometry.location);
                            map.setZoom(15);
                            updateSearch();
                        }
                    });

                    // Add event listeners
                    document.getElementById('service-type').addEventListener('change', updateSearch);
                    document.getElementById('radius-slider').addEventListener('input', (e) => {
                        document.getElementById('radius-value').textContent = e.target.value + 'km';
                    });
                    document.getElementById('apply-filters').addEventListener('click', updateSearch);

                    // Initial search
                    updateSearch();
                }

                function updateSearch() {
                    clearMarkers();
                    const service = new google.maps.places.PlacesService(map);
                    const serviceType = document.getElementById('service-type').value;
                    const radius = parseInt(document.getElementById('radius-slider').value) * 1000; // Convert to meters

                    const request = {
                        location: map.getCenter(),
                        radius: radius,
                        type: ['business']
                    };

                    service.nearbySearch(request, (results, status) => {
                        if (status === google.maps.places.PlacesServiceStatus.OK) {
                            let validResults = results;
                            if (serviceType !== 'all') {
                                validResults = results.filter(place => 
                                    place.types.some(type => type.includes(serviceType.toLowerCase()))
                                );
                            }

                            // Update stats
                            document.getElementById('providers-count').textContent = validResults.length;
                            const avgRating = validResults.reduce((acc, place) => 
                                acc + (place.rating || 0), 0) / validResults.length;
                            document.getElementById('average-rating').textContent = 
                                avgRating.toFixed(1) || 'N/A';

                            validResults.forEach(place => {
                                createMarker(place);
                            });
                        }
                    });
                }

                function createMarker(place) {
                    const marker = new google.maps.Marker({
                        map: map,
                        position: place.geometry.location,
                        animation: google.maps.Animation.DROP,
                        icon: {
                            path: google.maps.SymbolPath.CIRCLE,
                            scale: 10,
                            fillColor: '#16A34A',
                            fillOpacity: 0.9,
                            strokeWeight: 2,
                            strokeColor: '#ffffff'
                        }
                    });

                    markers.push(marker);

                    const infowindow = new google.maps.InfoWindow({
                        content: `
                            <div class="p-4 max-w-sm">
                                <h3 class="font-bold text-lg mb-2">${place.name}</h3>
                                <div class="flex items-center mb-2">
                                    <div class="flex items-center mr-2">
                                        ${generateStarRating(place.rating)}
                                    </div>
                                    <span class="text-sm text-gray-600">(${place.user_ratings_total || 0} reviews)</span>
                                </div>
                                <p class="text-gray-600 mb-2">${place.vicinity}</p>
                                <div class="mt-3">
                                    <button onclick="window.open('https://www.google.com/maps/place/?q=place_id:${place.place_id}', '_blank')" 
                                            class="bg-[#16A34A] text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-[#15803D] transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        `
                    });

                    marker.addListener('click', () => {
                        infowindow.open(map, marker);
                    });
                }

                function generateStarRating(rating) {
                    const fullStars = Math.floor(rating);
                    const hasHalfStar = rating % 1 >= 0.5;
                    let stars = '';
                    
                    for (let i = 0; i < 5; i++) {
                        if (i < fullStars) {
                            stars += '<svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>';
                        } else if (i === fullStars && hasHalfStar) {
                            stars += '<svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" fill="url(#half-star)"/><defs><linearGradient id="half-star"><stop offset="50%" stop-color="#FBBF24"/><stop offset="50%" stop-color="#D1D5DB"/></linearGradient></defs></svg>';
                        } else {
                            stars += '<svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>';
                        }
                    }
                    return stars;
                }

                function clearMarkers() {
                    markers.forEach(marker => marker.setMap(null));
                    markers = [];
                }

                // No need for load event listener as we're using callback
            });
        </script>
    </body>
</html>
