<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Empleado extends Model
{
    use HasRoles;
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
        return $this->belongsTo(CredencialEmpleado::class);
    }
}
