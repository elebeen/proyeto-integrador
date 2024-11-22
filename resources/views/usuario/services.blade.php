<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicios - Sistema de Gestión de Talleres Automotrices</title>
    @vite('resources/css/app2.css')
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- navbar Componeente -->
    @include('components.navbar')

    <!-- titulo de la pagina -->
    <section class="text-center py-12">
        <h1 class="text-5xl font-bold mb-4">Nuestros Servicios</h1>
        <p class="text-xl text-gray-600">Nuestros servicios se adaptan a todo tipo de vehículos y a todas las marcas.</p>
    </section>

    <!-- seccion de servicios -->
    <section class="p-8 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            <!-- tarjeta de servicio: mecanica -->
            <div class="service-card transform transition hover:scale-105 duration-300 bg-gray-100 p-6 rounded-lg shadow-md relative">
                <img src="https://vamotriz.com/wp-content/uploads/2021/10/tuneup-390x260.jpg" alt="Mecánica" class="w-full h-48 object-cover rounded-t-md mb-4">
                <h3 class="text-2xl font-semibold mb-2">Mecánica</h3>
                <p class="text-gray-600 mb-4">Mantenimiento general y reparación para asegurar que tu vehículo funcione sin problemas.</p>
                <a href="#" class="bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition mt-4 inline-block">Crear Cita</a>            
            </div>

            <!-- tarjeta de servicio: planchado y pintura -->
            <div class="service-card transform transition hover:scale-105 duration-300 bg-gray-100 p-6 rounded-lg shadow-md relative">
                <img src="https://www.gtautomotriz.com.pe/views/assets/img/servicios/planchado-pintura/pintura/pintura_2.webp" alt="Planchado y Pintura" class="w-full h-48 object-cover rounded-t-md mb-4">
                <h3 class="text-2xl font-semibold mb-2">Planchado y Pintura</h3>
                <p class="text-gray-600 mb-4">Reparación de golpes y pintura para devolverle la apariencia original a tu vehículo.</p>
                <a href="#" class="bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition mt-4 inline-block">Crear Cita</a>
            </div>

            <!-- tarjeta de servicio: electronica -->
            <div class="service-card transform transition hover:scale-105 duration-300 bg-gray-100 p-6 rounded-lg shadow-md relative">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSun6IDKd-l_-xg6sAQ0uDEG4C70g6FvDzUsDNSanQWnOe3a11O1bb9KAoNCpleNebX9tM&usqp=CAU" alt="Electrónica" class="w-full h-48 object-cover rounded-t-md mb-4">
                <h3 class="text-2xl font-semibold mb-2">Electrónica</h3>
                <p class="text-gray-600 mb-4">Diagnóstico y reparación de sistemas eléctricos y electrónicos del vehículo.</p>
                <a href="#" class="bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition mt-4 inline-block">Crear Cita</a>            </div>

            <!-- tarjeta de servicio: mantenimiento preventivo -->
            <div class="service-card transform transition hover:scale-105 duration-300 bg-gray-100 p-6 rounded-lg shadow-md relative">
                <img src="https://vamotriz.com/wp-content/uploads/2021/10/kilometros-01-768x512.jpg" alt="Mantenimiento Preventivo" class="w-full h-48 object-cover rounded-t-md mb-4">
                <h3 class="text-2xl font-semibold mb-2">Mantenimiento Preventivo</h3>
                <p class="text-gray-600 mb-4">Servicios regulares para mantener el rendimiento y prevenir fallas en el vehículo.</p>
                <a href="#" class="bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition mt-4 inline-block">Crear Cita</a>            </div>

        </div>
    </section>

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