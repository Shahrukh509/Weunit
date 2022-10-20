<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PrivateBusinessController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd('okk');
        return view('livewire.personal-component');
    }


     public function businessStore(Request $request){
           $inputs=$request->all();
           
           $inputs['user_id']=auth()->user()->id;
           $data = Personal::where('user_id',auth()->user()->id)->where('type','business')->first();
           if(empty($data)){
               
              $createBusiness=Personal::create($inputs);
              return redirect('personalown')->with('success','added successfully!');  
               
           }else{
               
               $data->user_id = auth()->user()->id;
               $data->type = $request->type;
               $data->title = $request->ttitle;
               $data->first_name = $request->first_name;
               $data->family_name = $request->family_name;
               $data->birthday = $request->birthday;
               $data->company = $request->company;
               $data->position = $request->position;
               $data->street = $request->street;
               $data->postal_code = $request->postal_code;
               $data->city = $request->city;
               $data->country = $request->country;
               $data->phone_one = $request->phone_one;
               $data->phone_two = $request->phone_two;
               $data->mobile = $request->mobile;
               $data->fax = $request->fax;
               $data->email_one = $request->email_one;
               $data->email_two = $request->email_two;
               $data->website_one = $request->website_one;
               $data->website_two = $request->website_two;
               $data->website_three = $request->website_three;
               
               $data->save();
               
    
               return redirect('personalown')->with('success','successfully updated data!');
           }
          
        
    }
    public function privateStore(Request $request){
        
           
             $inputs=$request->all();
            //  dd($inputs);
           $inputs['user_id']=auth()->user()->id;
           $data = Personal::where('user_id',auth()->user()->id)->where('type','private')->first();
           if(empty($data)){
               
              $create=Personal::create($inputs);
              return redirect('personalown')->with('success','added successfully!');  
               
           }else{
               
               $data->user_id = auth()->user()->id;
               $data->type = 'private';
               $data->title = $request->title;
               $data->first_name = $request->first_name;
               $data->family_name = $request->family_name;
               $data->birthday = $request->birthday;
               $data->street = $request->street;
               $data->postal_code = $request->postal_code;
               $data->city = $request->city;
               $data->country = $request->country;
               $data->phone_one = $request->phone_one;
               $data->phone_two = $request->phone_two;
               $data->mobile = $request->mobile;
               $data->fax = $request->fax;
               $data->email_one = $request->email_one;
               $data->email_two = $request->email_two;
               $data->website_one = $request->website_one;
               $data->website_two = $request->website_two;
               $data->website_three = $request->website_three;
               
               $data->save();
               
    
               return redirect('personalown')->with('success','successfully updated data!');
        
    
        
        
    }
}
}




