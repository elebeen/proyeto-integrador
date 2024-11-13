<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Empleado;
use App\Models\CredencialEmpleado;

class EmpleadoResetPasswordController extends Controller
{
    public function passwordEmail(Request $request) {
        $request->validate(['usuario' => 'required']);

        $credencialEmpleado = CredencialEmpleado::where('usuario', $request->usuario)->first();
        
        if (!$credencialEmpleado) {
            return back()->withErrors(['usuario' => 'El usuario no está registrado.']);
        }

        $email = $credencialEmpleado->empleado->email ?? null;

        if (!$email) {
            return back()->withErrors(['usuario' => 'No se encontró un correo electrónico asociado a este usuario.']);
        }

        $status = Password::sendResetLink(['email' => $email]);
        
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['usuario' => __($status)]);
    }
        public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'usuario' => ['usuario'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('usuario', 'password', 'password_confirmation', 'token'),
            function ($empleado) use ($request) {
                $empleado->forceFill([
                    'password' => Hash::make($request->password),
                    // 'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($empleado));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('empleado.index')->with('status', __($status))
                    : back()->withInput($request->only('usuario'));
    }
}
