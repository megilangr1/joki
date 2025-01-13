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

    protected $casts = [
        'status_pesanan' => 'integer',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id');
    }


    // Accessor untuk status
    public function getStatusLabelAttribute()
    {
        return match ($this->status_pesanan) {
            0 => 'Menunggu Konfirmasi',
            1 => 'Dalam Proses Konfirmasi',
            2 => 'Pesanan di-Tolak / di-Batalkan',
            3 => 'Menunggu Pembayaran',
            4 => 'Menunggu Verifikasi Pembayaran',
            5 => 'Proses Pengerjaan',
            6 => 'Selesai',
            default => 'Status Tidak Dikenal',
        };
    }

    public function bukti()
    {
        return $this->hasMany(PesananBukti::class, 'id_pesanan', 'id');
    }
}
