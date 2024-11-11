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
        "anio_fabri",
    ];
    public function mantenimiento() {
        return $this->hasMany(Mantenimiento::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
