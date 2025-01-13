<?php

namespace App\Livewire\Frontend;

use App\Models\Pesanan;
use App\Models\PesananBukti;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithFileUploads;

class PembayaranJoki extends Component
{
    use WithFileUploads;

    #[Locked]
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
        'bukti_pembayaran' => []
    ];

    public $done = false;
    public $err = false;

    public function mount($kode)
    {
        DB::beginTransaction();
        try {
            $pesanan = Pesanan::with([
                'pelanggan'
            ])->whereHas('pelanggan')->where('kode_pesanan', '=', $kode)->where('status_pesanan', '=', 3)->firstOrFail();
            $this->pesanan = $pesanan;
            $this->state = $this->params;

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
                'bukti_pembayaran' => []
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            abort(404);
        }
    }

    #[Layout('frontend.master')]
    public function render()
    {
        return view('livewire.frontend.pembayaran-joki');
    }


    public function buatPesanan()
    {
        $this->validate([
            'state.bukti_pembayaran' => 'required|array',
            'state.bukti_pembayaran.*' => "required|image|max:3072"
        ], [
            'min' => "Nilai Tidak Valid !",
        ], [
            'state.bukti_pembayaran' => 'File Bukti',
            'state.bukti_pembayaran.*' => 'File Bukti',
        ]);

        DB::beginTransaction();
        try {
            $pesanan = Pesanan::with([
                'pelanggan'
            ])->whereHas('pelanggan')->where('id', '=', $this->pesanan->id)->where('status_pesanan', '=', 3)->firstOrFail();

            $insertData = [];
            foreach ($this->state['bukti_pembayaran'] as $key => $value) {
                $mimes = $value->getClientOriginalExtension();
                $filename = $pesanan->kode_pesanan . '-' . date('mdY') . rand(100, 999) . '.' . $mimes;
                $storage_disk_file = 'public-path';
                $storage_folder_file = 'bukti-pembayaran';
                $storage_path_file = $storage_disk_file . '/' . $storage_folder_file . '/' . $filename;


                $insertData['buktiPembayaran'][] = [
                    'id_pesanan' => $pesanan->id,
                    'filename' => $filename,
                    'storage_disk_file' => $storage_disk_file,
                    'storage_folder_file' => $storage_folder_file,
                    'storage_path_file' => $storage_path_file,
                    'file' => $value
                ];
            }

            $update = $pesanan->update(['status_pesanan' => 4]);

            foreach ($insertData['buktiPembayaran'] as $key => $value) {
                $insert = $value;
                unset($insert['file']);
                $buktiPembayaran = PesananBukti::create($insert);

                $uploadFile = $value['file']->storeAs($value['storage_folder_file'], $value['filename'], $value['storage_disk_file']);
            }


            DB::commit();
            $this->reset('state');
            $this->state = $this->params;
            $this->done = true;
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->err = "Terjadi Kesalahan ! Silahkan Coba Lagi Dalam Beberapa Saat !";
            dd($th);
        }
    }
}
