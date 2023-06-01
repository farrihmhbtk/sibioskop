<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $fillable=['studioID'];

    public $timestamps = false;

    public function jadwal_films()
    {
        return $this->hasMany(JadwalFilm::class);
    }
}
