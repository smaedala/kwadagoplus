<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-8 text-center">
                <h2 class="text-3xl font-bold text-gray-700">Create Service Provider Account</h2>
                <p class="text-sm text-gray-500 mt-2">Start offering your services on our platform</p>
            </div>

            <form method="POST" action="{{ route('register.provider') }}" class="space-y-6">
                @csrf

                <!-- Personal Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <div class="mt-1">
                            <input id="name" name="name" type="text" required autocomplete="name"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{ old('name') }}" placeholder="Enter your full name">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" required autocomplete="email"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{ old('email') }}" placeholder="Enter your email">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <div class="mt-1">
                            <input id="phone" name="phone" type="tel" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{ old('phone') }}" placeholder="Enter your phone number">
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <label for="business_name" class="block text-sm font-medium text-gray-700">Business Name</label>
                        <div class="mt-1">
                            <input id="business_name" name="business_name" type="text" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{ old('business_name') }}" placeholder="Enter your business name">
                            <x-input-error :messages="$errors->get('business_name')" class="mt-2" />
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Service Area/Address</label>
                    <div class="mt-1">
                        <input id="address" name="address" type="text" required
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            value="{{ old('address') }}" placeholder="Enter your primary service area">
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                </div>

                <!-- Services Offered -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Services Offered</label>
                    <div class="mt-2 grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="services[]" value="plumbing" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label class="ml-2 text-sm text-gray-700">Plumbing</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="services[]" value="electrical" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label class="ml-2 text-sm text-gray-700">Electrical</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="services[]" value="carpentry" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label class="ml-2 text-sm text-gray-700">Carpentry</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="services[]" value="painting" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label class="ml-2 text-sm text-gray-700">Painting</label>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('services')" class="mt-2" />
                </div>

                <!-- Bio -->
                <div>
                    <label for="bio" class="block text-sm font-medium text-gray-700">Professional Bio</label>
                    <div class="mt-1">
                        <textarea id="bio" name="bio" rows="4" required
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Tell us about your experience and expertise">{{ old('bio') }}</textarea>
                        <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                    </div>
                </div>

                <!-- Password -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="Create a strong password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <div class="mt-1">
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="Confirm your password">
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Register as Service Provider
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Looking for services instead?
                    <a href="{{ route('register.seeker.form') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Register as Service Seeker
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
