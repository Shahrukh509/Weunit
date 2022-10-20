<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HomeComponent extends Component
{

    public $theme = 1;

    public function mount(){
        $selectedThemeID = Session::get('themeID');
        if(isset($selectedThemeID)){
            $this->theme = $selectedThemeID;
        }
    }

    public function render()
    {
        // dd('hi');
        return view('livewire.home-component')->layout('livewire.layout.master');
    }
}
