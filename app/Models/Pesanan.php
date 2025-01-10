<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pelanggan',
        'tanggal_pesanan',
        'ign',
        'start_rank',
        'target_rank',
        'jumlah_stars',
        'harga',
        'status_pesanan',
    ];
}
