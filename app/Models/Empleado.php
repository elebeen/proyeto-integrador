<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Empleado extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        "nombre",
        "apellido",
        "correo",
        "fecha_nac",
        "telefono",
    ];

    protected $hidden = ['password'];

    public function credencialEmpleado() {
        return $this->hasOne(CredencialEmpleado::class);
    }

    public function mantenimiento() {
        return $this->hasMany(Mantenimiento::class);
    }
}
