<?php

namespace App\Models;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
// use Illuminate\Database\Eloquent\Model;

class CredencialEmpleado extends Authenticatable implements CanResetPassword
{
    use Notifiable;
    use HasRoles;
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
