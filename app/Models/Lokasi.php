<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
    ];

    public $timestamps = false;

    public function cinema(){
        return $this->hasMany(Cinema::class);
    }
}
