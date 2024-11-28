<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use App\Models\Reparacion;
use App\Models\Repuesto;
use App\Models\Auto;
use App\Models\User;
use Carbon\Carbon;
use SplDoublyLinkedList;
use SplHeap;
use SplStack;



class EmpleadoController extends Controller
{
    public function index() {
        $ultimosUsuarios = User::orderBy('created_at', 'asc')
        ->take(10)
        ->get();

        $stack = new SplStack();

        foreach ($ultimosUsuarios as $usuario) {
            $stack->push($usuario);
        }

        // Extrae los usuarios del stack (LIFO) para mostrarlos en el orden esperado.
        $usuariosEnOrden = [];
        while (!$stack->isEmpty()) {
            $usuariosEnOrden[] = $stack->pop(); // Devuelve el último elemento del stack.
        }

        return view('empleado.index', compact('usuariosEnOrden'));
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
        $citasFiltradas = $query->paginate(15);

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

                return $cita1->created_at <=> $cita2->created_at;
            }
        };

        foreach ($citas as $cita) {
            $heap->insert($cita);
        }

        $citasOrdenadas = [];
        foreach ($heap as $cita) {
            $citasOrdenadas[] = $cita;
        }

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
    
    // function para la lista de  de los autos
    public function lista_de_recojo()
    {
        $mantenimientosTerminados = Mantenimiento::where('estado', true)
            ->where('auto_devuelto', false) // excluir los recogudos
            ->whereHas('auto', function ($q) {
                $q->where('auto_ingresado', true);
            })
            ->with('auto') 
            ->get();
        
        $listaEnlazada = new SplDoublyLinkedList();

        foreach ($mantenimientosTerminados as $mantenimiento) {
            $listaEnlazada->push($mantenimiento);
        }

        $autosEnCola = [];
        for ($listaEnlazada->rewind(); $listaEnlazada->valid(); $listaEnlazada->next()) {
            $autosEnCola[] = $listaEnlazada->current();
        }

        return view('empleado.cola-espera', compact('autosEnCola'));
    }

    // funcion para el auto recogido

    public function marcarComoRecogido($id)
    {
        $mantenimiento = Mantenimiento::findOrFail($id);

        $mantenimiento->update([
            'auto_devuelto' => true,
        ]);

        return redirect()->route('cola.espera')->with('success', 'Auto eliminado de la lista.');
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

    public function mostrarMantenimientoPorEmpleado(Mantenimiento $mantenimiento) {
         // Obtener el empleado asociado a la credencial autenticada
        $credencial = Auth::guard('empleado')->user();
        $empleado = $credencial?->empleado;

        if (!$empleado) {
            return redirect()
                ->route('empleado.inicio')
                ->with('error', 'No se encontró un empleado asociado a esta credencial.');
        }

        // Obtener los mantenimientos del empleado
        $mantenimientos = $empleado->mantenimientos()->paginate(15);

        // Verificar si el empleado tiene mantenimientos
        if ($mantenimientos->isEmpty()) {
            return redirect()
                ->route('empleado.inicio')
                ->with('error', 'No se encontraron mantenimientos asociados al empleado.');
        }

        return view('empleado.mis-mantenimientos', compact('mantenimientos'));
    }
}