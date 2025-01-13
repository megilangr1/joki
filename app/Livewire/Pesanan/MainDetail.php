<?php

namespace App\Livewire\Pesanan;

use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MainDetail extends Component
{
    public ?Pesanan $pesanan;

    public $state = [];
    public $params = [
        'nama_pelanggan' => null,
        'nomor_wa_pelanggan' => null,
        'email_pelanggan' => null,

        'id_pelanggan' => null,
        'tanggal_pesanan' => null,

        'ign' => null,
        'hero_request' => null,
        'start_rank' => 'Warrior III',
        'target_rank' => 'Warrior III',
        'jumlah_stars' => 0,
        'jumlah_stars_text' => 0,
        'harga' => 0,
        'harga_text' => 0,
    ];

    public function mount($kode)
    {
        $this->state = $this->params;
        try {
            $pesanan = Pesanan::with('bukti')->where('kode_pesanan', '=', $kode)->firstOrFail();
            $this->pesanan = $pesanan;
            $this->state = [
                'nama_pelanggan' => $pesanan->pelanggan->nama_pelanggan,
                'nomor_wa_pelanggan' => $pesanan->pelanggan->nomor_wa,
                'email_pelanggan' => $pesanan->pelanggan->email,

                'tanggal_pesanan' => $pesanan->tanggal_pesanan,
                'ign' => $pesanan->ign,
                'hero_request' => $pesanan->hero_request,
                'start_rank' => $pesanan->start_rank,
                'target_rank' => $pesanan->target_rank,
                'jumlah_stars' => $pesanan->jumlah_stars,
                'jumlah_stars_text' => number_format($pesanan->jumlah_stars, 0, ',', '.'),
                'harga' => $pesanan->harga,
                'harga_text' => number_format($pesanan->harga, 0, ',', '.'),
            ];
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.pesanan.main-detail');
    }

    public function terima()
    {
        DB::beginTransaction();
        try {
            $update = $this->pesanan->update([
                'status_pesanan' => 5,
            ]);

            DB::commit();
            $this->dispatch('toast', type: "info", message: "Status Pesanan & Pembayaran di-Konfirmasi !");
        } catch (\Throwable $th) {
            DB::rollback();
            $this->dispatch('toast', type: "error", message: "Terjadi Kesalahan ! <br> Silahkan Hubungi Administrator !");
        }
    }

    public function tolak()
    {
        DB::beginTransaction();
        try {
            $update = $this->pesanan->update([
                'status_pesanan' => 3,
            ]);

            $this->pesanan->bukti()->delete();

            DB::commit();
            $this->dispatch('toast', type: "warning", message: "Status Pesanan & Pembayaran di-Tolak, Membuka Kembali Pembayaran !");
        } catch (\Throwable $th) {
            DB::rollback();
            $this->dispatch('toast', type: "error", message: "Terjadi Kesalahan ! <br> Silahkan Hubungi Administrator !");
        }
    }
}
