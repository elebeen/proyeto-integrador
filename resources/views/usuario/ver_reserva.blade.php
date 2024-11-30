<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Reserva - Taller Mecánico</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-2xl">
            <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Información de la Reserva</h2>

            <!-- Información de la Reserva -->
            <div class="space-y-6">
                <!-- Propietario -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Nombre del Cliente:</span>
                    <span class="text-gray-900">Joel Huanaco</span>
                </div>

                <!-- Teléfono -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Número de Contacto:</span>
                    <span class="text-gray-900">987654321</span>
                </div>

                <!-- Fecha de la Reserva -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Fecha de la Reserva:</span>
                    <span class="text-gray-900">2024-12-01</span>
                </div>

                <!-- Hora de la Reserva -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Hora de la Reserva:</span>
                    <span class="text-gray-900">10:30 AM</span>
                </div>

                <!-- Placa del Vehículo -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Placa del Vehículo:</span>
                    <span class="text-gray-900">ABC-123</span>
                </div>

                <!-- Servicio Solicitado -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Servicio Solicitado:</span>
                    <span class="text-gray-900">Cambio de aceite</span>
                </div>

                <!-- Mecánico Asignado -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Mecánico Asignado:</span>
                    <span class="text-gray-900">Carlos Gómez</span>
                </div>

                <!-- Observaciones -->
                <div class="flex flex-col">
                    <span class="font-medium text-gray-700">Observaciones:</span>
                    <p class="text-gray-900 mt-1">
                        Cliente solicita revisión adicional de frenos.
                    </p>
                </div>
            </div>

            <!-- Botón para Regresar -->
            <div class="mt-6 flex justify-center">
                <a href="/reservas"
                   class="bg-red-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Volver a la Lista de Reservas
                </a>
            </div>
        </div>
    </div>

</body>
</html>
