<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ShareProfileComponent extends Component
{


    public $theme = 1;
    public $userID;
    public $themeID;

    protected $queryString = ['userID', 'themeID'];

    public function mount(){
        // dd($this->themeID);
        // dd($this->userID);
    }

    public function render()
    {
        // dd(Request()->query('userID'));
        return view('livewire.frontend.share-profile-component')->layout('livewire.frontend.master');
    }

    public function copyText()
    {
        $this->dispatchBrowserEvent('copyToClipBoard', ['type' => 'success',  'message' => 'Contact Copied!']);
    }

}
