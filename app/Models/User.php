<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    use HasFactory;

        protected $fillable = [
        'name',
        'phoneNumber',
        'email',
        'password',
    ];

    public function pesanans(){
        return $this->hasMany(Pesanan::class, 'id_user');
    }

    public function history_lokasis()
    {
        return $this->hasMany(HistoryLokasi::class);
    }
    
}
