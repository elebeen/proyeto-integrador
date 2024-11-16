<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    // Campos permitidos para la asignación masiva
    protected $fillable = [
        'motivo',
        'auto_ingresado',
        'fecha_entrega_cliente',
        'fecha_devol_cliente',
        'estado',
    ];

    // Definir relaciones
    public function auto()
    {
        return $this->belongsTo(Auto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reparacion()
    {
        return $this->hasMany(Reparacion::class);
    }

    public function empleado()
    {
        return $this->hasMany(Empleado::class);
    }
}
