<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        return view("usuario.index");
    }

    public function create() {
        return view("usuario.create");
    }
    public function store(Request $request) {
        
    }
}
