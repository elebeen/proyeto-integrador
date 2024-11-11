<x-guest-layout>
    <div class="text-center text-xl font-semibold text-slate-600">
        <div class="flex justify-center items-center text-center">
            <h3 class="flex items-center text-[#0b847a]">
                <div class="mr-1">
                    <x-user-logo class=""/>
                </div>
                {{ __('Ingresar al sistema') }}
            </h3>
        </div>
    </div>
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
            <x-primary-button class="">
                {{ __('Iniciar Sesión') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
