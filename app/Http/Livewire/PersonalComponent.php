<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Personal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PersonalComponent extends Component
{

    public $tab;
    public $private;
    public $business;

    public $loggedInUserID;
    public $personal;

    public $theme = 1;

    public function mount(){

        $selectedThemeID = Session::get('themeID');
        if(isset($selectedThemeID)){
            $this->theme = $selectedThemeID;
        }
        // dd($this->theme);

        $this->loggedInUserID = Auth::user()->id;
        $this->personal = Personal::where('user_id', $this->loggedInUserID)->first();

        if(isset($this->personal)){

            $this->tab = 'business';
            if($this->personal->type == 'private'){
                $this->business = [];
                $this->private = $this->personal;
                $this->tab = 'private';
            }else{
                $this->private = [];
                $this->business = $this->personal;
                $this->tab = 'business';
            }
        }
        // dd($this->tab);
        $this->emitTo('component-to-refresh', 'refreshComponent');

        $this->tab = 'private';
    }

    public function render()
    {
        // dd('okk');
        return view('livewire.personal-component')->layout('livewire.layout.master');
    }

    protected $rules = [
        'private.title' => 'nullable',
        'private.first_name' => 'nullable',
        'private.family_name' => 'nullable',
        'private.birthday' => 'nullable',
        'private.street' => 'nullable',
        'private.postal_code' => 'nullable',
        'private.city' => 'nullable',
        'private.country' => 'nullable',
        'private.phone_one' => 'nullable',
        'private.phone_two' => 'nullable',
        'private.mobile' => 'nullable',
        'private.fax' => 'nullable',
        'private.email_one' => 'nullable',
        'private.email_two' => 'nullable',
        'private.website_one' => 'nullable',
        'private.website_two' => 'nullable',
        'private.website_three' => 'nullable',

        'business.title' => 'nullable',
        'business.first_name' => 'nullable',
        'business.family_name' => 'nullable',
        'business.company' => 'nullable',
        'business.position' => 'nullable',
        'business.birthday' => 'nullable',
        'business.street' => 'nullable',
        'business.postal_code' => 'nullable',
        'business.city' => 'nullable',
        'business.country' => 'nullable',
        'business.phone_one' => 'nullable',
        'business.phone_two' => 'nullable',
        'business.mobile' => 'nullable',
        'business.fax' => 'nullable',
        'business.email_one' => 'nullable',
        'business.email_two' => 'nullable',
        'business.website_one' => 'nullable',
        'business.website_two' => 'nullable',
        'business.website_three' => 'nullable',
    ];

    public function store(){

        // $personalData = Personal::where('user_id', $this->loggedInUserID)->first();
        // $this->validate();


        if($this->tab == 'private'){
            $this->private['user_id'] =$this->loggedInUserID ;
            $this->private['type'] = 'private';
            $this->private['company'] = null;
            $this->private['position'] = null;
            $data = $this->private;
        }else{

            $this->business['user_id'] = $this->loggedInUserID ;
            $this->business['type'] = 'business';
            $data = $this->business;
        }

        // dd($data);

        if(isset($this->personal)){
        // dd($data);

            Personal::where('id', $this->personal->id)->update([
                'type' => ($this->tab == 'private') ? 'private' : 'business',
                'title' => ($this->tab == 'private') ? $this->private['title'] : $this->business['title'],
                'first_name' => ($this->tab == 'private') ? $this->private['first_name'] : $this->business['first_name'],
                'family_name' => ($this->tab == 'private') ? $this->private['family_name'] : $this->business['family_name'],
                'birthday' => ($this->tab == 'private') ? $this->private['birthday'] : $this->business['birthday'],
                'company' => ($this->tab == 'private') ? null : $this->business['company'],
                'position' => ($this->tab == 'private') ? null : $this->business['position'],
                'street' => ($this->tab == 'private') ? $this->private['street'] : $this->business['street'],
                'postal_code' => ($this->tab == 'private') ? $this->private['postal_code'] : $this->business['postal_code'],
                'city' => ($this->tab == 'private') ? $this->private['city'] : $this->business['city'],
                'country' => ($this->tab == 'private') ? $this->private['country'] : $this->business['country'],
                'phone_one' => ($this->tab == 'private') ? $this->private['phone_one'] : $this->business['phone_one'],
                'phone_two' => ($this->tab == 'private') ? $this->private['phone_two'] : $this->business['phone_two'],
                'website_one' => ($this->tab == 'private') ? $this->private['website_one'] : $this->business['website_one'],
                'website_two' => ($this->tab == 'private') ? $this->private['website_two'] : $this->business['website_two'],
                'website_three' => ($this->tab == 'private') ? $this->private['website_three'] : $this->business['website_three'],
            ]);
            // $this->dispatchBrowserEvent('alertSuccess', ['title' => 'Personal Updated successfully!']);
            $this->dispatchBrowserEvent('copyToClipBoard', ['type' => 'success',  'message' => 'Data Updated successfully!']);

        }else{
            Personal::create($data);
            // $this->dispatchBrowserEvent('alertSuccess', ['title' => 'Personal created successfully!']);
            $this->dispatchBrowserEvent('copyToClipBoard', ['type' => 'success',  'message' => 'Data created successfully!']);

        }

        $this->private = [];
        $this->business = [];

        $this->mount();
        // dd('created');

    }

    // public function copyText()
    // {
    //     $this->dispatchBrowserEvent('copyToClipBoard', ['title' => 'Contact Copied!']);
    // }

}
