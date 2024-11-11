<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestión de Talleres Automotrices</title>


    @vite('resources/css/app2.css') 
</head>
    <body class="bg-gray-50 text-gray-900 font-sans">
        <!-- Navbar -->
    <nav class="bg-black text-white px-6 py-4 flex justify-between items-center">
        <!-- logo -->
        <a href="#">
            <img src="https://vip2cars.pe/wp-content/uploads/2024/07/logo-blanco-02-2-1-2048x473.png" alt="Logo" class="h-12 md:h-16">
        </a>

        <!-- icono ed movil en froma de hamburguesa -->
        <button id="menu-toggle" class="block md:hidden text-white focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- navegar sobre los link -->
        <ul id="menu" class="hidden md:flex space-x-8 text-white font-medium items-center">
            <li><a href="#" class="hover:text-red-600 transition">Inicio</a></li>
            <li><a href="#" class="hover:text-red-600 transition">Quienes Somos</a></li>
            <li><a href="#" class="hover:text-red-600 transition">Servicios</a></li>
            <li><a href="#" class="hover:text-red-600 transition">Contacto</a></li>
        </ul>

        <!-- Action Buttons -->
        <div class="hidden md:flex items-center space-x-6">
            <!-- agendar cita boton -->
            <a href="#" class="bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition">Agendar Cita</a>
            <!-- iniciar sesion y registrar -->
            <div class="flex space-x-4">
                <a href="{{ route('login') }}" class="text-white hover:text-red-500 transition">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="text-white hover:text-red-500 transition">Registrarse</a>
            </div>
        </div>
    </nav>

    <!--  -->
    <div id="mobile-menu" class="hidden bg-black text-white p-6 space-y-4 md:hidden">
        <ul class="space-y-4">
            <li><a href="#" class="hover:text-red-600 transition">Inicio</a></li>
            <li><a href="#" class="hover:text-red-600 transition">Quienes Somos</a></li>
            <li><a href="#" class="hover:text-red-600 transition">Servicios</a></li>
            <li><a href="#" class="hover:text-red-600 transition">Contacto</a></li>
        </ul>
        <a href="#" class="block bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition text-center">Agendar Cita</a>
        <div class="flex space-x-4 justify-center">
            <a href="{{ route('login') }}" class="hover:text-red-500 transition">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="hover:text-red-500 transition">Registrarse</a>
        </div>
    </div>

    <!-- javaScript f Hamburger Menu Toggle -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>



    <!-- Hero Section -->
    <section class="hero-section relative h-screen flex items-center justify-center text-center text-white">
        <!-- Video Background -->
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
        </video>

        <!-- Dark Overlay for Better Contrast -->
        <div class="absolute inset-0 bg-black opacity-60"></div>

        <!-- Hero Content -->
        <div class="relative z-10 px-6">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Servicios Especializados de Reparación de Vehículos</h2>
            <p class="text-lg md:text-xl mb-8 max-w-xl mx-auto">
                ¡Hola! Somos VIP2CARS, el primer taller automotriz especializado en autos de gama alta en Lima y Arequipa.
            </p>
            <a href="#" class="bg-red-500 text-white font-bold py-3 px-8 rounded hover:bg-red-600">Comienza Ahora</a>
        </div>
    </section>



    <!-- ga -->
    <section class="p-8 bg-white text-gray-900">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">
            <!-- Columna de Texto -->
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-4xl font-bold leading-tight">
                    Somos un equipo calificado y profesional.
                </h2>
                <p class="text-gray-700">
                    Recuerda que estos beneficios pueden ser adaptados y ampliados según tus necesidades específicas. 
                    Si deseas más detalles o tienes alguna otra solicitud, no dudes en decírmelo. ¡Estoy aquí para ayudarte! 🚗✨
                </p>

                <!-- lista de Características -->
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


    <!-- footer -->
    <footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discordapp.com/channels/1216921530848772126/1216921530848772129" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                        </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="https://discordapp.com/channels/1216921530848772126/1216921530848772129" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                            <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                        </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">GitHub account</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Dribbble account</span>
                </a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
