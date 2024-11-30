<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function welcome() {
        return view("welcome");
    }

    public function create() {
        return view("usuario.create");
    }
    public function store(Request $request) {
        
    }
    public function services() {
        return view("usuario.services");
    }

    public function quienes_somos() {
        return view("usuario.quienes_somos");
    }

    public function agendar_cita() {
        return view("usuario.agendar_cita");
    }

    public function guardar_cita(Mantenimiento $mantenimiento, Request $request) {
        
        $validated = $request->validate([
            'motivo' => 'required|string',
            'servicio_tipo' => 'required|in:Electricidad,Mecanica,Planchado,General',
            'categoria' => 'required|in:normal,premium',
            'auto_id' => 'required|integer',
        ]);

        $mantenimiento->create($validated);

        return redirect()->route('citas.filtros')->with('success', 'Mantenimiento actualizado exitosamente.');
    }
}

