<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;
use SplHeap;

class MantenimientoController extends Controller
{
    /**
     * Muestra una lista de todos los registros de mantenimiento.
     */
    public function index()
    {
        $maintenances = Mantenimiento::all();
        return response()->json($maintenances);
    }

    /**
     * Muestra un registro específico de mantenimiento.
     */
    public function show($id)
    {
        $maintenance = Mantenimiento::find($id);

        if (!$maintenance) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        return response()->json($maintenance);
    }

    /**
     * Almacena un nuevo registro de mantenimiento.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'motivo' => 'required|string|max:255',
            'fecha_entrega' => 'required|date',
            'fecha_devol' => 'nullable|date',
            'repair_id' => 'nullable|exists:repairs,id',
            'estado' => 'boolean',
        ]);

        $maintenance = Mantenimiento::create($validatedData);

        return response()->json($maintenance, 201);
    }

    /**
     * Actualiza un registro de mantenimiento específico.
     */
    public function update(Request $request, $id)
    {
        $maintenance = Mantenimiento::find($id);

        if (!$maintenance) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'motivo' => 'required|string|max:255',
            'fecha_entrega' => 'required|date',
            'fecha_devol' => 'nullable|date',
            'repair_id' => 'nullable|exists:repairs,id',
            'estado' => 'boolean',
        ]);

        $maintenance->update($validatedData);

        return response()->json($maintenance);
    }

    /**
     * Elimina un registro de mantenimiento específico.
     */

    public function destroy($id)
    {
        $maintenance = Mantenimiento::find($id);

        if (!$maintenance) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        $maintenance->delete();

        return response()->json(['message' => 'Registro eliminado exitosamente']);
    }
}
