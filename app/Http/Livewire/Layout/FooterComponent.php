<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;

class FooterComponent extends Component
{

    // protected $listeners = [
    //     'footer' => '$refresh',
    // ];



    public function render()
    {
        dd('footer');
        return view('livewire.layout.footer-component');
    }
}
