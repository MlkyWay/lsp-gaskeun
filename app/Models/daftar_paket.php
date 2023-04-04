<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\reservasi;
use App\Models\paket_wisata;

class daftar_paket extends Model
{
    use HasFactory;

    public function reservasis()
    {
        return $this->hasMany(reservasi::class);
    }

    public function paket_wisatas()
    {
        return $this->belongsTo(paket_wisata::class);
    }

}
