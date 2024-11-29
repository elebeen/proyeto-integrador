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
        <a href="#" class="bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition">Agendar Cita</a>
        <div class="flex space-x-4">
            @if (Route::has('login'))
                @auth
                @else
                    <a href="{{ route('login') }}" class="text-white hover:text-red-500 transition">Iniciar sesión</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white hover:text-red-500 transition">Registrarse</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>

<div id="mobile-menu" class="hidden bg-black text-white p-6 space-y-4 md:hidden">
    <ul class="space-y-4">
        <li><a href="{{ url('/') }}" class="hover:text-red-600 transition">Inicio</a></li>
        <li><a href="#" class="hover:text-red-600 transition">Quienes Somos</a></li>
        <li><a href="{{ route('usuario.servicios') }}" class="hover:text-red-600 transition">Servicios</a></li>
        <li><a href="#" class="hover:text-red-600 transition">Contacto</a></li>
    </ul>
    <a href="#" class="block bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition text-center">Agendar Cita</a>
    <div class="flex space-x-4 justify-center">
        <a href="{{ route('login') }}" class="hover:text-red-500 transition">Iniciar sesión</a>
        <a href="{{ route('register') }}" class="hover:text-red-500 transition">Registrarse</a>
    </div>
</div>
