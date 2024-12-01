<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full p-3 border border-gray-400 rounded-md bg-gray-200 text-[#003049] focus:outline-none focus:ring-2 focus:ring-[#003049]"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full p-3 border border-gray-400 rounded-md bg-gray-200 text-[#003049] focus:outline-none focus:ring-2 focus:ring-[#003049]"
                        type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#003049] focus:ring-[#003049]" name="remember">
                <span class="ms-2 text-sm text-[#003049]">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-[#003049] hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#003049]" href="{{ route('password.request') }}">
                    <span>🔑</span> 
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            <x-primary-button class="ms-3 bg-[#003049] text-white hover:bg-[#002037]">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
