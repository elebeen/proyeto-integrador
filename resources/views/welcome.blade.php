<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestión de Talleres Automotrices</title>
    @vite('resources/css/app2.css') 
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- Navbar Componente -->
    @include('components.navbar')

    <!-- Hero Section componente -->
    @include('components.hero')

    <!-- equipo profesionañ -->
        <!-- ga -->
        <section class="p-8 bg-white text-gray-900">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">
            <!-- columna de texto -->
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-4xl font-bold leading-tight">
                    Somos un equipo calificado y profesional.
                </h2>
                <p class="text-gray-700">
                    Recuerda que estos beneficios pueden ser adaptados y ampliados según tus necesidades específicas. 
                    Si deseas más detalles o tienes alguna otra solicitud, no dudes en decírmelo. ¡Estoy aquí para ayudarte! 🚗✨
                </p>

                <!-- lista de caracteristicas -->
                <ul class="space-y-6">
                    <li class="flex items-center">
                        <div class="h-8 w-8 flex items-center justify-center rounded-full bg-white mr-4">
                            <div class="checkmark bg-red-600 rounded-full h-5 w-5 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.707-5.293a1 1 0 011.414 0L10 13.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-xl">Variedad de servicios</h4>
                            <p class="text-gray-600">Amplia gama de opciones para satisfacer las necesidades de tu vehículo.</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="h-8 w-8 flex items-center justify-center rounded-full bg-white mr-4">
                            <div class="checkmark bg-red-600 rounded-full h-5 w-5 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.707-5.293a1 1 0 011.414 0L10 13.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-xl">Soporte de calidad</h4>
                            <p class="text-gray-600">Equipo experimentado y dedicado a brindarte un servicio excepcional.</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="h-8 w-8 flex items-center justify-center rounded-full bg-white mr-4">
                            <div class="checkmark bg-red-600 rounded-full h-5 w-5 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.707-5.293a1 1 0 011.414 0L10 13.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-xl">Todas las marcas de vehículos</h4>
                            <p class="text-gray-600">En Vip2cars, no nos limitamos a una sola marca. Trabajamos con una amplia variedad de marcas de automóviles.</p>
                        </div>
                    </li>
                </ul>


            </div>

            <!-- columna de imagen -->
            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                <img src="https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2022/08/taller-mecanico-2775341.jpg?tf=3840x" alt="Imagen de equipo profesional" class="rounded-lg shadow-lg object-cover w-3/4 h-auto">
            </div>
        </div>
    </section>


    <!-- Footer componente  -->
    @include('components.footer')

    <!-- JavaScript for Hamburger Menu Toggle -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>

