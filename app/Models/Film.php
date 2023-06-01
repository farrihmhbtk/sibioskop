<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $primaryKey = 'filmID';

    public function jadwal_films(){
        return $this->hasMany(JadwalFilm::class);
    }
}
