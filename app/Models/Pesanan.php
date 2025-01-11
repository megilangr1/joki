<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pelanggan',
        'kode_pesanan',
        'tanggal_pesanan',
        'ign',
        'hero_request',
        'start_rank',
        'target_rank',
        'jumlah_stars',
        'harga',
        'status_pesanan',
    ];
}
