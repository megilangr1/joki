<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PemesananJoki extends Component
{
    public $tier = [
        'Warior I',
        'Warior II',
        'Warior III',
        'Warior III',
        'Elite IV',
        'Elite III',
        'Elite II',
        'Elite I',
        'Master IV',
        'Master III',
        'Master II',
        'Master I',
        'Epic IV',
        'Epic III',
        'Epic II',
        'Epic I',
        'Legend IV',
        'Legend III',
        'Legend II',
        'Legend I',
        'Mythic',
        'Honor',
        'Glory',
        'Immortal',
    ];

    #[Layout('frontend.master')]
    public function render()
    {
        return view('livewire.frontend.pemesanan-joki');
    }
}
