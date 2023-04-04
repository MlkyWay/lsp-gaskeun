<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\daftar_paket;

class paket_wisata extends Model
{
    use HasFactory;

    public function daftar_pakets()
    {
        return $this->hasMany(daftar_paket::class);
    }
}
