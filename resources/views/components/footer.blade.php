<footer class="bg-black text-white py-8">
    <div class="mx-auto w-full max-w-screen-xl p-4 lg:py-8">
        <div class="md:flex md:justify-between">
            <!-- Logo y Nombre de la Compañía -->
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center">
                    <img src="https://vip2cars.pe/wp-content/uploads/2024/07/logo-blanco-02-2-1-2048x473.png" class="h-12 md:h-16" alt="Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap"></span>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <!-- Recursos -->
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Recursos</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="{{ route('usuario.welcome') }}" class="hover:text-red-600 transition">Inicio</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('usuario.quienes_somos') }}" class="hover:text-red-600 transition">Quienes Somos</a>
                        </li>
                        <li>
                            <a href="{{ route('usuario.servicios') }}" class="hover:text-red-600 transition">Servicios</a>
                        </li>
                    </ul>
                </div>

                
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Síguenos</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="https://www.facebook.com/profile.php?id=61566744557648" class="hover:text-red-600 transition">Facebook</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://www.facebook.com/photo/?fbid=1997763583803133&set=ecnf.100007085328046" class="hover:text-red-600 transition">Instagram</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/photo/?fbid=2242726999415357&set=ecnf.100010342367956" class="hover:text-red-600 transition">X</a>
                        </li>
                    </ul>
                </div>

                
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Ubícanos</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="https://maps.app.goo.gl/msgJkyCswywtzNDr9" target="_blank" class="hover:text-red-600 transition">Ver en Google Maps</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center text-sm">
            <p>&copy; 2024 VIP2Cars. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

