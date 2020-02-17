<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class muridAuthDB extends Authenticatable
{
    use Notifiable;
    protected $guard = 'murid';
    protected $primaryKey = 'id_murid';
    protected $table = 'murid';
    protected $fillable = [
        'nama_murid', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
