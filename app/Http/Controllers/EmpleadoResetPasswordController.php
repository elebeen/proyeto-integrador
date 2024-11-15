<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\CredencialEmpleado;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Empleado;
use App\Models\User;

class EmpleadoResetPasswordController extends Controller
{
    public function passwordEmail(Request $request) {
        $request->validate(['usuario' => 'required']);

        $credencial = CredencialEmpleado::where('usuario', $request->usuario)
            ->first();

        if (!$credencial) {
            return back()->withErrors(['usuario' => 'No encontramos un usuario con ese nombre.']);
        }

        $correo = Empleado::join('credencial_empleados', 'empleados.id', '=', 'credencial_empleados.empleado_id')
            ->select('empleados.correo')
            ->first()
            ->correo;

        $status = Password::broker('credenciales')->sendResetLink(
            ['email' => $correo]
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => 'Te hemos enviado un enlace para restablecer tu contraseña.'])
            : back()->withErrors(['usuario' => 'Hubo un error al enviar el enlace de restablecimiento.']);
    }

    public function passwordReset(string $token) {
        return view('empleado.reset-password', ['token' => $token]);
    }

    public function passwordUpdate(Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (CredencialEmpleado $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ]);
        
                $user->save();
        
                event(new PasswordReset($user));
            }
        );
        
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

    public function broker()
    {
        return Password::broker('credenciales_empleados');
    }
}
