<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function welcome() {
        return view("welcome");
    }

    public function create() {
        return view("usuario.create");
    }
    public function services() {
        return view("usuario.services");
    }

    public function quienes_somos() {
        return view("usuario.quienes_somos");
    }

    public function agendar_cita(Auto $autos) {
        $autos = Auto::get()
            ->where('usuario_id', '=', Auth::user()->id)
            ->all();
        
        return view("usuario.agendar_cita", compact('autos'));
    }

    public function guardar_cita(Mantenimiento $mantenimiento, Request $request) {
        
        $validated = $request->validate([
            'motivo' => 'required|string',
            'servicio_tipo' => 'required|in:Electricidad,Mecanica,Planchado,General',
            'categoria' => 'required|in:normal,premium',
            'auto_id' => 'required|integer',
        ]);

        $mantenimiento->create($validated);

        return redirect()->route('usuario.mantenimientos')->with('success', 'Mantenimiento actualizado exitosamente.');
    }

    public function form_auto() {
        return view('usuario.crear-auto');
    }

    public function crear_auto(Auto $auto, Request $request) {
        $validated = $request->validate([
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'kilometraje' => 'required|number',
            'color' => 'required|',
            'placa' => 'required|unique',
            'anio_fabri' => 'required|unique',
            'user_id' => 'required|unique',
        ]);

        $auto->create($validated);

        return redirect()->route('usuario.autos')->with('succes', 'Auto registrado exitosamente');
    }

    public function mostrar_mantenimientos(Mantenimiento $mantenimientos) {
        $mantenimientos = Mantenimiento::get()
            ->where('usuario_id', '=', Auth::user()->id)
            ->all();

        return view('usuario.mantenimientos', compact(',mantenimientos'));
    }

    public function mostrar_autos(Auto $autos) {
        $autos = Auto::get()
            ->where('usuario_id', '=', Auth::user()->id)
            ->all();

        return view('usuario.autos', compact('autos'));
    }
}

