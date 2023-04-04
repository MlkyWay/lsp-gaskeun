<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pelanggan;
use App\Models\daftar_paket;

class reservasi extends Model
{
    use HasFactory;

    public function pelanggans()
    {
        return $this->belongsTo(pelanggan::class);
    }

    public function daftar_pakets()
    {
        return $this->belongsTo(daftar_paket::class, 'paket_daftar_id', 'id');
    }
}
