<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaktuTayang extends Model
{
    use HasFactory;

    protected $guarde=['startTimeID'];

    public $timestamps = false;

    public function jadwal_films(){
        return $this->hasMany(JadwalFilm::class);
    }
}
