<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmpleadoLoginController extends Controller
{
    public function create()
    {
        if (Auth::guard('empleado')->check()) {
            return redirect()->route('empleado.index');
        }
        return view("empleado.login");
    }

    public function store(Request $request)
    {
        $credentials = [
            "usuario" => $request->usuario,
            "password" => $request->password,
        ];

        // Utilizar el guard "empleado" en lugar del guard predeterminado
        if (Auth::guard('empleado')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route("empleado.index"));
        } else {
            return redirect()->route('empleado.login')->withErrors([
                'login_error' => 'Credenciales incorrectas.',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('empleado')->logout();

        // Invalidar y regenerar la sesión
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('empleado.login');
    }
}