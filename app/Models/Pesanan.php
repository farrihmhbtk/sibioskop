<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Pesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'orderNumber';

    public $timestamps = false;

    public function kursis(): BelongsToMany
    {
        return $this->belongsToMany(Kursi::class, 'kursi_pesanans', 'seatID', 'orderNumber');
    }

    public function jadwal_films()
    {
        return $this->belongsTo(JadwalFilm::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
