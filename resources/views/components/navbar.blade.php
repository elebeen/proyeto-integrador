<nav class="bg-black text-white px-6 py-4 flex justify-between items-center">
    <a href="#" class="flex items-center">
        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/logo-blanco-02-2-1-2048x473.png" class="h-12 md:h-16" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap"></span>
    </a>

    <button id="menu-toggle" class="block md:hidden text-white focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>

    <ul id="menu" class="hidden md:flex space-x-8 text-white font-medium items-center">
        <li><a href="{{ route('usuario.welcome') }}" class="hover:text-red-600 transition">Inicio</a></li>
        <li><a href="{{ route('usuario.quienes_somos') }}" class="hover:text-red-600 transition">Quienes Somos</a></li>
        <li><a href="{{ route('usuario.servicios') }}" class="hover:text-red-600 transition">Servicios</a></li>
        <li><a href="#" class="hover:text-red-600 transition">Contacto</a></li>
    </ul>

    <div class="hidden md:flex items-center space-x-6">
        <a href="{{ route('usuario.cita-formulario') }}" class="bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition">Agendar Cita</a>
        <div class="flex space-x-4" x-data="{ open: false }">
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
                            {{ Auth::user()->name }} {{ Auth::user()->apellido }}
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                            
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-blue-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-blue-600 dark:hover:text-white">Mantenimientos</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-blue-600 dark:hover:text-white">Autos</a>
                                </li>
                                <li>
                                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-blue-600 dark:hover:text-white">Ver perfil</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-blue-600 dark:hover:text-white w-full text-left">
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</nav>

<div id="mobile-menu" class="hidden bg-black text-white p-6 space-y-4 md:hidden">
    <ul class="space-y-4">
        <li><a href="{{ url('/') }}" class="hover:text-red-600 transition">Inicio</a></li>
        <li><a href="{{ route('usuario.quienes_somos')}}" class="hover:text-red-600 transition">Quienes Somos</a></li>
        <li><a href="{{ route('usuario.servicios') }}" class="hover:text-red-600 transition">Servicios</a></li>
        <li><a href="#" class="hover:text-red-600 transition">Contacto</a></li>
    </ul>
    <a href="{{ route('usuario.cita-formulario') }}" class="block bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition text-center">Agendar Cita</a>
    <div class="flex space-x-4 justify-center">
        <a href="{{ route('login') }}" class="hover:text-red-500 transition">Iniciar sesión</a>
        <a href="{{ route('register') }}" class="hover:text-red-500 transition">Registrarse</a>
    </div>
</div>
