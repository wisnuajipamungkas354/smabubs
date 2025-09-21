<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.landing.app')]
class LandingPage extends Component
{
    public function render()
    {
        return view('livewire.landing.landing-page', ['title' => 'Beranda']);
    }
}
