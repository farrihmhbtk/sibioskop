<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bioskop extends Model
{
    use HasFactory;

    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'cityID');
    }

    public function temp_lokasi(){
        return $this->belongsTo(temp_lokasi::class);
    }
}
