<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temp_lokasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bioskop(){
        return $this->hasMany(bioskop::class);
    }

}
