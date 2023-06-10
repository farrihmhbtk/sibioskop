<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalFilm extends Model
{
    use HasFactory;

    protected $guarded=['showID'];

    public $timestamps = false;

    public function waktu_tayangs(){
        return $this->belongsTo(WaktuTayang::class);
    }

    public function tanggal_tayangs(){
        return $this->belongsTo(TanggalTayang::class);
    }

    public function films(){
        return $this->belongsTo(Film::class);
    }

    public function bioskops(){
        return $this->belongsTo(Bioskop::class);
    }

    public function studios(){
        return $this->belongsTo(Studio::class);
    }

    public function pesanans(){
        return $this->hasMany(Pesanan::class);
    }


}
