<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ApplicationComponent extends Component
{

    public $type;
    public $application;
    public $loggedInUserID;
    public $url;
    public $theme = 1;

    public function changeType($name){

        $this->type = $name;
        $socailUrl = Application::where('user_id', $this->loggedInUserID)->first();

        if(isset($socailUrl) && !empty( $socailUrl->$name)){
            $this->url = $socailUrl->$name;
        }else{
            $this->url = '';
        }
        // dd($socailUrl);
    }

    public function mount(){

        $selectedThemeID = Session::get('themeID');
        if(isset($selectedThemeID)){
            $this->theme = $selectedThemeID;
        }
        // dd($this->theme);

        $this->type = 'messenger';

        $this->loggedInUserID = Auth::user()->id;
        $this->application = Application::where('user_id', $this->loggedInUserID)->first();

    }
    public function render()
    {
        return view('livewire.application-component')->layout('livewire.layout.master');
    }

    public function store(){

        // dd($this->type);
        // $this->social['user_id'] = $this->loggedInUserID;

        $data['user_id'] = $this->loggedInUserID;
        $data[$this->type] = $this->url;

        if(isset($this->application)){
            $this->application->update($data);
            // $this->dispatchBrowserEvent('alertSuccess', ['title' => 'Data Updated successfully!']);
            $this->dispatchBrowserEvent('copyToClipBoard', ['type' => 'success',  'message' => 'Data created successfully!']);

        }else{
            Application::create($data);
            // $this->dispatchBrowserEvent('alertSuccess', ['title' => 'Data created successfully!']);
            $this->dispatchBrowserEvent('copyToClipBoard', ['type' => 'success',  'message' => 'Data created successfully!']);

        }

        $this->url = '';
        $this->mount();
    }
}
