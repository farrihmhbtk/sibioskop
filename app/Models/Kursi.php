<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Kursi extends Model
{
    use HasFactory;

    protected $primaryKey = 'seatID';

    public $timestamps = false;

    public function pesanans(): BelongsToMany
    {
        return $this->belongsToMany(Pesanan::class, 'kursi_pesanans', 'seatID', 'orderNumber');
    }

    
}
