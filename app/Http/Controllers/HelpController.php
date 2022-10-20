<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HelpController extends Controller
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
        return view('help');
    }


    public function storeContact(Request $request){
       // dd($request->all());

        $request->validate([
            'email' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        // dd($data);

        Contact::create($data);

        $data = array('name'=> $data['name']);

        $email = $request->email;
        $name = $data['name'];

        // Mail::send('emails.mail', $data, function($message) use ($email, $name) {
        //     $message->to($email, 'Point')->subject
        //         ('Hi '. $name . ', Email received!');
        //     $message->from('hiboy041@gmail.com','WeUnit');
        //  });
        // echo "Email Sent.";

        // dd('yes');

        return redirect()->back()->with('success','Email Sent Successfully');
    }


}
