<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        return view('home');
    }

    public function editProfile(){
        Auth::user()->id;
        $user = Auth::user();
        return view('user.editProfile', get_defined_vars());
    }

    // public function update(Request $request){
    //      // dd($request->all());

    //     $data = $request->validate([
    //         'firstname' => 'nullable',
    //         'surname' => 'nullable',
    //         // 'profile_image' => 'nullable',
    //         'email ' => 'nullable',
    //         'phone_no' => 'nullable',
    //         'address_line_no_one' => 'nullable',
    //         'address_line_no_two' => 'nullable',
    //         'post_code' => 'nullable',
    //         'state' => 'nullable',
    //         'area' => 'nullable',
    //         'education' => 'nullable',
    //         'country' => 'nullable',
    //     ]);
        // dd($data);

        // if(isset($request->profile_image)){
        //     $image = $request->profile_image->store('/public/assets/images');
        //     $profile_image = str_replace("/public/assets/images","", $image);
        //     $data['profile_image'] = $profile_image;
        // }


    //     if($request->hasFile('profile_image')){
    //                 $file = $request->file('profile_image');
    //                 // $fileName = $file->getClientOriginalName() ;
    //                 $extension = $file->getClientOriginalExtension(); 
    //                 // $destinationPath = 'images/' ; // for online link will be
    //                 $destinationPath = storage_path().'/app/public/images'; //for local link will be 
    //                 $datetime = date('mdYhisa', time());
    //                 $complete_name=$destinationPath.$datetime.'.'.$extension;
    //                 $file_name=$datetime.'.'.$extension;
    //                 $file->move($destinationPath,$file_name);
    //                 $data['profile_image'] = 'images/'.$file_name;
    //         }

    //     $user = User::where('id', Auth::user()->id)->first();
    //     $user->update($data);

    //     return redirect()->route('editProfile')->with('success','profile updated successfully!');
    // }
    
    
        /* ==============update by kamal bd============*/
    public function store(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->firstname = $request->firstname;
        $data->surname = $request->surname;
        // $data->email = $request->email;
        $data->phone_no = $request->phone_no;
        $data->address_line_no_one = $request->address_line_no_one;
        $data->address_line_no_two = $request->address_line_no_two;
        $data->post_code = $request->post_code;
        $data->state = $request->state;
        $data->area = $request->area;
        $data->education = $request->education;
        $data->country = $request->country;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/adminimg'),$filename);
            $data['profile_image'] = $filename;
        }
        $data->save();
        
        $notification = array(
            'message' => 'Admin profile updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);
        
    }
    
    
    
}
