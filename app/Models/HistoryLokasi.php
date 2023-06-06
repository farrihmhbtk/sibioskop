<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryLokasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
