<x-guest-layout>
    <div
        class="flex flex-col items-center justify-center min-h-screen px-6 py-12 bg-gradient-to-r from-blue-100 via-white to-purple-100 sm:px-8">
        <div
            class="bg-white shadow-2xl rounded-3xl w-full max-w-md p-8 transform transition-all duration-500 hover:scale-[1.01]">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('../assets/img/mswd-logo.png') }}" alt="Logo"
                    class="w-24 h-24 border-4 border-white rounded-full shadow-lg">
            </div>

            <h1 class="mb-6 text-3xl font-extrabold tracking-wide text-center text-gray-800 drop-shadow-md">
                Sign in
            </h1>

            <x-validation-errors class="mb-4" />

            @session('status')
                <div class="mb-4 text-sm font-medium text-center text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <x-label for="email" value="Email" class="font-semibold text-gray-700" />
                    <x-input id="email"
                        class="w-full mt-1 border-gray-300 shadow-sm rounded-xl focus:border-indigo-500 focus:ring-indigo-500"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div>
                    <x-label for="password" value="Password" class="font-semibold text-gray-700" />
                    <x-input id="password"
                        class="w-full mt-1 border-gray-300 shadow-sm rounded-xl focus:border-indigo-500 focus:ring-indigo-500"
                        type="password" name="password" required autocomplete="current-password" />

                </div>

                <div class="flex items-center justify-between mt-2">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-indigo-600 transition hover:text-indigo-800"
                            href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="w-full px-4 py-3 font-bold text-white transition duration-300 transform bg-indigo-600 shadow-md hover:bg-indigo-700 rounded-xl hover:scale-105">
                        Log In
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
