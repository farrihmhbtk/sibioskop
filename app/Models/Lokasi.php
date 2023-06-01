<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'lokasiID';

    public $timestamps = false;

    public function cinemas(){
        return $this->hasMany(Cinema::class, 'lokasiID');
    }
}
