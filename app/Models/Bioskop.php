<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bioskop extends Model
{
    use HasFactory;

    protected $guarded =['bioskopID'];

    public function cinemas()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function jadwal_films(){
        return $this->hasMany(JadwalFilm::class);
    }

}
