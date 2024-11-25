<x-empleado>
    <div class="w-full h-full min-h-screen flex items-center justify-center p-4">
        <table class="table-auto border-collapse border border-gray-400 w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-400 px-4 py-2">Nombre y apellido</th>
                    <th class="border border-gray-400 px-4 py-2">Correo</th>
                    <th class="border border-gray-400 px-4 py-2">Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuariosEnOrden as $usuario)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $usuario->name, $usuario->apellido }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $usuario->email }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $usuario->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-empleado>