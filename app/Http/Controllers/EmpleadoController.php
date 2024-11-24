<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use App\Models\Reparacion;
use App\Models\Repuesto;
use App\Models\Auto;
use App\Models\User;
use Carbon\Carbon;
use Doctrine\DBAL\Schema\View;
use SplQueue;
use SplHeap;



class EmpleadoController extends Controller
{
    public function index() {
        return view("empleado.index");
    }

    public function filtros_citas(Request $request, Mantenimiento $mantenimiento)
    {
        // Obtener la consulta base de la tabla Mantenimiento
        $query = Mantenimiento::query();

        // Filtrar por fecha de entrega hasta una fecha específica
        if ($request->has('fecha') && $request->fecha !== null) {
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
        if ($request->filled('estado') && $request->estado == 0) {
            $query->where('estado', false);  // Filtrar por citas que no han sido terminadas
        }

        if ($request->filled('estado') && $request->estado == 1) {
            $query->where('estado', true);  // Filtrar por citas que no han sido terminadas
        }

        // Filtrar por nombre del usuario (relacionado a la tabla `users`)
        if ($request->filled('usuario') && $request->usuario !== null) {
            $query->whereHas('user', function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->usuario . '%');
            });
        }

        // Filtrar por placa del vehículo (relacionado a la tabla `autos`)
        if ($request->filled('placa') && $request->placa !== null) {
            $query->whereHas('auto', function($q) use ($request) {
                $q->where('placa', 'like', '%' . $request->placa . '%');
            });
        }

        if ($request->filled('categoria') && $request->categoria !== null) {
            $query->where('categoria',$request->categoria);
        }

        // Ejecutar la consulta y obtener las citas filtradas
        $citasFiltradas = $query->get();

        // Pasar las citas filtradas a la vista
        return view('empleado.citas', compact('citasFiltradas', 'mantenimiento'));
    }

    /**
     * Método para ordenar las citas en un heap
     */
    public function ordenar_citas_prioridad(Request $request)
    {
        // Obtener solo las citas de la tabla `mantenimientos` donde el estado sea 'false' (incompleto)
        // y donde el auto esté ingresado.
        $citas = Mantenimiento::where('estado', '=',0)
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
        $query = Auto::query();

        // Filtrar por marca
        if ($request->filled('marca') && $request->marca !== null) {
            $query->where('marca', 'like', '%' . $request->marca . '%');
        }

        // Filtrar por modelo
        if ($request->filled('modelo') && $request->modelo !== null) {
            $query->where('modelo', 'like', '%' . $request->modelo . '%');
        }

        // Filtrar por color
        if ($request->filled('color') && $request->color !== null) {
            $query->where('color', 'like', '%' . $request->color . '%');
        }

        // Filtrar por placa
        if ($request->filled('placa') && $request->placa !== null) {
            $query->where('placa', 'like', '%' . $request->placa . '%');
        }

        // Filtrar por año de fabricación
        if ($request->filled('anio_fabri') && $request->anio_fabri !== null) {
            $query->where('anio_fabri','<=', $request->anio_fabri);
        }

        // Filtrar por usuario (relacionado a la tabla `users`)
        if ($request->filled('usuario') && $request->usuario !== null) {
            $query->whereHas('user', function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->usuario . '%');
            });
        }

        // Obtener los autos filtrados
        $autos = $query->get();

        // Pasar los autos filtrados a la vista
        return view('empleado.autos', compact('autos'));
    }
    
    public function filtros_usuarios(Request $request) {
        $query = User::query();

        // Filtrar por name
        if ($request->filled('name') && $request->name !== null) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        // Filtrar por apellido
        if ($request->filled('apellido') && $request->apellido !== null) {
            $query->where('apellido','like','%' . $request->apellido . '%');
        }
        
        $users = $query->get();

        $users = $query->get();

        // Calcular la edad para cada usuario
        $usersConEdad = $users->map(function ($user) {
            $user->edad = Carbon::parse($user->fecha_nac)->age; // Calcula la edad
            return $user;
        });

        // Ordenar por edad (ascendente o descendente)
        if ($request->filled('orden') && in_array($request->orden, ['asc', 'desc'])) {
            $usersConEdad = $request->orden === 'asc'
                ? $usersConEdad->sortBy('edad')
                : $usersConEdad->sortByDesc('edad');
        }

        // Asegurarse de devolver los índices ordenados correctamente
        $usersOrdenados = $usersConEdad->values();
        // Pasar los datos a la vista
        return view('empleado.usuarios', compact('usersOrdenados'));
    }

    public function filtros_repuestos(Request $request) {
        $query = Repuesto::query();

        // Filtrar por nombre
        if ($request->filled('nombre') && $request->nombre !== null) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }

        if ($request->filled('stock_mayor') && $request->stock_mayor !== null) {
            $query->where('stock', '>=', $request->stock_mayor);
        }
    
        // Filtrar por stock menor que el valor ingresado
        if ($request->filled('stock_menor') && $request->stock_menor !== null) {
            $query->where('stock', '=<', $request->stock_menor);
        }
    
        // Obtener los repuestos filtrados
        $repuestos = $query->get();
        
        return view('empleado.repuestos', compact('repuestos'));
    }

    public function mantenimientosDetalle(Mantenimiento $mantenimiento)
    {
        // No necesitas buscarlo de nuevo, Laravel ya lo ha cargado.
        $mantenimiento->load('reparaciones.repuestos');
        return view('empleado.detalle-cita', compact('mantenimiento'));
    }

    public function editar_mantenimiento(Mantenimiento $mantenimiento, Request $request) {
        
        $validated = $request->validate([
            'auto_ingresado' => 'required|boolean',
            'fecha_entrega_cliente' => 'date|nullable',
            'fecha_devol_cliente' => 'date|nullable',
            'estado' => 'required|boolean',
            'reparacion_terminada' => 'date|nullable',
        ]);

        $mantenimiento->update($validated);

        return redirect()->route('citas.filtros')->with('success', 'Mantenimiento actualizado exitosamente.');
    }
    
    // funcion de filtrar auto
    public function filtrarAuto(Request $request)
    {
        $query = Mantenimiento::query();

        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        $query->whereHas('auto', function ($q) {
            $q->where('auto_ingresado', true);
        });

        $mantenimientosFiltrados = $query->with('auto')->get();

        return view('empleado.mantenimientos', compact('mantenimientosFiltrados'));
    }
    
    // function para la cola de espera de los autos
    public function colaEspera(){
        $mantenimientosTerminados = Mantenimiento::where('estado', true)
            ->where('auto_devuelto', false) // excluir los recogidos
            ->whereHas('auto', function ($q) {
            $q->where('auto_ingresado', true);
        })
            ->with('auto')
            ->get();
        
        $cola = new SplQueue();

        foreach ($mantenimientosTerminados as $mantenimiento) {
            $cola->enqueue($mantenimiento);
        }

    
        $autosEnCola = [];
        while (!$cola->isEmpty()) {
            $autosEnCola[] = $cola->dequeue();
        }

        return view('empleado.cola-espera', compact('autosEnCola'));
    }

    // funcion para el auto recogido

    public function marcarComoRecogido(Mantenimiento $mantenimiento){
        $nuevoEstado = !$mantenimiento->auto_devuelto;

        $mantenimiento->update([
            ['estado' => $nuevoEstado]
        ]);
        return redirect()->route('cola.espera')->with('success', 'Auto recogido exitosamente.');
    }

    public function reparacionFormulario(Mantenimiento $mantenimiento)
    {
        $repuestos = Repuesto::all();

        // Retornar la vista con los datos necesarios
        return view('reparaciones.formulario', compact('mantenimiento', 'repuestos'));
    }    

    public function agregarReparacion(Mantenimiento $mantenimiento, Request $request) {
        $request->validate([
            'descripcion' => 'required|text',
            'repuestos' => 'required|array', // Un array con los IDs de los repuestos
            'repuestos.*.id' => 'required|exists:repuestos,id', // Validar que existen
            'repuestos.*.cantidad_usada' => 'required|integer|min:1', // Validar cantidad positiva
        ]);
        
        $reparacion = $mantenimiento->reparaciones()->create([
            'descripcion' => $request->input('descripcion'),
        ]);

        foreach ($request->input('repuestos') as $repuesto) {
            $reparacion->repuestos()->attach($repuesto['id'], [
                'cantidad_usada' => $repuesto['cantidad_usada'],
            ]);
        }

        return redirect()->back()->with('success', 'Reparación agregada exitosamente.');
    }
}