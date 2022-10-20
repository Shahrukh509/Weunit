<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Livewire\Component;
use App\Models\Design;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DesignComponent extends Component
{
    use WithFileUploads;

    public $theme = 1;
    public $designDataType = 'style';
    public $design;
    public $designData;
    public $themeData;


    public $application;

    public $themeOne;
    public $tab;
    public $background;
    public $images;
    public $keyvalue;

    protected $listeners = ['refresh-me' => '$refresh'];

    public function themeStatus($status){



        $this->theme = $status;

        Session::put('themeID', $status);

        $this->emit('themeStatus', $this->theme);
        $this->emitSelf('refresh-me');
        $this->emitTo('component-to-refresh', 'refreshComponent');

        $this->render();
        // $this->dispatchBrowserEvent('reload', ['title' => 'Contact Copied!']);
        // dd($this->theme);
    }

    public function changeTab($change){

        $this->tab = $change;
        
        return $this->tab;
        // if($this->tab == 'style'){
        //     return redirect()->route('design');
        // }
        // dd($this->theme);
    }

    public function designType($type){
        $this->designDataType = $type;
    }

    public function mount(){
        // dd('hi at theme');
    
        $this->tab = 'style';
        $this->tab = 'background';
        $this->tab = 'style';
        $this->design = [];

        $this->userID = 29;
        // $this->application = Application::where('user_id', $this->userID)->first();

        $this->designData = Design::where('user_id', $this->userID)->get();
        // dd($this->designData);
        $this->themeData = Design::where('user_id', $this->userID)->where('theme', $this->theme)->first();

        $this->themeOne = Design::where('user_id', Auth::user()->id)->where('theme', 1)->first();
        $this->themeTwo = Design::where('user_id', Auth::user()->id)->where('theme', 2)->first();
        
       
     
        if(isset($this->themeData)){

          
            $this->design['about'] = $this->themeData->about;



        }

        $selectedThemeID = Session::get('themeID');

        
        if(isset($selectedThemeID)){
            $this->theme = $selectedThemeID;
        }
        // dd($this->themeData);
        // $this->designDataType;
    }

    public function render()
    {
        
       

        // $this->emit('header-component' ,'header');
        // $this->emit('footer-component' ,'footer');

        return view('livewire.design-component')->layout('livewire.layout.master');
    }


    public function store(){

        // dd($this->theme);

        if(isset($this->design['background'])){
            $image = $this->design['background']->store('public/images');
            $background_image = str_replace("public/","", $image);
            $data['background_image'] = (isset($background_image)) ? $background_image : '';
        }

        if(isset($this->design['profile'])){
            // $profile_image = $this->design['profile']->store('image');
            // $profile_image =  $this->design['profile']->move(public_path('images'), $this->design['profile']);

            $profile_image = $this->design['profile']->store('public/images');
            // $image = Image::make(Storage::get($imagePath))->resize(320,240)->encode();
            // Storage::put($imagePath,$image);
        }

        if(isset($this->design['logo'])){
            $logoImage = $this->design['logo']->store('public/images');
            $logo = str_replace("public/","", $logoImage);
        }

        if(isset($this->design['video'])){
            $video = $this->design['video']->store('videos');
        }

        // dd($this->number);

        if(isset($this->design['about'])){
            $data['about'] = $this->design['about'];
        }

        if(isset($this->design['color'])){
            $data['background_color'] = (isset($this->design['color'])) ? $this->design['color'] : '';

        }

        if(isset($profile_image)){
            $data['profile_image'] =  $profile_image;
        }

        if(isset($logo)){
            $data['logo'] =  $logo;
        }

        if(isset($video)){
            $data['video'] =  $video;
            // dd($data['video']);
        }


        $data['user_id'] = Auth::user()->id;
        $data['theme'] = $this->theme;

        // dd($data);
        $themeExist = Design::where('user_id', $this->userID)->where('theme', $this->theme)->first();
        if(isset($themeExist)){
            $themeExist->update($data);
            // dd('updated');
            // $this->dispatchBrowserEvent('alertSuccess', ['title' => 'Theme Updated successfully!']);

        }else{
            Design::create($data);
            // dd('created');
            // $this->dispatchBrowserEvent('alertSuccess', ['title' => 'Theme created successfully!']);
            // $this->dispatchBrowserEvent('alert',['type' => 'success',  'message' => 'Going Well!']);
        }

        $this->dispatchBrowserEvent('alert',['type' => 'success',  'message' => 'Theme Updated successfully!']);

        $this->mount();
        $this->emitTo('component-to-refresh', 'refreshComponent');
        // return redirect()->route('design');

    }

    public function copyText()
    {
        $this->dispatchBrowserEvent('copyToClipBoard', ['type' => 'success',  'message' => 'Contact Copied!']);
    }




}
