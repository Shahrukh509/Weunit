<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;

class HeaderComponent extends Component
{

    protected $listeners = [
        'header' => '$refresh',
    ];


    public function render()
    {
        return view('livewire.layout.header-component');
    }
}
