<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $fillable = [
        "marca",
        "modelo",
        "kilometraje",
        "color",
        "placa",
        "anio_fabri",
        "user_id",  // Asegúrate de que 'user_id' esté también en tu base de datos
    ];

    // Deshabilitar las columnas timestamps
    public $timestamps = false;

    public function mantenimiento() {
        return $this->hasMany(Mantenimiento::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
