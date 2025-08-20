<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-white to-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl w-full grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="hidden md:flex items-center justify-center bg-green-600 rounded-lg p-8">
                <div class="text-white max-w-sm">
                    <h3 class="text-3xl font-bold mb-4">Welcome to KwadagoPlus</h3>
                    <p class="text-green-100">Find trusted local workers or start offering services in your area. It's fast, secure and reliable.</p>
                </div>
            </div>

            <div class="bg-white py-8 px-6 shadow rounded-lg">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-extrabold text-gray-900">Create your account</h2>
                    <p class="mt-2 text-sm text-gray-600">Choose to register as a service seeker or provider after sign up.</p>
                </div>

                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full name</label>
                        <div class="mt-1">
                            <input id="name" name="name" type="text" autocomplete="name" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                value="{{ old('name') }}" />
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                value="{{ old('email') }}" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="new-password" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 sm:text-sm" />
                            </div>
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm password</label>
                            <div class="mt-1">
                                <input id="password_confirmation" name="password_confirmation" type="password" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 sm:text-sm" />
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Create account</button>
                    </div>

                    <p class="text-sm text-center text-gray-600">Already registered? <a href="{{ route('login') }}" class="text-green-600 font-medium">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
