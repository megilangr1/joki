<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

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
        'start_rank' => null,
        'target_rank' => null,
        'jumlah_stars' => null,
        'harga' => null,
        'status_pesanan' => null,
    ];

    public $rank = [
        'Warrior III' => [
            'stars' => 3,
            'harga' => 10000,
        ],
        'Warrior II' => [
            'stars' => 3,
            'harga' => 10000,
        ],
        'Warrior I' => [
            'stars' => 3,
            'harga' => 10000,
        ],
        'Elite IV' => [
            'stars' => 3,
            'harga' => 10000,
        ],
        'Elite III' => [
            'stars' => 3,
            'harga' => 10000,
        ],
        'Elite II' => [
            'stars' => 3,
            'harga' => 10000,
        ],
        'Elite I' => [
            'stars' => 3,
            'harga' => 10000,
        ],
        'Master IV' => [
            'stars' => 4,
            'harga' => 10000,
        ],
        'Master III' => [
            'stars' => 4,
            'harga' => 10000,
        ],
        'Master II' => [
            'stars' => 4,
            'harga' => 10000,
        ],
        'Master I' => [
            'stars' => 4,
            'harga' => 10000,
        ],
        'Grandmaster IV' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Grandmaster III' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Grandmaster II' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Grandmaster I' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Epic V' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Epic IV' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Epic III' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Epic II' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Epic I' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Legend V' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Legend IV' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Legend III' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Legend II' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Legend I' => [
            'stars' => 5,
            'harga' => 10000,
        ],
        'Mythic' => 0,
    ];

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
        dd($this->state);
    }
}
