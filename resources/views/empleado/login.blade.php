<x-guest-layout>
    <div class="text-center text-xl font-semibold text-slate-600">
        <div class="flex justify-center items-center text-center">
            <h3 class="flex items-center text-[#fdf0d5]">
                <div class="mr-1">
                    <x-user-logo class=""/>
                </div>
                {{ __('Ingresar al sistema') }}
            </h3>
        </div>
    </div>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form action="{{ route('empleado.login') }}" method="POST">
        @csrf
        <div>
            <x-input-label for="usuario">Usuario</x-input-label>
            <x-text-input id="usuario" class="block mt-1 w-full" type="text" name="usuario" required autofocus/>
            <x-input-error :messages="$errors->get('usuario')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password">Contraseña</x-input-label>
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required    />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-begin mt-4">
            <x-primary-button class="mr-4">
                {{ __('Iniciar Sesión') }}
            </x-primary-button>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('empleado-password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
