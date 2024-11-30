<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    // Campos permitidos para la asignación masiva
    protected $fillable = [
        'reparacion_terminada',
        'fecha_entrega_cliente',
        'fecha_devol_cliente',
        'auto_ingresado',
        'estado',
        'auto_devuelto',
    ];

    protected $casts = [
        'fecha_entrega_cliente' => 'datetime',
        'reparacion_terminada' => 'datetime',
        'fecha_devol_cliente' => 'datetime',
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

    public function reparaciones()
    {
        return $this->hasMany(Reparacion::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
