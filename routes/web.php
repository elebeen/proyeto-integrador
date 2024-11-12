<?php

use App\Http\Controllers\EmpleadoLoginController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpleadoResetPasswordController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest')->group(function () {

    Route::get('empleado/login', [EmpleadoLoginController::class,'create']);
    
    Route::post('empleado/login', [EmpleadoLoginController::class,'store'])
        ->name('empleado.login');
    
    Route::post('empleado/forgot-password', [EmpleadoResetPasswordController::class, 'store'])
            ->name('empleado.password');
    
    Route::get('empleado/reset-password/{token}', [EmpleadoResetPasswordController::class, 'create']);
});

Route::middleware(['auth:empleado'])->group(function () {

    Route::post('empleado/logout', [EmpleadoLoginController::class,'destroy'])
        ->name('empleado.logout');

    Route::get('empleado/index',[EmpleadoController::class,'index'])
        ->name('empleado.index');

    Route::get('empleado/citas', [EmpleadoController::class,'filtros_citas'])
        ->name('citas.filtros');

    Route::get('empleado/cola-citas',[EmpleadoController::class, 'ordenar_citas_prioridad'])
        ->name('cola.citas');

    Route::get('empleado/autos', [EmpleadoController::class, 'filtros_autos'])
        ->name('autos.filtros');

    Route::get('empleado/usuarios', [EmpleadoController::class, 'filtros_usuarios'])
        ->name('usuarios.filtros');

    Route::get('empleado/citas_prioridad', [EmpleadoController::class,'ordenar_citas_prioridad'])
        ->name('citas.prioridad');

    Route::post('empleado/citas/actualizar/{mantenimiento}', [EmpleadoController::class,'actualizar_estado_cita'])
        ->name('citas.actualizar');

    Route::post('empleado/citas/ingreso/{mantenimiento}', [EmpleadoController::class,'marcar_auto_ingresado'])
        ->name('auto.ingresado');
    
    Route::post('empleado/citas/entrega/{mantenimiento}', [EmpleadoController::class,'marcar_auto_entregado'])
        ->name('auto.entregado');
});

require __DIR__.'/auth.php';


