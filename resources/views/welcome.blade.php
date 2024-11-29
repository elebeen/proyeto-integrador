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
                    Nuestro compromiso es ofrecer soluciones personalizadas para el mantenimiento 
                    de tu vehículo. Adaptamos nuestros servicios a las necesidades específicas de
                    tu auto, asegurando siempre la máxima calidad y eficiencia. Si tienes alguna
                    pregunta o necesitas más información sobre nuestros servicios, no dudes en contactarnos. 
                    ¡Estamos aquí para brindarte el mejor cuidado para tu vehículo!
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
                            <p class="text-gray-600">Ofrecemos una amplia gama de servicios para satisfacer todas las necesidades de tu vehículo, desde mantenimientos preventivos hasta reparaciones complejas.</p>
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
                            <h4 class="font-semibold text-xl">Atención personalizada</h4>
                            <p class="text-gray-600">Nuestro equipo altamente capacitado ofrece atención personalizada y adaptada a las necesidades específicas de cada cliente y vehículo.</p>
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
                            <h4 class="font-semibold text-xl">Mantenimiento preventivo</h4>
                            <p class="text-gray-600">Realizamos mantenimientos preventivos para evitar problemas mayores en tu vehículo y asegurar su óptimo funcionamiento a largo plazo.</p>
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
                            <h4 class="font-semibold text-xl">Servicios rápidos y confiables</h4>
                            <p class="text-gray-600">Nuestro taller está equipado con tecnología avanzada para ofrecerte servicios rápidos y de calidad, garantizando la confiabilidad en cada reparación.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- columna de imagen -->
            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center ml-4 md:ml-12">
                <img src="https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2022/08/taller-mecanico-2775341.jpg?tf=3840x" alt="Imagen de equipo profesional" class="rounded-lg shadow-lg object-cover w-full h-auto">
            </div>  
        </div>
    </section>
    <section class="p-8 text-gray-900 mt-8">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-4">Marcas que confiamos</h2>
            <p class="text-lg mb-5">Estas son algunas de las marcas con las que trabajamos.</p>
    
            <!-- Slider de Marcas -->
            <div id="marcaSliderWrapper" class="overflow-hidden relative">
                <div id="marcaSlider" class="flex w-max transition-transform ease-linear">
                    <!-- Marcas -->
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-6-150x150.webp" alt="Marca 1" class="mx-auto">
                    </div>
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-15-150x150.webp" alt="Marca 2" class="mx-auto">
                    </div>
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-4-150x150.webp" alt="Marca 3" class="mx-auto">
                    </div>
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/Frame-4-150x150.png.webp" alt="Marca 4" class="mx-auto">
                    </div>
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngwing.com_-150x150.webp" alt="Marca 5" class="mx-auto">
                    </div>
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-4-1-150x150.webp" alt="Marca 6" class="mx-auto">
                    </div>  
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-2-1-150x150.webp" alt="Marca 7" class="mx-auto">
                    </div>
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-1-1-150x150.webp" alt="Marca 8" class="mx-auto">
                    </div>
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-4-150x150.webp" alt="Marca 9" class="mx-auto">
                    </div>
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-1-150x150.webp" alt="Marca 10" class="mx-auto">
                    </div>
                    <!-- duplique marcas para la continuidad -->
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-6-150x150.webp" alt="Marca 1" class="mx-auto">
                    </div>
                    <div class="w-40 mx-9 flex-shrink-0">
                        <img src="https://vip2cars.pe/wp-content/uploads/2024/07/AnyConv.com__pngegg-15-150x150.webp" alt="Marca 2" class="mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-8 text-gray-900 mt-5"> 
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-4">Ubícanos en</h2>
            <p class="text-lg mb-5">Aquí puedes ver nuestra ubicación en el mapa:</p>
    
            <div class="mb-7">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.8289490247134!2d-71.5295703303768!3d-16.40878031253737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424afe9aed1827%3A0x309ac267ff61bdaa!2sSebastian%20Barranca%20135%2C%20Arequipa%2004001!5e0!3m2!1ses!2spe!4v1732847928423!5m2!1ses!2spe" 
                    width="100%" 
                    height="450" 
                    style="border:0; max-width: calc(100% - 32px); margin-left: 38px; margin-right: 38px;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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

    <script>
        const marcas = document.getElementById('marcaSlider');
        let offset = 0;

        function rotateBrands() {
            offset -= 0.5; 
            marcas.style.transform = `translateX(${offset}px)`;

            // Reiniciar el offset cuando llegue al final
            if (Math.abs(offset) >= marcas.scrollWidth / 2) {
                offset = 0;
            }

            requestAnimationFrame(rotateBrands);
        }

        rotateBrands(); 
    </script>


</body>
</html>

