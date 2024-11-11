<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use App\Http\Requests;
use Carbon\Carbon;
use App\Models\Auto;
use SplHeap;

class EmpleadoController extends Controller
{
    public function index() {
        return view("empleado.index");
    }

    public function filtros_citas(Request $request)
    {
        // Obtener la consulta base de la tabla Mantenimiento
        $query = Mantenimiento::query();

        // Filtrar por fecha de entrega hasta una fecha específica
        if ($request->has('fecha')) {
            $query->where('fecha_entrega_cliente', '<=', $request->fecha);
        }

        // Filtrar por tipo de servicio (premium)
        if ($request->filled('servicio_tipo') && $request->servicio_tipo == 'premium') {
            $query->where('servicio_tipo', 'premium');
        }

        // Filtrar por tipo de servicio (normal)
        if ($request->filled('servicio_tipo') && $request->servicio_tipo == 'normal') {
            $query->where('servicio_tipo', 'normal');
        }

        // Filtrar por estado (citas no terminadas)
        if ($request->filled('estado') && $request->estado == false) {
            $query->where('estado', false);  // Filtrar por citas que no han sido terminadas
        }

        if ($request->filled('estado') && $request->estado == true) {
            $query->where('estado', false);  // Filtrar por citas que no han sido terminadas
        }

        // Filtrar por nombre del usuario (relacionado a la tabla `users`)
        if ($request->filled('usuario')) {
            $query->whereHas('user', function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->usuario . '%');
            });
        }

        // Filtrar por placa del vehículo (relacionado a la tabla `autos`)
        if ($request->filled('placa')) {
            $query->whereHas('auto', function($q) use ($request) {
                $q->where('placa', 'like', '%' . $request->placa . '%');
            });
        }

        // Ejecutar la consulta y obtener las citas filtradas
        $citasFiltradas = $query->get();

        // Pasar las citas filtradas a la vista
        return view('empleado.citas', compact('citasFiltradas'));
    }

    /**
     * Método para ordenar las citas en un heap
     */
    public function ordenar_citas_prioridad()
    {
        // Obtener solo las citas de la tabla `mantenimientos` donde el estado sea 'false' (incompleto)
        // y donde el auto esté ingresado.
        $citas = Mantenimiento::where('estado', false)
            ->whereHas('auto', function($query) {
                $query->where('auto_ingresado', true);
            })
            ->with(['auto', 'user']) // Cargar relaciones de auto y user
            ->get();

        // Definir una clase personalizada para ordenar las citas en el heap
        $heap = new class extends SplHeap {
            protected function compare($cita1, $cita2)
            {
                // Priorizar 'premium' sobre 'normal'
                if ($cita1->servicio_tipo === 'premium' && $cita2->servicio_tipo === 'normal') {
                    return 1;
                }
                if ($cita1->servicio_tipo === 'normal' && $cita2->servicio_tipo === 'premium') {
                    return -1;
                }

                // Si ambos tienen el mismo tipo de servicio, comparar por fecha (más antiguo, más prioridad)
                return $cita1->created_at <=> $cita2->created_at;
            }
        };

        // Insertar las citas en el heap
        foreach ($citas as $cita) {
            $heap->insert($cita);
        }

        // Extraer citas en orden de prioridad
        $citasOrdenadas = [];
        foreach ($heap as $cita) {
            $citasOrdenadas[] = $cita;
        }

        // Pasar las citas ordenadas a la vista
        return view('empleado.cola-citas', compact('citasOrdenadas'));
    }

    public function filtros_autos(Request $request){
        $request = Auto::get()->all();
        return view('empleado.autos', compact('request'));
    }
    
    /**
     * Método para actualizar el estado de una cita a terminado y guardar la fecha de la reparacion
     */
    public function actualizar_estado_cita(Mantenimiento $mantenimiento, Request $request)
    {
        // Buscar la cita por su ID
        $cita = Mantenimiento::findOrFail($mantenimiento);

        // Verificar si el estado es de 'false' a 'true' (marcar como completado)
        if ($cita->estado == false && $request->estado == true) {
            // Acción por defecto: marcar como completado
            $cita->estado = true;
            $cita->reparacion_terminada = Carbon::now(); // Establecer la fecha de terminación
            $cita->save();

            // Redirigir después de completar
            return redirect()->route('empleado.editar')->with('success', 'La cita fue marcada como terminada.');
        }

        // Si el estado cambia de 'true' a 'false' (marcar como incompleto)
        if ($cita->estado == true && $request->estado == false) {
            // Pedir confirmación para cambiar el estado a incompleto
            if (!$request->has('confirmar')) {
                // Si no se ha confirmado, mostrar mensaje de confirmación
                return redirect()->route('empleado.editar', ['id' => $mantenimiento])
                    ->with('confirmar_cambio', true);
            }

            // Confirmación recibida: cambiar estado a incompleto
            $cita->estado = false;
            $cita->reparacion_terminada = null; // Restablecer la fecha de terminación
            $cita->save();

            return redirect()->route('empleado.editar')->with('success', 'La cita fue marcada como incompleta.');
        }

        // Si el estado no cambia, simplemente redirigir sin acción
        // return redirect()->route('empleado.editar');
        return response()->json($cita);
    }

    /**
     * Método para marcar el auto como ingresado al taller y actualizar la fecha de entrega del auto al taller
     */
    public function marcar_auto_ingresado(Mantenimiento $mantenimiento)
    {
        $cita = Mantenimiento::findOrFail($mantenimiento);

        $cita->auto_ingresado = true; 
        $cita->save();

        $cita->fecha_entrega_cliente = Carbon::now(); 
        $cita->save();

        // return redirect()->route('empleado.editar');
        return response()->json($cita);
    }

    // marcar cuando el auto es recogido por el cliente del taller
    public function marcar_auto_entregado(Mantenimiento $mantenimiento) 
    {
        $cita = Mantenimiento::findOrFail($mantenimiento);
        
        $cita->fecha_devol_cliente = Carbon::now();
        $cita->save();

        // return redirect()->route('empleado.editar');
        return response()->json($cita);
    }
}