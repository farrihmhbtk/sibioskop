<?php

namespace App\Models;

use App\Models\Lokasi;
use App\Models\Bioskop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cinema extends Model
{
    use HasFactory;

    protected $primaryKey = 'cinemaID';


    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'lokasiID');
    }

    public function bioskops()
    {
        return $this->hasMany(Bioskop::class);
    }

}
