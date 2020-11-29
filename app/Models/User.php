<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table='Jugadores';
    protected $primaryKey='id_jugadores';
    protected $fillable =[
        'nombre_jugadores','apellido_jugadores','correo_electronico','contraseña'
    ];
    protected $hidden=[
    'contraseña'
    ];
}
