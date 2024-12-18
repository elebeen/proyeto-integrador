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
Route::get('/', [UsuarioController::class, 'welcome'])
    ->name('usuario.welcome');

Route::get('servicios', [UsuarioController::class, 'services'])
    ->name('usuario.servicios');

Route::get('quienes_somos', [UsuarioController::class, 'quienes_somos'])
    ->name('usuario.quienes_somos');

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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('welcome',  [UsuarioController::class, 'welcome'])
        ->name('usuario.welcome');

    Route::get('servicios', [UsuarioController::class, 'services'])
        ->name('usuario.servicios');
    
    Route::post('crear-cita', [UsuarioController::class, 'guardar_cita'])
        ->name('usuario.crear-cita');

    Route::get('agendar-cita', [UsuarioController::class, 'agendar_cita'])
        ->name('usuario.cita-formulario');

    Route::get('añadir-auto',[UsuarioController::class, 'form_auto'])
        ->name('usuario.anadir-auto');

    Route::post('crear-auto',[UsuarioController::class, 'crear_auto'])
        ->name('usuario.crear-auto');

    Route::get('mantenimientos', [UsuarioController::class, 'mostrar_mantenimientos'])
        ->name('usuario.mantenimientos');

    Route::get('autos', [UsuarioController::class, 'mostrar_autos'])
        ->name('usuario.autos');

    Route::get('/editar-perfil', [UsuarioController::class, 'edit'])
        ->name('usuario.editar');
    
    Route::patch('/editar-perfil', [UsuarioController::class, 'update'])
        ->name('usuario.actualizar');

    Route::delete('/editar-perfil', [UsuarioController::class, 'destroy'])
        ->name('usuario.eliminar');

    Route::get('/mantenimiento-detalle/{mantenimiento}', [UsuarioController::class, 'mantenimiento_detalle'])
        ->name('usuario.mantenimiento-detalle');

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

    Route::get('empleado/cola-de-espera', [EmpleadoController::class, 'lista_de_recojo'])
        ->name('cola.espera');
    
    Route::post('empleado/cola-espera/{id}/recogido', [EmpleadoController::class, 'marcarComoRecogido'])
        ->name('cola.recogido');

    Route::post('empleado/citas/{mantenimiento}/reparacion', [EmpleadoController::class, 'agregarReparacion'])
        ->name('mantenimiento.reparaciones');

    Route::get('/mantenimiento/citas/{mantenimiento}/formulario-reparacion', [EmpleadoController::class, 'reparacionFormulario'])
        ->name('reparacion.formulario');

    Route::get('/empleado/mis_reparaciones', [EmpleadoController::class, 'mostrarMantenimientoPorEmpleado'])
        ->name('mantenimiento.empleado');

    Route::post('empleado/cita/tomar-mantenimiento', [EmpleadoController::class, 'tomar_mantenimiento'])
        ->name('tomar-mantenimiento');
    
});

require __DIR__.'/auth.php';


