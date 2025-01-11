<?php

namespace App\Livewire\Pesanan;

use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class MainIndex extends Component
{
    use WithPagination;
    public $search;

    protected function queryString()
    {
        return [
            'search' => [
                'as' => 'q',
                'except' => ''
            ],
        ];
    }

    protected $listeners = [
        'doDelete'
    ];

    public function render()
    {
        $data = new Pesanan();

        if ($this->search) {
            $data = $data->where(function ($q) {
                $q->where('kode_pesanan', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('ign', 'LIKE', '%' . $this->search . '%')
                    ->orWhereHas('pelanggan', function ($q1) {
                        $q1->where('nama_pelanggan', '=', $this->search)->orWhere('email', '=', $this->search)->orWhere('nomor_wa', '=', $this->search);
                    });
            });
        }

        $data = $data->paginate(5);


        return view('livewire.pesanan.main-index', [
            'data' => $data
        ]);
    }

    public function konfirmasi($id)
    {
        DB::beginTransaction();
        try {
            $check = Pesanan::where('id', '=', $id)->where('status_pesanan', '=', 0)->firstOrFail();
            $update = $check->update(['status_pesanan' => 1]);

            DB::commit();
            $this->dispatch('toast', type: "info", message: "Status Pesanan di-Konfirmasi !");
        } catch (\Throwable $th) {
            DB::rollback();
            $this->dispatch('toast', type: "error", message: "Terjadi Kesalahan ! <br> Silahkan Hubungi Administrator !");
        }
    }

    public function tolak($id)
    {
        DB::beginTransaction();
        try {
            $check = Pesanan::where('id', '=', $id)->where('status_pesanan', '=', 0)->firstOrFail();
            $update = $check->update(['status_pesanan' => 2]);

            DB::commit();
            $this->dispatch('toast', type: "warning", message: "Status Pesanan di-Tolak !");
        } catch (\Throwable $th) {
            DB::rollback();
            $this->dispatch('toast', type: "error", message: "Terjadi Kesalahan ! <br> Silahkan Hubungi Administrator !");
        }
    }

    public function batalkan($id)
    {
        DB::beginTransaction();
        try {
            $check = Pesanan::where('id', '=', $id)->where('status_pesanan', '=', 1)->firstOrFail();
            $update = $check->update(['status_pesanan' => 2]);

            DB::commit();
            $this->dispatch('toast', type: "warning", message: "Status Pesanan di-Batalkan !");
        } catch (\Throwable $th) {
            DB::rollback();
            $this->dispatch('toast', type: "error", message: "Terjadi Kesalahan ! <br> Silahkan Hubungi Administrator !");
        }
    }

    public function openPembayaran($id)
    {
        DB::beginTransaction();
        try {
            $check = Pesanan::where('id', '=', $id)->where('status_pesanan', '=', 1)->firstOrFail();
            $update = $check->update(['status_pesanan' => 3]);

            DB::commit();
            $this->dispatch('toast', type: "success", message: "Pembayaran Pesanan di-Buka !");
        } catch (\Throwable $th) {
            DB::rollback();
            $this->dispatch('toast', type: "error", message: "Terjadi Kesalahan ! <br> Silahkan Hubungi Administrator !");
        }
    }
    public function doDelete(String $id)
    {
        DB::beginTransaction();
        try {
            $data = Pesanan::where('id', '=', $id)->firstOrFail();
            $data->delete();

            DB::commit();
            $this->dispatch('toast', type: "warning", message: "Data Berhasil di-Hapus !");
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->dispatch('toast', type: "error", message: "Terjadi Kesalahan ! <br> Silahkan Hubungi Administrator !");
        }
    }
}
