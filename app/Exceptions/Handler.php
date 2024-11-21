<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    // Manejo de excepciones
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        $guard = $exception->guards()[0] ?? null;

        // Define redirecciones basadas en el guard
        switch ($guard) {
            case 'empleado':
                $loginRoute = route('empleado.login');
                break;
            case 'admin':
                $loginRoute = route('admin.login');
                break;
            default:
                $loginRoute = route('login');
                break;
        }

        // Redirige al login correspondiente
        return $request->expectsJson()
            ? response()->json(['message' => 'Unauthenticated.'], 401)
            : redirect()->guest($loginRoute);
    }
}
