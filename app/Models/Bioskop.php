<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bioskop extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function cinemas(): BelongsToMany
    {
        return $this->belongsToMany(Cinema::class, 'cinema_bioskop', 'cinema_id', 'bioskop_id');
    }

}
