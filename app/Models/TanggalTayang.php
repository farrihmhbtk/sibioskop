<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggalTayang extends Model
{
    use HasFactory;

    protected $guarded=['showDateID'];

    public $timestamps = false;

    public function jadwal_films(){
        return $this->hasMany(JadwalFilm::class);
    }
}
