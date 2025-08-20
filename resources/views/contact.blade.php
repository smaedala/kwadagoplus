@extends('layouts.app')

@section('content')
    <!-- Contact Section with Google Maps -->
    <section id="contact" class="py-20 bg-white">
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
                    Get in Touch with Us
                </h2>
                <p class="text-xl text-[#706f6c] max-w-3xl mx-auto">
                    Visit our office or reach out through any of our contact channels. We're here to help!
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div class="fade-in">
                    <div class="bg-gradient-to-br from-[#F5F5F3] to-[#F0F9F0] rounded-2xl p-8">
                        <h3 class="text-2xl font-bold mb-6">Send us a Message</h3>
                        <form class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#16A34A] focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#16A34A] focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#16A34A] focus:border-transparent"></textarea>
                            </div>
                            <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-[#16A34A] to-[#22C55E] text-white rounded-lg hover:from-[#15803D] hover:to-[#16A34A] transition-all duration-300 font-medium">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Map Section -->
                <div class="fade-in" style="animation-delay: 0.2s;">
                    <div class="map-container">
                        <div id="map" style="width: 100%; height: 400px; border-radius: 20px;"></div>
                        <div class="map-overlay">
                            <h3 class="text-lg font-bold text-[#16A34A] mb-2">Our Office</h3>
                            <p class="text-[#706f6c] mb-4">123 Ahmadu Bello Way, GRA, Bauchi, Nigeria</p>
                            <button onclick="window.open('https://www.google.com/maps/dir/?api=1&destination=10.3123456789012,9.8441234567890', '_blank')" class="px-4 py-2 bg-[#16A34A] text-white rounded-lg text-sm hover:bg-[#15803D] transition-all">
                                Get Directions
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Script -->
    <script src="{{ asset('js/maps.js') }}"></script>
    
    <!-- Google Maps API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb6SfpP9TuZNj_cRXS8kU_Sqlz9n_6Buk&callback=initMap"></script>
@endsection
