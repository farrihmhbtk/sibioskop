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

    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'cityID');
    }

    public function bioskops(): BelongsToMany
    {
        return $this->belongsToMany(Bioskop::class);

        $bioskop = Bioskop::find(1);
        $bioskop->cinemas()->attach(1);
    }

    

    // public function temp_lokasi(){
    //     return $this->belongsTo(temp_lokasi::class);
    // }
}
