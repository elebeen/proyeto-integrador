<x-usuario>
    <div class="flex items-center justify-center" style="background-image: url('{{ asset('images/old-caar.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="w-full my-12">
                <section class="dark:bg-gray-900 bg-white rounded bg-opacity-60">
                    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                        <h2 class="mb-4 text-3xl font-bold text-gray-900">Agendar Cita</h2>
                        <form action="{{ route('usuario.crear-cita') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div>
                                    <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900">Categoría</label>
                                    <select id="categoria" name="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                        <option value="" disabled {{ empty($categoria) ? 'selected' : '' }}>Selecciona una categoría</option>
                                        <option value="Electricidad" {{ $categoria == 'Electricidad' ? 'selected' : '' }}>Electricidad</option>
                                        <option value="Mecanica" {{ $categoria == 'Mecanica' ? 'selected' : '' }}>Mecanica</option>
                                        <option value="Planchado" {{ $categoria == 'Planchado' ? 'selected' : '' }}>Planchado</option>
                                        <option value="General" {{ $categoria == 'General' ? 'selected' : '' }}>General</option>
                                        <option value="Preventivo" {{ $categoria == 'Preventivo' ? 'selected' : '' }}>Preventivo</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="auto" class="block mb-2 text-sm font-medium text-gray-900">Auto</label>
                                    <select name="auto_id" id="auto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                        <option value="">Selecciona uno de tus autos</option>
                                        @foreach ($autos as $auto)
                                            <option value="{{ $auto->id }}">{{ $auto->marca }} {{ $auto->modelo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="servicio_tipo" class="block mb-2 text-sm font-medium text-gray-900">Tipo de Servicio</label>
                                    <select id="servicio_tipo" name="servicio_tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                        <option selected="">Selecciona el tipo de servicio</option>
                                        <option value="normal">Normal</option>
                                        <option value="premium">Premium</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="motivo" class="block mb-2 text-sm font-medium text-gray-900">Descripción del problema</label>
                                    <textarea id="motivo" name="motivo" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Descripción del problema"></textarea>
                                </div>
                            </div>
                            <div class="col-span-2 flex justify-center">
                                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 mr-2 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                                    Agendar Cita
                                </button>
                                <a href="{{ route('usuario.welcome') }}" class="inline-flex items-center px-5 py-2.5 mt-4 ml-2 sm:mt-6 text-sm font-medium text-center bg-gray-300 text-gray-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-gray-400">Regresar</a>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const autoSelect = document.getElementById('auto'); // Selecciona el elemento con ID "auto"
    
            autoSelect.addEventListener('click', function () {
                // Convertir las opciones en un array y mostrarlo en la consola
                const optionsArray = Array.from(autoSelect.options);
                console.log(optionsArray); // Muestra todo el array de opciones
    
                // Verificar si hay opciones distintas a la predeterminada
                const hasOptions = optionsArray.some(option => option.value !== "");
    
                if (!hasOptions) {
                    alert("No tiene autos registrados. Será redirigido a la página para registrar un auto.");
                    
                    // Redirigir a la página de registrar autos
                    window.location.href = "{{ route('usuario.anadir-auto') }}";
                }
            });
        });
    </script>
</x-usuario>