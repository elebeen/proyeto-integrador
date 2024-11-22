<?php

use App\Http\Controllers\EmpleadoLoginController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpleadoResetPasswordController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProfileController;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

//rutas publicas
Route::get('/', [UsuarioController::class, 'welcome'])->name('usuario.welcome');
Route::get('servicios', [UsuarioController::class, 'services'])->name('usuario.servicios');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/testroute', function(){
    $name = "Mondongo";
    Mail::to('pepito@gmail.com')->send( new MyTestEmail($name));
});

Route::middleware('auth')->group(function () {
    Route::get('servicios', [UsuarioController::class, 'services'])->name('usuario.servicios');
    Route::get('welcome',  [UsuarioController::class, 'welcome'])->name('usuario.welcome');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest')->group(function () {

    Route::get('empleado/login', [EmpleadoLoginController::class,'create']);
    
    Route::post('empleado/login', [EmpleadoLoginController::class,'store'])
        ->name('empleado.login');
    
    Route::view('/empleado/forgot-password','empleado.forgot-password' )
        ->name('empleado-password.request');
         
    Route::post('/empleado/forgot-password', [EmpleadoResetPasswordController::class, 'passwordEmail'])
        ->name('empleado-password.email');

    Route::get('/reset-password/{token}', [EmpleadoResetPasswordController::class, 'passwordReset'])
        ->name('empleado-password.reset');

    Route::post('/reset-password', [EmpleadoResetPasswordController::class, 'passwordUpdate'] )
        ->name('empleado-password.update');
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

    Route::get('empleado/repuestos', [EmpleadoController::class, 'filtros_repuestos'])
        ->name('repuestos.filtros');

    Route::get('empleado/citas_prioridad', [EmpleadoController::class, 'ordenar_citas_prioridad'])
        ->name('citas.prioridad');
    
    Route::get('empleado/citas/{mantenimiento}/detalle', [EmpleadoController::class, 'mantenimientosDetalle'])
        ->name('mantenimiento.detalle');

    Route::post('empleado/citas/{mantenimiento}/editar', [EmpleadoController::class, 'editar_mantenimiento'])
        ->name('empleado.editar_mantenimiento');
});

require __DIR__.'/auth.php';


