<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Auto - Taller Mecánico</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-2xl">
            <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Información del Auto</h2>

            <!-- Información del Auto -->
            <div class="space-y-6">
                <!-- Propietario -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Nombre del Propietario:</span>
                    <span class="text-gray-900">Joel Huanaco</span>
                </div>

                <!-- Teléfono -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Número de Contacto:</span>
                    <span class="text-gray-900">987654321</span>
                </div>

                <!-- Placa del Vehículo -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Placa del Vehículo:</span>
                    <span class="text-gray-900">ABC-123</span>
                </div>

                <!-- Marca -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Marca:</span>
                    <span class="text-gray-900">Toyota</span>
                </div>

                <!-- Modelo -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Modelo:</span>
                    <span class="text-gray-900">Corolla</span>
                </div>

                <!-- Año de Fabricación -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Año de Fabricación:</span>
                    <span class="text-gray-900">2020</span>
                </div>

                <!-- Color -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Color:</span>
                    <span class="text-gray-900">Blanco</span>
                </div>

                <!-- Tipo de Combustible -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Tipo de Combustible:</span>
                    <span class="text-gray-900">Gasolina</span>
                </div>

                <!-- Número de Serie -->
                <div class="flex justify-between">
                    <span class="font-medium text-gray-700">Número de Serie:</span>
                    <span class="text-gray-900">1HGCM82633A123456</span>
                </div>

                <!-- Observaciones -->
                <div class="flex flex-col">
                    <span class="font-medium text-gray-700">Observaciones:</span>
                    <p class="text-gray-900 mt-1">
                        Este vehículo tiene todas sus revisiones al día. Presenta un pequeño rayón en la puerta delantera derecha.
                    </p>
                </div>
            </div>

            <!-- Botón para Regresar -->
            <div class="mt-6 flex justify-center">
                <a href="/autos"
                   class="bg-red-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Volver a la Lista de Autos
                </a>
            </div>
        </div>
    </div>

</body>
</html>
