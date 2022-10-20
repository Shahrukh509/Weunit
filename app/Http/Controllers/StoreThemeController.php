<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\Application;
use App\Models\Statistic;
use App\Models\SocialPosition;
use Auth;
// use App\Models\User;

class StoreThemeController extends Controller
{
    public function StoreHtml(Request $request){

     $data = Design::where('user_id',Auth()->user()->id)->first();
     if(!empty($data)){

      $data->theme = $request->theme;
     $data->save();

     }else{

      $data = Design::create([
        'user_id' => Auth()->user()->id,
        'html' => $request->html
      ]);

  
     }

     // dd('themes.'.$data->theme);

     return (string) view('themes.'.$data->theme);
    

    }

    public function StoreBackground(Request $request){

       $user = Design::where('user_id',Auth()->user()->id)->first();
      if($request->hasFile('image')){


// dd( $request->file('image'));
      $image = $request->file('image');
    
      $image = $image->getClientOriginalName();
   
      $name = $request->image->move(public_path('assets/images/user/'),$image);
      // $url = url('/').'/public/assets/images/user/'.$image;
        $user->background_image = $image;
      }

       $user->background_color = $request->color;
      $user->save();
      return response()->json([

        'success' => true

        ]);

      
  }

  public function StoreLogo(Request $request){

    // dd($request->logo);

     $user = Design::where('user_id',Auth()->user()->id)->first();
      if($request->hasFile('logo')){


// dd( $request->file('image'));
      $image = $request->file('logo');
    
      $image = $image->getClientOriginalName();
   
      $name = $request->logo->move(public_path('assets/images/user/'),$image);
      // $url = url('/').'/public/assets/images/user/'.$image;
        $user->logo = $image;

        $user->save();

         return response()->json([

        'success' => true

        ]);


      }




  }

  public function StoreAbout(Request $request){

    // dd($request->about);

    $design = Design::where('user_id', Auth()->user()->id)->first();

    $design->about = $request->about;
    $design->save();
     return response()->json([

        'success' => true

        ]);
    

      }


  public function StoreVideo(Request $request){

    // dd($request->video);

     $user = Design::where('user_id',Auth()->user()->id)->first();
      if($request->hasFile('video')){


// dd( $request->file('image'));
      $video = $request->file('video');

      // exec("ls -lh compressed_video.mp4",$video);// pass file path here
      
      //  $size=explode(' ',$video);
      //  print_r($size[4]);
    
      $video = $video->getClientOriginalName();
   
      $get_video = $request->video->move(public_path('assets/videos/'),$video);
      // $url = url('/').'/public/assets/images/user/'.$image;
        $user->video = $video;

        $user->save();

         return response()->json([

        'success' => true

        ]);


      }







  }

  public function StoreSocialLinks(Request $request){

    // dd($request->social_name);

    $name = $request->social_name;

    $count = SocialPosition::where('status',1)->count();
    $social = SocialPosition::where('social_media',$name)->first();

    if(!$social){

      $data = SocialPosition::create([

        'user_id' => Auth()->user()->id,
        'social_media' => $name,
        'position' => $count+1
      ]);

    }
   

    $app = Application::where('user_id',Auth()->user()->id)->first();
    if($app){

       $app->$name  = $request->url;
       $app->save();


       if($app){
      
           return response()->json([

        'success' => true

        ]);


       }else{

        return response()->json([

        'success' => false

        ]);

       }


       
    }else{
      $app = Application::create([
        'user_id' => Auth()->user()->id,
        $name => $request->url
      ]);

      if($app){

        return response()->json([

        'success' => true

        ]);

      }else{

        return response()->json([

        'success' => false

        ]);


      }

    }




  }


  public function StoreSocialStats(Request $request){


   $mac_address = exec('getmac');

   $ip = \Request::ip();

   $name = $request->name;

   $stats = Statistic::where('user_id',$request->id)->first();
   if(!empty($stats)){
   if($stats->ip_address !== $ip){

     $new_stats = Statistic::create([
      'user_id' => $request->id,
      'mac_address' => $mac_address,
      'ip_address' => $ip,
       $name => 1
     ]);


     return response->json([
      'success' => true
    ]);

   }else{

     $stats->$name = 1;
     $stats->save();

      return response()->json([
      'success' => true
    ]);
  }

 }else{

  $new_stats = Statistic::create([
      'user_id' => $request->id,
      'mac_address' => $mac_address,
      'ip_address' => $ip,
       $name => 1
     ]);


    return response()->json([
      'success' => true
    ]);

 }


  }

  public function StoreSocialCronology(Request $request){


    // $data = json_decode($request->data);

    // dd($request->data);

     foreach ($request->data as $key => $value) {

        $data = SocialPosition::find($value['id'])->update(['position' => $value['position']]);
        
      }

      if($data){
          return response()->json([

            'status' => true
          ]);
        }else{
          

           return response()->json([

            'status' => false
          ]);


        }


  }
}
