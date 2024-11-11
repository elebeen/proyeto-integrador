<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    protected $fillable = [
        "descripcion",
    ];
    public function repuestos() {
        return $this->belongsToMany(Repuesto::class, 'reparacion_repuestos')
            ->withPivot('cantidad_usada');
    }

    public function mantenimiento() {
        return $this->belongsTo(Mantenimiento::class);
    }
}
