<?php

namespace App\Livewire\Frontend;

use App\Models\Pelanggan;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Str;

class PemesananJoki extends Component
{
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

    public $rank = [
        'Warrior III' => [
            'stars' => 3,
            'harga' => 4000,
        ],
        'Warrior II' => [
            'stars' => 3,
            'harga' => 4000,
        ],
        'Warrior I' => [
            'stars' => 3,
            'harga' => 4000,
        ],
        'Elite IV' => [
            'stars' => 3,
            'harga' => 5000,
        ],
        'Elite III' => [
            'stars' => 3,
            'harga' => 5000,
        ],
        'Elite II' => [
            'stars' => 3,
            'harga' => 5000,
        ],
        'Elite I' => [
            'stars' => 3,
            'harga' => 5000,
        ],
        'Master IV' => [
            'stars' => 4,
            'harga' => 7000,
        ],
        'Master III' => [
            'stars' => 4,
            'harga' => 7000,
        ],
        'Master II' => [
            'stars' => 4,
            'harga' => 7000,
        ],
        'Master I' => [
            'stars' => 4,
            'harga' => 7000,
        ],
        'Grandmaster IV' => [
            'stars' => 5,
            'harga' => 7000,
        ],
        'Grandmaster III' => [
            'stars' => 5,
            'harga' => 7000,
        ],
        'Grandmaster II' => [
            'stars' => 5,
            'harga' => 7000,
        ],
        'Grandmaster I' => [
            'stars' => 5,
            'harga' => 7000,
        ],
        'Epic V' => [
            'stars' => 5,
            'harga' => 9000,
        ],
        'Epic IV' => [
            'stars' => 5,
            'harga' => 9000,
        ],
        'Epic III' => [
            'stars' => 5,
            'harga' => 9000,
        ],
        'Epic II' => [
            'stars' => 5,
            'harga' => 9000,
        ],
        'Epic I' => [
            'stars' => 5,
            'harga' => 9000,
        ],
        'Legend V' => [
            'stars' => 5,
            'harga' => 13000,
        ],
        'Legend IV' => [
            'stars' => 5,
            'harga' => 13000,
        ],
        'Legend III' => [
            'stars' => 5,
            'harga' => 13000,
        ],
        'Legend II' => [
            'stars' => 5,
            'harga' => 13000,
        ],
        'Legend I' => [
            'stars' => 5,
            'harga' => 13000,
        ],
        'Mythic' => [
            'stars' => 40,
            'harga' => 20000
        ],
    ];

    public $err = null;
    public $done = false;

    public function kalkulasi_harga_dan_stars($start, $target)
    {
        $keys = array_keys($this->rank);
        $startIndex = array_search($start, $keys);
        $targetIndex = array_search($target, $keys);

        if ($startIndex === false || $targetIndex === false) {
            return false;
            // return "Rank tidak ditemukan.";
        }

        if ($startIndex > $targetIndex) {
            return false;
            // return "Target rank harus lebih tinggi dari start rank.";
        }

        $totalStars = 0;
        $totalHarga = 0;

        // Iterasi dari rank start ke rank target
        for ($i = $startIndex; $i <= $targetIndex; $i++) {
            $rankName = $keys[$i];
            $stars = $this->rank[$rankName]['stars'];
            $harga = $this->rank[$rankName]['harga'];

            $totalStars += $stars;
            $totalHarga += $stars * $harga;
        }

        return [
            'total_stars' => $totalStars,
            'total_harga' => $totalHarga,
        ];
    }

    public function updatedState($value, $key)
    {
        if ($key == 'start_rank' || $key == 'target_rank') {
            $this->state['jumlah_stars'] = 0;
            $this->state['jumlah_stars_text'] = 0;
            $this->state['harga'] = 0;
            $this->state['harga_text'] = 0;

            $start = $this->state['start_rank'];
            $target = $this->state['target_rank'];

            $calc = $this->kalkulasi_harga_dan_stars($start, $target);
            if (!$calc) return;

            $this->state['jumlah_stars'] = $calc['total_stars'];
            $this->state['jumlah_stars_text'] = number_format($calc['total_stars'], 0, ',', '.') . " Stars";
            $this->state['harga'] = $calc['total_harga'];
            $this->state['harga_text'] = number_format($calc['total_harga'], 0, ',', '.');
        }
    }

    public function mount()
    {
        $this->state = $this->params;
    }

    #[Layout('frontend.master')]
    public function render()
    {
        return view('livewire.frontend.pemesanan-joki');
    }

    public function buatPesanan()
    {
        $this->validate([
            'state.nama_pelanggan' => 'required|string',
            'state.nomor_wa_pelanggan' => 'required|string',
            'state.email_pelanggan' => 'required|string',

            'state.ign' => 'required|string',
            'state.hero_request' => 'required|string',
            'state.start_rank' => 'required|string',
            'state.target_rank' => 'required|string',
            'state.jumlah_stars' => 'required|numeric|min:1',
            'state.harga' => 'required|numeric|min:1',
        ], [
            'min' => "Nilai Tidak Valid !",
        ], [
            'state.nama_pelanggan' => 'Nama Pelanggan',
            'state.nomor_wa_pelanggan' => 'Nomor Whatsapp',
            'state.email_pelanggan' => 'Email',

            'state.ign' => 'IGN',
            'state.hero_request' => 'Hero Request',
            'state.start_rank' => 'Rank Awal',
            'state.target_rank' => 'Target Rank',
            'state.jumlah_stars' => 'Jumlah Stars',
            'state.harga' => 'Harga',
        ]);

        DB::beginTransaction();
        try {
            $check = Pelanggan::where('email', '=', $this->state['email_pelanggan'])->orWhere('nomor_wa', '=', $this->state['nomor_wa_pelanggan'])->first();
            $idPelanggan = $check->id ?? null;
            $nomorPelanggan = $check->nomor_wa ?? null;
            $emailPelanggan = $check->email ?? null;
            if (!$check) {
                $createPelanggan = Pelanggan::firstOrCreate([
                    'nama_pelanggan' => $this->state['nama_pelanggan'],
                    'email' => $this->state['email_pelanggan'],
                    'nomor_wa' => $this->state['nomor_wa_pelanggan']
                ]);

                $idPelanggan = $createPelanggan->id;
                $nomorPelanggan = $createPelanggan->nomor_wa;
                $emailPelanggan = $createPelanggan->email;
            }

            if ($check && ($nomorPelanggan !== $this->state['nomor_wa_pelanggan'] || $emailPelanggan !== $this->state['email_pelanggan'])) {
                $update = Pelanggan::where('id', '=', $idPelanggan)->update([
                    'email' => $this->state['email_pelanggan'],
                    'nomor_wa' => $this->state['nomor_wa_pelanggan']
                ]);
            }

            $pesanan = Pesanan::firstOrCreate([
                'id_pelanggan' => $idPelanggan,
                'kode_pesanan' => Str::upper(Str::random(5)) . $nomorPelanggan,
                'tanggal_pesanan' => date('Y-m-d'),
                'ign' => $this->state['ign'],
                'hero_request' => $this->state['hero_request'],
                'start_rank' => $this->state['start_rank'],
                'target_rank' => $this->state['target_rank'],
                'jumlah_stars' => $this->state['jumlah_stars'],
                'harga' => $this->state['harga'],
                'status_pesanan' => false,
            ]);

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
