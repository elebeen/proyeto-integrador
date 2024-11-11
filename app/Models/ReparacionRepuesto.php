<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReparacionRepuesto extends Model
{
    protected $fillable = [
        "cantidad_usada",
    ];

    public function reparacion()
    {
        return $this->belongsTo(Reparacion::class, 'reparacion_id');
    }

    public function repuesto()
    {
        return $this->belongsTo(Repuesto::class, 'repuesto_id');
    }
}
