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

            .live-chat-widget {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 1000;
                background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-light) 100%);
                border-radius: 50px;
                padding: 15px 20px;
                color: white;
                font-weight: 600;
                box-shadow: 0 10px 30px rgba(22, 163, 74, 0.3);
                cursor: pointer;
                transition: all 0.3s ease;
                animation: pulse 2s infinite;
                display: flex;
                align-items: center;
            }

            .live-chat-widget:hover {
                transform: scale(1.05);
                box-shadow: 0 15px 40px rgba(22, 163, 74, 0.4);
            }

            @keyframes pulse {
                0% { box-shadow: 0 10px 30px rgba(22, 163, 74, 0.3); }
                50% { box-shadow: 0 10px 30px rgba(22, 163, 74, 0.6); }
                100% { box-shadow: 0 10px 30px rgba(22, 163, 74, 0.3); }
            }

            .notification-banner {
                background: linear-gradient(90deg, #16A34A 0%, #22C55E 100%);
                color: white;
                padding: 12px 0;
                text-align: center;
                font-size: 14px;
                font-weight: 500;
                position: relative;
                overflow: hidden;
            }

            .notification-banner::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
                animation: shimmer 3s infinite;
            }

            @keyframes shimmer {
                0% { left: -100%; }
                100% { left: 100%; }
            }

            .progress-bar {
                position: fixed;
                top: 0;
                left: 0;
                width: 0%;
                height: 3px;
                background: linear-gradient(90deg, #16A34A 0%, #22C55E 100%);
                z-index: 9999;
                transition: width 0.3s ease;
            }

            .back-to-top {
                position: fixed;
                bottom: 80px;
                right: 20px;
                width: 50px;
                height: 50px;
                background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-light) 100%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                cursor: pointer;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 999;
            }

            .back-to-top.visible {
                opacity: 1;
                visibility: visible;
            }

            .back-to-top:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 25px rgba(22, 163, 74, 0.3);
            }

            .map-container {
                position: relative;
                width: 100%;
                height: 400px;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            }

            .map-overlay {
                position: absolute;
                top: 20px;
                left: 20px;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                z-index: 10;
                max-width: 300px;
            }

            .service-area-badge {
                display: inline-flex;
                align-items: center;
                padding: 8px 16px;
                background: linear-gradient(135deg, rgba(22, 163, 74, 0.1) 0%, rgba(34, 197, 94, 0.1) 100%);
                border: 1px solid rgba(22, 163, 74, 0.2);
                border-radius: 25px;
                font-size: 14px;
                font-weight: 500;
                color: var(--primary-green);
                margin: 4px;
                transition: all 0.3s ease;
            }

            .service-area-badge:hover {
                background: linear-gradient(135deg, rgba(22, 163, 74, 0.2) 0%, rgba(34, 197, 94, 0.2) 100%);
                transform: translateY(-2px);
            }

            .price-calculator {
                background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
                border: 1px solid rgba(22, 163, 74, 0.1);
                border-radius: 20px;
                padding: 30px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            }

            .calculator-input {
                width: 100%;
                padding: 12px 16px;
                border: 2px solid #e5e7eb;
                border-radius: 12px;
                font-size: 16px;
                transition: all 0.3s ease;
            }

            .calculator-input:focus {
                border-color: var(--primary-green);
                outline: none;
                box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.1);
            }

            .emergency-banner {
                background: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
                color: white;
                padding: 20px;
                border-radius: 15px;
                text-align: center;
                margin-bottom: 30px;
                position: relative;
                overflow: hidden;
            }

            .emergency-banner::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>') repeat;
                animation: float 20s linear infinite;
            }

            @keyframes float {
                0% { transform: translateY(0px); }
                100% { transform: translateY(-100px); }
            }

            .booking-widget {
                position: sticky;
                top: 100px;
                background: white;
                border-radius: 20px;
                padding: 30px;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                border: 1px solid rgba(22, 163, 74, 0.1);
            }

            .step-indicator {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 30px;
            }

            .step {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: #e5e7eb;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 600;
                color: #6b7280;
                position: relative;
                transition: all 0.3s ease;
            }

            .step.active {
                background: var(--primary-green);
                color: white;
            }

            .step.completed {
                background: var(--primary-green);
                color: white;
            }

            .step-connector {
                width: 60px;
                height: 2px;
                background: #e5e7eb;
                margin: 0 10px;
                transition: all 0.3s ease;
            }

            .step-connector.active {
                background: var(--primary-green);
            }

            .service-filter {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin-bottom: 30px;
            }

            .filter-btn {
                padding: 8px 16px;
                border: 2px solid #e5e7eb;
                border-radius: 25px;
                background: white;
                color: #6b7280;
                font-weight: 500;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .filter-btn:hover,
            .filter-btn.active {
                border-color: var(--primary-green);
                background: var(--primary-green);
                color: white;
            }

            .professional-card {
                background: white;
                border-radius: 15px;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
                border: 1px solid #f3f4f6;
                transition: all 0.3s ease;
                margin-bottom: 20px;
            }

            .professional-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
                border-color: var(--primary-green);
            }

            .rating-stars {
                display: flex;
                align-items: center;
                gap: 2px;
            }

            .star {
                width: 16px;
                height: 16px;
                fill: #fbbf24;
            }

            .availability-indicator {
                display: inline-flex;
                align-items: center;
                padding: 4px 8px;
                border-radius: 12px;
                font-size: 12px;
                font-weight: 500;
            }

            .available {
                background: rgba(34, 197, 94, 0.1);
                color: #16a34a;
            }

            .busy {
                background: rgba(239, 68, 68, 0.1);
                color: #dc2626;
            }

            .offline {
                background: rgba(107, 114, 128, 0.1);
                color: #6b7280;
            }

            /* Map Marker Styles */
            .custom-marker {
                background: var(--primary-green);
                border: 3px solid white;
                border-radius: 50%;
                width: 20px;
                height: 20px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            }

            .map-info-window {
                font-family: 'Inter', sans-serif;
                max-width: 250px;
            }

            .map-info-window h3 {
                color: var(--primary-green);
                font-weight: 600;
                margin-bottom: 8px;
            }

            .map-info-window p {
                color: #666;
                font-size: 14px;
                line-height: 1.4;
                margin-bottom: 8px;
            }

            .map-info-window .rating {
                display: flex;
                align-items: center;
                gap: 4px;
                margin-bottom: 8px;
            }

            .map-info-window .rating .stars {
                color: #fbbf24;
                font-size: 12px;
            }

            .map-info-window .contact-btn {
                background: var(--primary-green);
                color: white;
                padding: 6px 12px;
                border-radius: 6px;
                text-decoration: none;
                font-size: 12px;
                font-weight: 500;
                display: inline-block;
                margin-top: 8px;
            }

            /* Real-time Features */
            .live-tracking {
                position: relative;
                overflow: hidden;
            }

            .live-tracking::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(22, 163, 74, 0.1), transparent);
                animation: tracking-pulse 2s infinite;
            }

            @keyframes tracking-pulse {
                0% { left: -100%; }
                100% { left: 100%; }
            }

            .weather-widget {
                background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
                color: white;
                padding: 16px;
                border-radius: 12px;
                margin-bottom: 20px;
            }

            .service-status {
                display: inline-flex;
                align-items: center;
                padding: 4px 8px;
                border-radius: 12px;
                font-size: 12px;
                font-weight: 500;
                margin-left: 8px;
            }

            .status-active {
                background: rgba(34, 197, 94, 0.1);
                color: #16a34a;
            }

            .status-busy {
                background: rgba(239, 68, 68, 0.1);
                color: #dc2626;
            }

            .status-offline {
                background: rgba(107, 114, 128, 0.1);
                color: #6b7280;
            }

            /* Advanced Search Features */
            .search-suggestions {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                border: 1px solid #e5e7eb;
                border-radius: 12px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                z-index: 100;
                max-height: 300px;
                overflow-y: auto;
            }

            .search-suggestion {
                padding: 12px 16px;
                cursor: pointer;
                border-bottom: 1px solid #f3f4f6;
                transition: all 0.2s ease;
            }

            .search-suggestion:hover {
                background: #f8f9fa;
            }

            .search-suggestion:last-child {
                border-bottom: none;
            }

            /* Booking Progress */
            .booking-progress {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 30px;
                padding: 20px;
                background: #f8f9fa;
                border-radius: 12px;
            }

            .progress-step {
                display: flex;
                flex-direction: column;
                align-items: center;
                flex: 1;
                position: relative;
            }

            .progress-step::after {
                content: '';
                position: absolute;
                top: 20px;
                left: 50%;
                width: 100%;
                height: 2px;
                background: #e5e7eb;
                z-index: 1;
            }

            .progress-step:last-child::after {
                display: none;
            }

            .progress-step.completed::after {
                background: var(--primary-green);
            }

            .progress-icon {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: #e5e7eb;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 8px;
                position: relative;
                z-index: 2;
            }

            .progress-step.completed .progress-icon {
                background: var(--primary-green);
                color: white;
            }

            .progress-step.active .progress-icon {
                background: var(--primary-green);
                color: white;
                animation: pulse 2s infinite;
            }
        </style>
    </head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] min-h-screen font-['Inter']">
        <!-- Progress Bar -->
        <div class="progress-bar" id="progressBar"></div>

        <!-- Notification Banner -->
        <div class="notification-banner">
            <div class="max-w-7xl mx-auto px-4">
                🎉 New Year Special: Get 20% off your first service booking! Use code: NEWYEAR2024
                <button class="ml-4 text-white/80 hover:text-white" onclick="this.parentElement.parentElement.style.display='none'">✕</button>
            </div>
        </div>

        <!-- Emergency Banner -->
        <div class="emergency-banner">
            <div class="max-w-7xl mx-auto px-4">
                <h3 class="text-lg font-bold mb-2">🚨 24/7 Emergency Services Available</h3>
                <p class="mb-4">Need immediate help? Our emergency professionals are standing by.</p>
                <a href="tel:+2348000000000" class="inline-flex items-center px-6 py-2 bg-white text-red-600 rounded-lg hover:bg-gray-100 transition-all font-semibold">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Call Now: +234 800 000 0000
                </a>
            </div>
        </div>

        <!-- Header -->
        <header class="glass-effect sticky top-0 z-50 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-lg mr-3 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-[#1b1b18]">KwadagoPlus</span>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex items-center space-x-8">
                        <a href="#services" class="text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">Services</a>
                        <a href="#how-it-works" class="text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">How It Works</a>
                        <a href="#professionals" class="text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">Professionals</a>
                        <a href="#about" class="text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">About</a>
                        <a href="#contact" class="text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">Contact</a>
                    </nav>
                    
                    <!-- CTA Buttons -->
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="#" class="text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">Sign In</a>
                        <a href="#" class="px-6 py-2 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-lg hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                            Get Started
                        </a>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <button class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors" id="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Mobile Menu -->
        <div class="fixed inset-0 z-50 hidden" id="mobile-menu">
            <div class="fixed inset-0 bg-black bg-opacity-50"></div>
            <div class="fixed right-0 top-0 h-full w-80 bg-white shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out">
                <div class="flex items-center justify-between p-6 border-b">
                    <span class="text-xl font-bold">Menu</span>
                    <button class="p-2 rounded-lg hover:bg-gray-100" id="close-mobile-menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <nav class="p-6 space-y-4">
                    <a href="#services" class="block py-3 text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">Services</a>
                    <a href="#how-it-works" class="block py-3 text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">How It Works</a>
                    <a href="#professionals" class="block py-3 text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">Professionals</a>
                    <a href="#about" class="block py-3 text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">About</a>
                    <a href="#contact" class="block py-3 text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">Contact</a>
                    <div class="pt-4 border-t space-y-3">
                        <a href="#" class="block py-2 text-[#706f6c] hover:text-[#16A34A] transition-colors font-medium">Sign In</a>
                        <a href="#" class="block px-6 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-lg text-center font-semibold">
                            Get Started
                        </a>
                    </div>
                </nav>
            </div>
        </div>


        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-[#F5F5F3] via-[#FDFDFC] to-[#F0F9F0]">
            <!-- Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-[#16A34A]/20 to-[#22C55E]/20 rounded-full blur-3xl floating"></div>
                <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-[#22C55E]/20 to-[#16A34A]/20 rounded-full blur-3xl floating" style="animation-delay: -1.5s;"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-[#16A34A]/10 to-[#22C55E]/10 rounded-full blur-3xl floating" style="animation-delay: -3s;"></div>
            </div>
            
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="fade-in">
                    <!-- Badge -->
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-8 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Trusted by 10,000+ customers in Bauchi State
                    </div>
                    
                    <!-- Main Heading -->
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-[#1b1b18] mb-8 leading-tight">
                        Find Trusted
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E] typing-animation">
                            Local Workers
                        </span>
                        <br>in Bauchi State
                    </h1>
                    
                    <!-- Subtitle -->
                    <p class="text-xl md:text-2xl text-[#706f6c] mb-12 max-w-3xl mx-auto leading-relaxed">
                        Connect with skilled plumbers, electricians, tailors, mechanics, and more. 
                        <span class="font-semibold text-[#16A34A]">Fast, safe, and reliable</span> service booking platform.
                    </p>
                </div>
                
                <!-- Enhanced Search Container -->
                <div class="search-container rounded-2xl p-8 mb-12 max-w-4xl mx-auto fade-in" style="animation-delay: 0.2s;">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                        <!-- Service Search -->
                        <div class="relative">
                            <label class="block text-sm font-medium text-[#1b1b18] mb-2">What service do you need?</label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    placeholder="e.g., Plumber, Electrician, Tailor..." 
                                    class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:border-[#16A34A] focus:outline-none transition-all text-lg"
                                    id="serviceSearch"
                                >
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                                <!-- Search Suggestions -->
                                <div class="search-suggestions hidden" id="searchSuggestions">
                                    <div class="search-suggestion">🔧 Plumber - Pipe repair, installation</div>
                                    <div class="search-suggestion">⚡ Electrician - Wiring, repairs</div>
                                    <div class="search-suggestion">✂️ Tailor - Clothing, alterations</div>
                                    <div class="search-suggestion">🔨 Carpenter - Furniture, repairs</div>
                                    <div class="search-suggestion">🚗 Auto Mechanic - Car repairs</div>
                                    <div class="search-suggestion">🧹 Cleaning Service - Home, office</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Location Search -->
                        <div class="relative">
                            <label class="block text-sm font-medium text-[#1b1b18] mb-2">Location</label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    placeholder="Bauchi, Azare, Jama'are..." 
                                    class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:border-[#16A34A] focus:outline-none transition-all text-lg"
                                >
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Urgency -->
                        <div>
                            <label class="block text-sm font-medium text-[#1b1b18] mb-2">When do you need it?</label>
                            <select class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:border-[#16A34A] focus:outline-none transition-all text-lg">
                                <option>Today</option>
                                <option>Tomorrow</option>
                                <option>This Week</option>
                                <option>Next Week</option>
                                <option>Flexible</option>
                            </select>
                        </div>
                        
                        <!-- Search Button -->
                        <div class="flex items-end">
                            <button class="w-full px-8 py-4 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold text-lg shadow-lg hover:shadow-xl transform hover:scale-105">
                                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                                Search
                            </button>
                        </div>
                    </div>
                    
                    <!-- Quick Service Buttons -->
                    <div class="flex flex-wrap justify-center gap-3">
                        <span class="text-sm text-[#706f6c] mr-4">Popular:</span>
                        <button class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm hover:border-[#16A34A] hover:text-[#16A34A] transition-all">🔧 Emergency Plumber</button>
                        <button class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm hover:border-[#16A34A] hover:text-[#16A34A] transition-all">⚡ Electrician</button>
                        <button class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm hover:border-[#16A34A] hover:text-[#16A34A] transition-all">🚗 Car Mechanic</button>
                        <button class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm hover:border-[#16A34A] hover:text-[#16A34A] transition-all">🧹 House Cleaning</button>
                    </div>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16 fade-in" style="animation-delay: 0.4s;">
                    <div class="text-center">
                        <div class="stats-counter text-3xl md:text-4xl font-bold mb-2" data-target="10000">0</div>
                        <div class="text-[#706f6c]">Happy Customers</div>
                    </div>
                    <div class="text-center">
                        <div class="stats-counter text-3xl md:text-4xl font-bold mb-2" data-target="2500">0</div>
                        <div class="text-[#706f6c]">Verified Professionals</div>
                    </div>
                    <div class="text-center">
                        <div class="stats-counter text-3xl md:text-4xl font-bold mb-2" data-target="50000">0</div>
                        <div class="text-[#706f6c]">Jobs Completed</div>
                    </div>
                    <div class="text-center">
                        <div class="stats-counter text-3xl md:text-4xl font-bold mb-2" data-target="20">0</div>
                        <div class="text-[#706f6c]">LGAs Covered</div>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 fade-in" style="animation-delay: 0.6s;">
                    <a href="#services" class="px-8 py-4 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold text-lg shadow-lg hover:shadow-xl transform hover:scale-105">
                        Find a Professional
                    </a>
                    <a href="#how-it-works" class="px-8 py-4 bg-white text-[#16A34A] border-2 border-[#16A34A] rounded-xl hover:bg-[#16A34A] hover:text-white transition-all duration-300 font-semibold text-lg">
                        How It Works
                    </a>
                </div>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-6 h-6 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
        </section>

        <!-- Weather Widget -->
        <div class="weather-widget max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 relative z-20">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-semibold mb-1">Today in Bauchi</h3>
                    <p class="text-sm opacity-90">Perfect weather for outdoor services</p>
                </div>
                <div class="flex items-center">
                    <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <span class="text-2xl font-bold">28°C</span>
                </div>
            </div>
        </div>


        <!-- Services Section -->
        <section id="services" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        Our Services
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        Professional Services 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">You Can Trust</span>
                    </h2>
                    <p class="text-xl text-[#706f6c] max-w-3xl mx-auto">
                        From emergency repairs to planned projects, find verified professionals for all your service needs across Bauchi State.
                    </p>
                </div>
                
                <!-- Service Filter -->
                <div class="service-filter justify-center mb-12 fade-in" style="animation-delay: 0.1s;">
                    <button class="filter-btn active" data-category="all">All Services</button>
                    <button class="filter-btn" data-category="home">Home & Repair</button>
                    <button class="filter-btn" data-category="automotive">Automotive</button>
                    <button class="filter-btn" data-category="personal">Personal Care</button>
                    <button class="filter-btn" data-category="business">Business</button>
                    <button class="filter-btn" data-category="emergency">Emergency</button>
                </div>
                
                <!-- Services Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    <!-- Plumbing Service -->
                    <div class="service-card rounded-2xl p-6 hover-lift fade-in" data-category="home emergency" style="animation-delay: 0.1s;">
                        <div class="feature-icon w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-3">Plumbing Services</h3>
                        <p class="text-[#706f6c] mb-4 leading-relaxed">
                            Expert plumbers for pipe repairs, installations, leak fixes, and emergency plumbing services.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-[#16A34A] font-semibold">From ₦2,500/hour</span>
                            <div class="flex items-center">
                                <span class="service-status status-active">124 Available</span>
                            </div>
                        </div>
                        <div class="flex items-center text-sm text-[#706f6c] mb-4">
                            <svg class="w-4 h-4 mr-1 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>4.8 (2,847 reviews)</span>
                        </div>
                        <button class="w-full px-4 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold">
                            Book Now
                        </button>
                    </div>
                    
                    <!-- Electrical Service -->
                    <div class="service-card rounded-2xl p-6 hover-lift fade-in" data-category="home emergency" style="animation-delay: 0.2s;">
                        <div class="feature-icon w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-3">Electrical Services</h3>
                        <p class="text-[#706f6c] mb-4 leading-relaxed">
                            Licensed electricians for wiring, installations, repairs, and electrical maintenance.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-[#16A34A] font-semibold">From ₦3,000/hour</span>
                            <div class="flex items-center">
                                <span class="service-status status-active">89 Available</span>
                            </div>
                        </div>
                        <div class="flex items-center text-sm text-[#706f6c] mb-4">
                            <svg class="w-4 h-4 mr-1 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>4.9 (1,923 reviews)</span>
                        </div>
                        <button class="w-full px-4 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold">
                            Book Now
                        </button>
                    </div>
                    
                    <!-- Auto Mechanic -->
                    <div class="service-card rounded-2xl p-6 hover-lift fade-in" data-category="automotive" style="animation-delay: 0.3s;">
                        <div class="feature-icon w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-3">Auto Mechanic</h3>
                        <p class="text-[#706f6c] mb-4 leading-relaxed">
                            Professional car repairs, maintenance, diagnostics, and roadside assistance services.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-[#16A34A] font-semibold">From ₦4,000/service</span>
                            <div class="flex items-center">
                                <span class="service-status status-active">67 Available</span>
                            </div>
                        </div>
                        <div class="flex items-center text-sm text-[#706f6c] mb-4">
                            <svg class="w-4 h-4 mr-1 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>4.7 (1,456 reviews)</span>
                        </div>
                        <button class="w-full px-4 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold">
                            Book Now
                        </button>
                    </div>
                    
                    <!-- Tailoring -->
                    <div class="service-card rounded-2xl p-6 hover-lift fade-in" data-category="personal" style="animation-delay: 0.4s;">
                        <div class="feature-icon w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M15 14h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-3">Tailoring Services</h3>
                        <p class="text-[#706f6c] mb-4 leading-relaxed">
                            Custom clothing, alterations, repairs, and traditional wear by skilled tailors.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-[#16A34A] font-semibold">From ₦1,500/item</span>
                            <div class="flex items-center">
                                <span class="service-status status-active">156 Available</span>
                            </div>
                        </div>
                        <div class="flex items-center text-sm text-[#706f6c] mb-4">
                            <svg class="w-4 h-4 mr-1 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>4.8 (3,234 reviews)</span>
                        </div>
                        <button class="w-full px-4 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold">
                            Book Now
                        </button>
                    </div>
                    
                    <!-- Carpentry -->
                    <div class="service-card rounded-2xl p-6 hover-lift fade-in" data-category="home" style="animation-delay: 0.5s;">
                        <div class="feature-icon w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-3">Carpentry</h3>
                        <p class="text-[#706f6c] mb-4 leading-relaxed">
                            Custom furniture, repairs, installations, and woodworking by experienced carpenters.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-[#16A34A] font-semibold">From ₦3,500/hour</span>
                            <div class="flex items-center">
                                <span class="service-status status-active">78 Available</span>
                            </div>
                        </div>
                        <div class="flex items-center text-sm text-[#706f6c] mb-4">
                            <svg class="w-4 h-4 mr-1 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>4.6 (987 reviews)</span>
                        </div>
                        <button class="w-full px-4 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold">
                            Book Now
                        </button>
                    </div>
                    
                    <!-- Cleaning Service -->
                    <div class="service-card rounded-2xl p-6 hover-lift fade-in" data-category="home business" style="animation-delay: 0.6s;">
                        <div class="feature-icon w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-3">Cleaning Services</h3>
                        <p class="text-[#706f6c] mb-4 leading-relaxed">
                            Professional home and office cleaning, deep cleaning, and maintenance services.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-[#16A34A] font-semibold">From ₦2,000/hour</span>
                            <div class="flex items-center">
                                <span class="service-status status-active">203 Available</span>
                            </div>
                        </div>
                        <div class="flex items-center text-sm text-[#706f6c] mb-4">
                            <svg class="w-4 h-4 mr-1 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>4.9 (4,567 reviews)</span>
                        </div>
                        <button class="w-full px-4 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold">
                            Book Now
                        </button>
                    </div>
                    
                    <!-- Painting -->
                    <div class="service-card rounded-2xl p-6 hover-lift fade-in" data-category="home" style="animation-delay: 0.7s;">
                        <div class="feature-icon w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-3">Painting Services</h3>
                        <p class="text-[#706f6c] mb-4 leading-relaxed">
                            Interior and exterior painting, color consultation, and surface preparation services.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-[#16A34A] font-semibold">From ₦2,800/hour</span>
                            <div class="flex items-center">
                                <span class="service-status status-active">92 Available</span>
                            </div>
                        </div>
                        <div class="flex items-center text-sm text-[#706f6c] mb-4">
                            <svg class="w-4 h-4 mr-1 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>4.7 (1,789 reviews)</span>
                        </div>
                        <button class="w-full px-4 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold">
                            Book Now
                        </button>
                    </div>
                    
                    <!-- Security Services -->
                    <div class="service-card rounded-2xl p-6 hover-lift fade-in" data-category="business" style="animation-delay: 0.8s;">
                        <div class="feature-icon w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-3">Security Services</h3>
                        <p class="text-[#706f6c] mb-4 leading-relaxed">
                            Professional security guards, surveillance installation, and security consultation.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-[#16A34A] font-semibold">From ₦5,000/day</span>
                            <div class="flex items-center">
                                <span class="service-status status-active">45 Available</span>
                            </div>
                        </div>
                        <div class="flex items-center text-sm text-[#706f6c] mb-4">
                            <svg class="w-4 h-4 mr-1 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>4.8 (567 reviews)</span>
                        </div>
                        <button class="w-full px-4 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold">
                            Book Now
                        </button>
                    </div>
                </div>
                
                <!-- View All Services Button -->
                <div class="text-center mt-12 fade-in" style="animation-delay: 0.9s;">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-white border-2 border-[#16A34A] text-[#16A34A] rounded-xl hover:bg-[#16A34A] hover:text-white transition-all duration-300 font-semibold text-lg">
                        View All 50+ Services
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>


        <!-- About Us Section -->
        <section id="about" class="py-20 bg-gradient-to-br from-[#F5F5F3] via-[#FDFDFC] to-[#F0F9F0]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        About KwadagoPlus
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        Connecting Communities with 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">Trusted Professionals</span>
                    </h2>
                    <p class="text-xl text-[#706f6c] max-w-3xl mx-auto">
                        We're on a mission to make finding reliable local services as easy as a few taps on your phone. 
                        Built by locals, for locals in Bauchi State.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
                    <!-- Story Content -->
                    <div class="fade-in" style="animation-delay: 0.1s;">
                        <h3 class="text-2xl font-bold text-[#1b1b18] mb-6">Our Story</h3>
                        <p class="text-[#706f6c] mb-6 leading-relaxed">
                            KwadagoPlus was born from a simple frustration: finding reliable local workers in Bauchi State was too difficult and risky. 
                            Too many people were getting subpar service or being overcharged by unverified providers.
                        </p>
                        <p class="text-[#706f6c] mb-6 leading-relaxed">
                            Founded in 2023 by a team of local entrepreneurs who understood the challenges firsthand, we set out to create 
                            a platform that would connect skilled professionals with customers who need their services, while ensuring 
                            quality, safety, and fair pricing for everyone.
                        </p>
                        <p class="text-[#706f6c] mb-8 leading-relaxed">
                            Today, we're proud to serve over 10,000 satisfied customers and support more than 2,500 verified professionals 
                            across all 20 Local Government Areas in Bauchi State.
                        </p>
                        
                        <!-- Key Stats -->
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <div class="stats-counter text-2xl font-bold text-[#16A34A] mb-1" data-target="10000">0</div>
                                <div class="text-sm text-[#706f6c]">Happy Customers</div>
                            </div>
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <div class="stats-counter text-2xl font-bold text-[#16A34A] mb-1" data-target="2500">0</div>
                                <div class="text-sm text-[#706f6c]">Verified Professionals</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mission & Vision -->
                    <div class="space-y-8 fade-in" style="animation-delay: 0.2s;">
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-[#1b1b18] mb-4">Our Mission</h4>
                            <p class="text-[#706f6c] leading-relaxed">
                                To empower local communities by creating a trusted marketplace where skilled professionals 
                                can grow their businesses and customers can access quality services with confidence and convenience.
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#22C55E] to-[#16A34A] rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-[#1b1b18] mb-4">Our Vision</h4>
                            <p class="text-[#706f6c] leading-relaxed">
                                To become the leading platform for local services across Nigeria, setting the standard for 
                                trust, quality, and community empowerment in the digital economy.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Core Values -->
                <div class="fade-in" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-bold text-[#1b1b18] text-center mb-12">Our Core Values</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold text-[#1b1b18] mb-3">Trust & Safety</h4>
                            <p class="text-[#706f6c] text-sm leading-relaxed">
                                Every professional is thoroughly vetted and verified to ensure your safety and peace of mind.
                            </p>
                        </div>
                        
                        <div class="text-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold text-[#1b1b18] mb-3">Excellence</h4>
                            <p class="text-[#706f6c] text-sm leading-relaxed">
                                We maintain high standards and continuously improve our platform to deliver exceptional experiences.
                            </p>
                        </div>
                        
                        <div class="text-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold text-[#1b1b18] mb-3">Community</h4>
                            <p class="text-[#706f6c] text-sm leading-relaxed">
                                We believe in supporting local talent and building stronger communities through economic empowerment.
                            </p>
                        </div>
                        
                        <div class="text-center">
                            <div class="w-20 h-20 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold text-[#1b1b18] mb-3">Fair Pricing</h4>
                            <p class="text-[#706f6c] text-sm leading-relaxed">
                                Transparent pricing with no hidden fees ensures fair compensation for professionals and value for customers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section with Google Maps -->
        <section id="contact" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#16A34A]/10 to-[#22C55E]/10 rounded-full text-sm font-medium text-[#16A34A] mb-6 border border-[#16A34A]/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Get In Touch
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#1b1b18] mb-6">
                        Contact 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#16A34A] to-[#22C55E]">KwadagoPlus</span>
                    </h2>
                    <p class="text-xl text-[#706f6c] max-w-3xl mx-auto">
                        Have questions or need support? We're here to help. Reach out to us through any of the channels below.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <!-- Contact Information -->
                    <div class="fade-in" style="animation-delay: 0.1s;">
                        <h3 class="text-2xl font-bold text-[#1b1b18] mb-8">Get in Touch</h3>
                        
                        <div class="space-y-6 mb-12">
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-[#1b1b18] mb-2">Phone Support</h3>
                                    <p class="text-[#706f6c] mb-2">Call us for immediate assistance</p>
                                    <div class="space-y-1">
                                        <p class="text-[#16A34A] font-semibold">+234 800 000 0000</p>
                                        <p class="text-[#16A34A] font-semibold">+234 803 123 4567</p>
                                        <p class="text-sm text-[#706f6c]">Available 24/7 for emergencies</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-[#1b1b18] mb-2">Email Support</h3>
                                    <p class="text-[#706f6c] mb-2">Send us a detailed message</p>
                                    <div class="space-y-1">
                                        <p class="text-[#16A34A] font-semibold">support@kwadagoplus.com</p>
                                        <p class="text-[#16A34A] font-semibold">info@kwadagoplus.com</p>
                                        <p class="text-sm text-[#706f6c]">Response within 2 hours</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Address -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-[#1b1b18] mb-2">Visit Our Office</h3>
                                    <p class="text-[#706f6c] mb-2">Come see us in person</p>
                                    <div class="space-y-1">
                                        <p class="text-[#16A34A] font-semibold">123 Ahmadu Bello Way</p>
                                        <p class="text-[#16A34A] font-semibold">GRA, Bauchi 740001</p>
                                        <p class="text-[#16A34A] font-semibold">Bauchi State, Nigeria</p>
                                        <p class="text-sm text-[#706f6c]">Mon-Fri: 8AM-6PM, Sat: 9AM-4PM</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- WhatsApp -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-gradient-to-br from-[#25D366] to-[#128C7E] rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-[#1b1b18] mb-2">WhatsApp Support</h3>
                                    <p class="text-[#706f6c] mb-2">Quick chat support</p>
                                    <div class="space-y-1">
                                        <p class="text-[#25D366] font-semibold">+234 803 123 4567</p>
                                        <p class="text-sm text-[#706f6c]">Available 24/7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Contact Form -->
                        <div class="bg-gradient-to-br from-[#F5F5F3] to-[#F0F9F0] rounded-2xl p-8">
                            <h3 class="text-xl font-bold text-[#1b1b18] mb-6">Send us a Message</h3>
                            <form class="space-y-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-[#1b1b18] mb-2">First Name</label>
                                        <input type="text" class="calculator-input" placeholder="Enter your first name">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-[#1b1b18] mb-2">Last Name</label>
                                        <input type="text" class="calculator-input" placeholder="Enter your last name">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">Email</label>
                                    <input type="email" class="calculator-input" placeholder="Enter your email address">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">Phone Number</label>
                                    <input type="tel" class="calculator-input" placeholder="Enter your phone number">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">Subject</label>
                                    <select class="calculator-input">
                                        <option>General Inquiry</option>
                                        <option>Technical Support</option>
                                        <option>Business Partnership</option>
                                        <option>Complaint</option>
                                        <option>Feedback</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#1b1b18] mb-2">Message</label>
                                    <textarea rows="4" class="calculator-input" placeholder="Tell us how we can help you..."></textarea>
                                </div>
                                <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-xl hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Google Maps -->
                    <div class="fade-in" style="animation-delay: 0.3s;">
                        <div class="map-container">
                            <!-- Map Overlay with Office Information -->
                            <div class="map-overlay">
                                <h3 class="font-bold text-[#1b1b18] mb-2">KwadagoPlus Office</h3>
                                <p class="text-sm text-[#706f6c] mb-3">
                                    123 Ahmadu Bello Way<br>
                                    GRA, Bauchi 740001<br>
                                    Bauchi State, Nigeria
                                </p>
                                <div class="flex items-center text-sm text-[#16A34A] font-medium mb-3">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    </svg>
                                    Get Directions
                                </div>
                                <div class="text-xs text-[#706f6c]">
                                    <p>📞 +234 800 000 0000</p>
                                    <p>🕒 Mon-Fri: 8AM-6PM</p>
                                </div>
                            </div>
                            
                            <!-- Google Maps Container -->
                            <div id="map" class="w-full h-full rounded-2xl"></div>
                        </div>
                        
                        <!-- Service Areas -->
                        <div class="mt-8 bg-white rounded-2xl p-6 shadow-lg">
                            <h3 class="font-bold text-[#1b1b18] mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                                Our Service Areas
                            </h3>
                            <p class="text-sm text-[#706f6c] mb-4">We provide services across all major areas in Bauchi State:</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="service-area-badge">📍 Bauchi Metropolitan</span>
                                <span class="service-area-badge">📍 Azare</span>
                                <span class="service-area-badge">📍 Jama'are</span>
                                <span class="service-area-badge">📍 Misau</span>
                                <span class="service-area-badge">📍 Katagum</span>
                                <span class="service-area-badge">📍 Dass</span>
                                <span class="service-area-badge">📍 Tafawa Balewa</span>
                                <span class="service-area-badge">📍 Alkaleri</span>
                                <span class="service-area-badge">📍 Bogoro</span>
                                <span class="service-area-badge">📍 Dambam</span>
                                <span class="service-area-badge">📍 Darazo</span>
                                <span class="service-area-badge">📍 Gamawa</span>
                                <span class="service-area-badge">📍 Ganjuwa</span>
                                <span class="service-area-badge">📍 Giade</span>
                                <span class="service-area-badge">📍 Itas/Gadau</span>
                                <span class="service-area-badge">📍 Kirfi</span>
                                <span class="service-area-badge">📍 Ningi</span>
                                <span class="service-area-badge">📍 Shira</span>
                                <span class="service-area-badge">📍 Toro</span>
                                <span class="service-area-badge">📍 Warji</span>
                            </div>
                        </div>
                        
                        <!-- Live Tracking Feature -->
                        <div class="mt-8 bg-gradient-to-r from-[#16A34A] to-[#22C55E] rounded-2xl p-6 text-white live-tracking">
                            <h3 class="font-bold mb-2 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                                Real-Time Professional Tracking
                            </h3>
                            <p class="text-sm opacity-90 mb-4">
                                Track your assigned professional's location in real-time for added security and convenience.
                            </p>
                            <div class="flex items-center text-sm">
                                <div class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></div>
                                <span>124 professionals currently active in your area</span>
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
                            <div class="w-10 h-10 bg-gradient-to-br from-[#16A34A] to-[#22C55E] rounded-lg mr-3 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold">KwadagoPlus</span>
                        </div>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Connecting communities with trusted professionals across Bauchi State. Your reliable partner for all service needs.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-[#16A34A] transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-[#16A34A] transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-[#16A34A] transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z.017 0z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-[#16A34A] transition-all">
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
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Plumbing</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Electrical</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Carpentry</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Auto Mechanic</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Cleaning</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Painting</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">View All Services</a></li>
                        </ul>
                    </div>
                    
                    <!-- Company -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Company</h3>
                        <ul class="space-y-3">
                            <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                            <li><a href="#how-it-works" class="text-gray-400 hover:text-white transition-colors">How It Works</a></li>
                            <li><a href="#professionals" class="text-gray-400 hover:text-white transition-colors">Our Professionals</a></li>
                            <li><a href="#testimonials" class="text-gray-400 hover:text-white transition-colors">Customer Reviews</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press & Media</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                        </ul>
                    </div>
                    
                    <!-- Support -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Support</h3>
                        <ul class="space-y-3">
                            <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Help Center</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Safety Guidelines</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Cookie Policy</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Become a Professional</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Emergency Contact -->
                <div class="border-t border-gray-800 pt-8 mb-8">
                    <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-xl p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">24/7 Emergency Services</h3>
                        <p class="mb-4">Need immediate help? Our emergency professionals are available around the clock.</p>
                        <a href="tel:+2348000000000" class="inline-flex items-center px-6 py-3 bg-white text-red-600 rounded-lg hover:bg-gray-100 transition-all font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Call +234 800 000 0000
                        </a>
                    </div>
                </div>
                
                <!-- Bottom Footer -->
                <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-400 text-sm mb-4 md:mb-0">
                        © 2024 KwadagoPlus. All rights reserved. | Made with ❤️ in Bauchi, Nigeria
                    </div>
                    <div class="flex items-center space-x-6 text-sm text-gray-400">
                        <span>🇳🇬 Nigeria</span>
                        <span>•</span>
                        <span>English</span>
                        <span>•</span>
                        <span>₦ NGN</span>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Live Chat Widget -->
        <div class="live-chat-widget" id="liveChatWidget">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            Live Chat
        </div>

        <!-- Back to Top Button -->
        <div class="back-to-top" id="backToTop">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        </div>

        <!-- JavaScript -->
        <script>
            // Google Maps Initialization
            function initMap() {
                // Bauchi coordinates
                const bauchi = { lat: 10.3123456789012, lng: 9.8441234567890 };
                
                // Map options with custom styling
                const mapOptions = {
                    zoom: 13,
                    center: bauchi,
                    mapTypeControl: false,
                    streetViewControl: false,
                    fullscreenControl: true,
                    zoomControl: true,
                    styles: [
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [{"color": "#444444"}]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [{"color": "#f2f2f2"}]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [{"visibility": "off"}]
                        },
                        {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [{"saturation": -100}, {"lightness": 45}]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [{"visibility": "simplified"}]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.icon",
                            "stylers": [{"visibility": "off"}]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [{"visibility": "off"}]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [{"color": "#46bcec"}, {"visibility": "on"}]
                        }
                    ]
                };
                
                // Initialize map
                const map = new google.maps.Map(document.getElementById("map"), mapOptions);
                
                // Main office marker
                const officeMarker = new google.maps.Marker({
                    position: bauchi,
                    map: map,
                    title: "KwadagoPlus Office",
                    icon: {
                        url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="18" fill="#16A34A" stroke="white" stroke-width="4"/>
                                <path d="M20 10L15 25h10L20 10z" fill="white"/>
                            </svg>
                        `),
                        scaledSize: new google.maps.Size(40, 40),
                        anchor: new google.maps.Point(20, 20)
                    }
                });
                
                // Office info window
                const officeInfoWindow = new google.maps.InfoWindow({
                    content: `
                        <div class="map-info-window">
                            <h3>KwadagoPlus Office</h3>
                            <p>123 Ahmadu Bello Way<br>GRA, Bauchi 740001<br>Bauchi State, Nigeria</p>
                            <div class="rating">
                                <span class="stars">★★★★★</span>
                                <span>4.9 (2,847 reviews)</span>
                            </div>
                            <p><strong>📞</strong> +234 800 000 0000</p>
                            <p><strong>🕒</strong> Mon-Fri: 8AM-6PM</p>
                            <a href="tel:+2348000000000" class="contact-btn">Call Now</a>
                        </div>
                    `
                });
                
                // Show office info on marker click
                officeMarker.addListener('click', () => {
                    officeInfoWindow.open(map, officeMarker);
                });
                
                // Sample professional locations
                const professionals = [
                    { lat: 10.3200, lng: 9.8500, name: "Ahmad - Plumber", service: "Plumbing", rating: 4.8, status: "available" },
                    { lat: 10.3100, lng: 9.8400, name: "Fatima - Electrician", service: "Electrical", rating: 4.9, status: "busy" },
                    { lat: 10.3150, lng: 9.8450, name: "Ibrahim - Carpenter", service: "Carpentry", rating: 4.7, status: "available" },
                    { lat: 10.3080, lng: 9.8380, name: "Aisha - Cleaner", service: "Cleaning", rating: 4.9, status: "available" },
                    { lat: 10.3180, lng: 9.8480, name: "Musa - Mechanic", service: "Auto Repair", rating: 4.6, status: "offline" }
                ];
                
                // Add professional markers
                professionals.forEach(professional => {
                    const statusColor = professional.status === 'available' ? '#16A34A' : 
                                      professional.status === 'busy' ? '#DC2626' : '#6B7280';
                    
                    const marker = new google.maps.Marker({
                        position: { lat: professional.lat, lng: professional.lng },
                        map: map,
                        title: professional.name,
                        icon: {
                            url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" fill="${statusColor}" stroke="white" stroke-width="2"/>
                                    <circle cx="12" cy="12" r="4" fill="white"/>
                                </svg>
                            `),
                            scaledSize: new google.maps.Size(24, 24),
                            anchor: new google.maps.Point(12, 12)
                        }
                    });
                    
                    const infoWindow = new google.maps.InfoWindow({
                        content: `
                            <div class="map-info-window">
                                <h3>${professional.name}</h3>
                                <p><strong>Service:</strong> ${professional.service}</p>
                                <div class="rating">
                                    <span class="stars">★★★★★</span>
                                    <span>${professional.rating}</span>
                                </div>
                                <p><strong>Status:</strong> <span style="color: ${statusColor}; text-transform: capitalize;">${professional.status}</span></p>
                                <a href="#" class="contact-btn">View Profile</a>
                            </div>
                        `
                    });
                    
                    marker.addListener('click', () => {
                        infoWindow.open(map, marker);
                    });
                });
                
                // Add click listener to map overlay for directions
                document.querySelector('.map-overlay').addEventListener('click', () => {
                    const url = `https://www.google.com/maps/dir/?api=1&destination=${bauchi.lat},${bauchi.lng}`;
                    window.open(url, '_blank');
                });
            }

            // Mobile Menu Toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const closeMobileMenu = document.getElementById('close-mobile-menu');
            const mobileMenuPanel = mobileMenu.querySelector('div');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenuPanel.classList.remove('translate-x-full');
                }, 10);
            });

            closeMobileMenu.addEventListener('click', () => {
                mobileMenuPanel.classList.add('translate-x-full');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            });

            mobileMenu.addEventListener('click', (e) => {
                if (e.target === mobileMenu) {
                    mobileMenuPanel.classList.add('translate-x-full');
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                    }, 300);
                }
            });

            // Search Suggestions
            const serviceSearch = document.getElementById('serviceSearch');
            const searchSuggestions = document.getElementById('searchSuggestions');

            if (serviceSearch && searchSuggestions) {
                serviceSearch.addEventListener('focus', () => {
                    searchSuggestions.classList.remove('hidden');
                });

                serviceSearch.addEventListener('blur', () => {
                    setTimeout(() => {
                        searchSuggestions.classList.add('hidden');
                    }, 200);
                });

                // Handle suggestion clicks
                searchSuggestions.addEventListener('click', (e) => {
                    if (e.target.classList.contains('search-suggestion')) {
                        serviceSearch.value = e.target.textContent.split(' - ')[0].substring(2);
                        searchSuggestions.classList.add('hidden');
                    }
                });
            }

            // Stats Counter Animation
            function animateCounter(element, target) {
                let current = 0;
                const increment = target / 100;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    element.textContent = Math.floor(current).toLocaleString();
                }, 20);
            }

            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        
                        // Animate counters
                        if (entry.target.classList.contains('stats-counter')) {
                            const target = parseInt(entry.target.getAttribute('data-target'));
                            animateCounter(entry.target, target);
                        }
                    }
                });
            }, observerOptions);

            // Observe all fade-in elements
            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });

            // Observe stats counters
            document.querySelectorAll('.stats-counter').forEach(el => {
                observer.observe(el);
            });

            // Service Filter
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    
                    const category = btn.getAttribute('data-category');
                    const serviceCards = document.querySelectorAll('.service-card');
                    
                    serviceCards.forEach(card => {
                        if (category === 'all' || card.getAttribute('data-category').includes(category)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });

            // Progress Bar
            const progressBar = document.getElementById('progressBar');
            
            window.addEventListener('scroll', () => {
                const scrollTop = window.pageYOffset;
                const docHeight = document.body.scrollHeight - window.innerHeight;
                const scrollPercent = (scrollTop / docHeight) * 100;
                progressBar.style.width = scrollPercent + '%';
            });

            // Back to Top Button
            const backToTop = document.getElementById('backToTop');
            
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }
            });

            backToTop.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Live Chat Widget
            const liveChatWidget = document.getElementById('liveChatWidget');
            liveChatWidget.addEventListener('click', () => {
                alert('Live chat feature coming soon! For now, please call us at +234 800 000 0000 or send us an email.');
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

            // Header scroll effect
            const header = document.querySelector('header');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    header.classList.add('shadow-lg');
                } else {
                    header.classList.remove('shadow-lg');
                }
            });

            // Initialize on page load
            document.addEventListener('DOMContentLoaded', () => {
                // Add loading animation
                document.body.style.opacity = '0';
                setTimeout(() => {
                    document.body.style.transition = 'opacity 0.5s ease-in';
                    document.body.style.opacity = '1';
                }, 100);
            });

            // Performance optimization: Throttle scroll events
            function throttle(func, wait) {
                let timeout;
                return function executedFunction(...args) {
                    const later = () => {
                        clearTimeout(timeout);
                        func(...args);
                    };
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                };
            }

            // Apply throttling to scroll events
            window.addEventListener('scroll', throttle(() => {
                // Scroll-based animations here
            }, 16)); // ~60fps
        </script>
        
        <!-- Google Maps API -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb6SfpP9TuZNj_cRXS8kU_Sqlz9n_6Buk"></script>
    </body>
</html>
