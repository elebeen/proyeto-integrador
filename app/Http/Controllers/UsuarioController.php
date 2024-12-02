<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class UsuarioController extends Controller
{
    public function welcome() {
        return view("welcome");
    }
    public function services() {
        return view("usuario.services");
    }

    public function quienes_somos() {
        return view("usuario.quienes_somos");
    }

    public function agendar_cita() {
        if (Auth::user()->autos == null) {
            return redirect()->route('usuario.anadir-auto')
                ->with('error', 'Registre un auto para comenzar.');
        }
    
        $autos = Auto::where('user_id', Auth::user()->id)->get();
        
        return view("usuario.agendar_cita", compact('autos'));
    }

    public function guardar_cita(Request $request) {
        // dd($request->all()); 
        $validated = $request->validate([
            'motivo' => 'required|string',
            'servicio_tipo' => 'required|in:Electricidad,Mecanica,Planchado,General,Preventivo',
            'categoria' => 'required|in:normal,premium',
            'auto_id' => 'required|exists:autos,id',
        ]);
        $validated['user_id'] = Auth::user()->id;
    
        Mantenimiento::create($validated);
    
        return redirect()->route('usuario.mantenimientos')->with('success', 'Mantenimiento actualizado exitosamente.');
    }
    

    public function form_auto() {
        return view('usuario.crear-auto');
    }

    public function crear_auto(Request $request) {
        $validated = $request->validate([
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'kilometraje' => 'required|numeric',
            'color' => 'required|string',
            'placa' => 'required|regex:/^[A-Za-z0-9]{3}-[A-Za-z0-9]{3}$/|unique:autos,placa',
            'anio_fabri' => 'required|digits:4|numeric',
        ]);
    
        $validated['user_id'] = Auth::user()->id;
    

        Auto::create($validated);
    
        return redirect()->route('usuario.autos')->with('success', 'Auto registrado exitosamente');
    }
    

    public function mostrar_mantenimientos()
    {
        $mantenimientos = Mantenimiento::where('user_id', Auth::user()->id)->paginate(15);

        return view('usuario.mantenimientos', compact('mantenimientos'));
    }

    public function mostrar_autos(Auto $autos) {
        $autos = Auto::where('user_id', '=', Auth::user()->id)->paginate(15);

        return view('usuario.autos', compact('autos'));
    }

    public function edit(Request $request): View
    {
        return view('usuario.edit-profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('usuario.edit-profile')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

