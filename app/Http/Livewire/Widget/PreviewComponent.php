<?php

namespace App\Http\Livewire\Widget;

use App\Models\Application;
use App\Models\Design;
use App\Models\Personal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PreviewComponent extends Component
{

    public $theme;

    public $userID;

    // Model Var
    public $application;
    public $personal;

    public $designData;
    public $themeData;
    public $themeOne;
    public $themeTwo;
    public $designComponent = true;



    protected $listeners = ['themeStatus', 'refreshComponent' => '$refresh'];

    public function themeStatus($status){
        $this->theme = $status;
        $this->designComponent = true;
        // $this->dispatchBrowserEvent('reload', ['title' => 'Contact Copied!']);

    }

    public function mount(){
        $this->userID = Auth::user()->id;
        // $this->application = Application::where('user_id', $this->userID)->first();
        // $this->personal = Personal::where('user_id', $this->userID)->first();

        $this->designData = Design::where('user_id', $this->userID)->get();
        $this->themeData = Design::where('user_id', $this->userID)->where('theme', $this->theme)->first();

        $this->themeOne = Design::where('user_id', Auth::user()->id)->where('theme', 1)->first();
        $this->themeTwo = Design::where('user_id', Auth::user()->id)->where('theme', 2)->first();
    }

    public function render()
    {
        return view('livewire.widget.preview-component');
    }

    public function copyText()
    {
        $this->dispatchBrowserEvent('copyToClipBoard', ['type' => 'success',  'message' => 'Contact Copied!']);
    }

}
