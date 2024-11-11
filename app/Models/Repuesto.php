<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    protected $fillable = [
        "nombre",
        "cantidad",
    ];
    public function reparaciones() {
        return $this->belongsToMany(Reparacion::class,'reparacion_repuestos')
            ->withPivot('cantidad_usada');
    }
}
