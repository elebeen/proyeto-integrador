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
}

