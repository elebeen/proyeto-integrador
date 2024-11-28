<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiénes Somos - Sistema de Gestión de Talleres Automotrices</title>
    @vite('resources/css/app2.css')
</head>
<body class="bg-gray-50 text-gray-900 font-sans" >
<body class="bg-gray-50 text-gray-900 font-sans" style="background-image: url('ruta/a/tu/imagen.jpg'); background-size: cover; background-position: center;">


    <!-- Navbar Component -->
    @include('components.navbar')

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10">
        <section class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Quiénes Somos</h1>
            <p class="text-lg text-gray-600">
                En <strong>VIP2CARS</strong>, somos un equipo comprometido con brindar servicios automotrices especializados
                de alta calidad. Nos destacamos en la reparación y mantenimiento de autos de gama alta, con presencia en Lima y Arequipa.
            </p>
        </section>

        <!-- Section: Misión y Visión -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-3">Nuestra Misión</h2>
                <p class="text-gray-600">
                    Proveer servicios automotrices de calidad excepcional, garantizando la seguridad, confianza y
                    satisfacción de nuestros clientes, mientras cuidamos del medio ambiente y promovemos la innovación tecnológica.
                </p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-3">Nuestra Visión</h2>
                <p class="text-gray-600">
                    Convertirnos en el taller automotriz líder en Perú, reconocido por la excelencia en el servicio,
                    el profesionalismo de nuestro equipo y nuestra contribución a la industria automotriz.
                </p>
            </div>
        </section>

        <!-- Section: Valores -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Nuestros Valores</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Innovación</h3>
                    <p class="text-gray-600">Apostamos por soluciones tecnológicas modernas para mejorar nuestros servicios.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Compromiso</h3>
                    <p class="text-gray-600">Estamos comprometidos con la satisfacción y seguridad de nuestros clientes.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Excelencia</h3>
                    <p class="text-gray-600">Buscamos la perfección en cada uno de nuestros servicios.</p>
                </div>
            </div>
        </section>

        <!-- Section: Equipo -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Nuestro Equipo</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <img src="data:image/png;base64,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" alt="Equipo 1" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Hermes Curo</h3>
                    <p class="text-gray-600">Gerente General</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <img src="data:image/png;base64,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" alt="Equipo 2" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Diego Colca</h3>
                    <p class="text-gray-600">Jefe de Diseño</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/2922/2922627.png" alt="Equipo 23" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Joel Huanaco</h3>
                    <p class="text-gray-600">Jefe de Almacen</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Component -->
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
