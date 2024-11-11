<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;

class CredencialEmpleado extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;

    protected $fillable = [
        'usuario',
        'password',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
