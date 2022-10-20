@extends('layouts.master')
@section('section')

<style >
/*  #imgId {
    max-width: 100%;
    max-height: 100%;
    position: center;
}*/
</style>
<div>

    <div class="row">
      <div class="col-lg-4 col-xl-6 col-xxl-4 add-m" id="designTabFix">

                  <ul class="nav nav-pills mb-3 personal-tab per-tab-ul overflow-hidden" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-private-tab" data-bs-toggle="pill" data-bs-target="#pills-private" type="button" role="tab" aria-controls="pills-private" aria-selected="true">Private</button>
                  </li>
                  <li class="nav-item per-tab-ul-li" role="presentation">
                    <button class="nav-link" id="pills-business-tab" data-bs-toggle="pill" data-bs-target="#pills-business" type="button" role="tab" aria-controls="pills-business" aria-selected="false">Business</button>
                  </li>
                </ul>
                                 @php
                                $person_private = \App\Models\Personal::where('user_id',Auth()->user()->id)->where('type','private')->first();
                                $person_business = \App\Models\Personal::where('user_id',Auth()->user()->id)->where('type','business')->first();
                               
                                @endphp
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-private" role="tabpanel" aria-labelledby="pills-private-tab">
                       <form style=""  method="POST" action="{{route('privateStore')}}">
                        @csrf
                      <div class="padding-50 left-side-h left-side-h-0">
                        <div class="row">
                          <!-- <div class="col-md-6 ms-2 py-3"> -->
                          <div style="z-index: 99;" class="col-6 col-sm-4 col-md-4 col-lg-5 col-xl-4 col-xxl-4">
                            <p class="mb-3-p font-size-12">Title:</p>
                            <p class="mb-3-p font-size-12">First Name:</p>
                            <p class="mb-3-p font-size-12">Family Name:</p>
                            <p class="mb-3-p font-size-12">Birthday:</p>
                          </div>
                          <!-- <div class="col-md-6 ms-2 py-3"> -->
                          <div class="col-6 col-md-6 col-xl-7 col-xxl-7 per-form">
                            <!-- <form class="mb-5" method="post" id="contactForm" name="contactForm"> -->
                            <div class="row">
                               
                              <div class="col-md-12 form-group">
                                   <input type="hidden" name="type" value="private">
                              <input type="text" class="form-control" name="title" id="title" value="@if(isset($person_private->title)){{$person_private->title}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="first_name" id="first_name" value="@if(isset($person_private->first_name)){{$person_private->first_name}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="family_name" id="family_name" value="@if(isset($person_private->family_name)){{$person_private->family_name}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="date" class="form-control" value="@if(isset($person_private->birthday)){{$person_private->birthday}}@endif" name="birthday" id="birthday">
                              </div>
                            </div>
                            <!-- </form> -->
                          </div>
                        </div>
                        <hr class="mt-3-p" style="width: 90%;"><br>
                        <div class="row">
                          <!-- <div class="ms-2 py-3"> -->
                          <div class="col-6 col-sm-4 col-md-4 col-lg-5 col-xl-4 col-xxl-4">
                            <p class="mb-3-p font-size-12">Street:</p>
                            <p class="mb-3-p font-size-12">Postal Code:</p>
                            <p class="mb-3-p font-size-12">City:</p>
                            <p class="mb-3-p font-size-12">Country:</p>
                          </div>
                        <div class="col-6 col-md-6 col-xl-7 col-xxl-7 per-form">
                            <!-- <form class="mb-5" method="post" id="contactForm" name="contactForm"> -->
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="street" id="street" value="@if(isset($person_private->street)){{$person_private->street}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="postal_code" id="postal_code" value="@if(isset($person_private->postal_code)){{$person_private->postal_code}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="city" id="city" value="@if(isset($person_private->city)){{$person_private->city}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="country" id="country" value="@if(isset($person_private->country)){{$person_private->country}}@endif">
                              </div>
                            </div>
                            <!-- </form> -->
                          </div>
                        </div>
                        <hr class="mt-3-p" style="width: 90%;"><br>
                        <div class="row">
                          <!-- <div class="ms-2 py-3"> -->
                          <div class="col-6 col-sm-4 col-md-4 col-lg-5 col-xl-4 col-xxl-4">
                            <p class="mb-3-p font-size-12">Phone(1):</p>
                            <p class="mb-3-p font-size-12">Phone(2):</p>
                            <p class="mb-3-p font-size-12">Mobile:</p>
                            <p class="mb-3-p font-size-12">Fax:</p>
                          </div>
                        <div class="col-6 col-md-6 col-xl-7 col-xxl-7 per-form">
                            <!-- <form class="mb-5" method="post" id="contactForm" name="contactForm"> -->
                            <div class="row">
                              
                              <div class="col-md-12 form-group">
                              <input type="number" class="form-control" name="phone_one" id="phone_one" value="@if(isset($person_private->phone_one)){{$person_private->phone_one}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="number" class="form-control" name="phone_two" id="phone_two" value="@if(isset($person_private->phone_two)){{$person_private->phone_two}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="number" class="form-control" name="mobile" id="mobile" value="@if(isset($person_private->mobile)){{$person_private->mobile}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="number" class="form-control" name="fax" id="fax" value="@if(isset($person_private->fax)){{$person_private->fax}}@endif">
                              </div>
                            </div>
                            <!-- </form> -->
                          </div>
                        </div>
                        <hr class="mt-3-p" style="width: 90%;"><br>
                        <div class="row">
                          <!-- <div class="ms-2 py-3"> -->
                          <div class="col-6 col-sm-4 col-md-4 col-lg-5 col-xl-4 col-xxl-4">
                            <p class="mb-3-p font-size-12">E-mail(1):</p>
                            <p class="mb-3-p font-size-12">E-mail(2):</p>
                            <p class="mb-3-p font-size-12">Website(1):</p>
                            <p class="mb-3-p font-size-12">Website(2):</p>
                            <p class="mb-3-p font-size-12">Website(3):</p>
                          </div>
                        <div class="col-6 col-md-6 col-xl-7 col-xxl-7 per-form">
                            <!-- <form class="mb-5" method="post" id="contactForm" name="contactForm"> -->
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="email" class="form-control" name="email_one" id="email_one" value="@if(isset($person_private->email_one)){{$person_private->email_one}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="email" class="form-control" name="email_two" id="email_two" value="@if(isset($person_private->email_two)){{$person_private->email_two}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="website_one" id="website_one" value="@if(isset($person_private->website_one)){{$person_private->website_one}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="website_two" id="website_two" value="@if(isset($person_private->website_two)){{$person_private->website_two}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="website_three" id="website_three" value="@if(isset($person_private->website_three)){{$person_private->website_three}}@endif">
                              </div>
                            </div>
                            <!-- </form> -->

                            <div class="row">
                            <div class="col-md-12">
                            <button style="border-radius: 30px!important;background-color: #07f5cb!important;" type="submit"  class="btn btn-primary rounded-0 ">Submit</button>
                            <span class="submitting"></span>
                            </div>
                          </div>
                          </div>
                        </div>

                      </div> 
                        </form>
                    </div>
                    
                   
                    
                    
                     <!-- ################################2nd tab ============================================ -->
                     
                    
                     
                     
                  <div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">
                      <div class="padding-50 left-side-h left-side-h-0">
                      <form style=""  method="POST" action="{{route('businessStore')}}">
                         @csrf
                        <div class="row">
                          <!-- <div class="ms-2 py-3"> -->
                          <div class="col-6 col-sm-4 col-md-4 col-lg-5 col-xl-4 col-xxl-4">
                            <p class="mb-3-p font-size-12">Title:</p>
                            <p class="mb-3-p font-size-12">First Name:</p>
                            <p class="mb-3-p font-size-12">Family Name:</p>
                            <p class="mb-3-p font-size-12">Birthday:</p>
                          </div>
                        <div class="col-6 col-md-6 col-xl-7 col-xxl-7 per-form">
                            <!-- <form class="mb-5" method="post" id="contactForm" name="contactForm"> -->
                             <div class="row">
                               
                              <div class="col-md-12 form-group">
                               <input type="hidden" name="type" value="business">
                              <input type="text" class="form-control" name="title" id="title" value="@if(isset($person_business->title)){{$person_business->title}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="first_name" id="first_name" value="@if(isset($person_business->first_name)){{$person_business->first_name}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="family_name" id="family_name" value="@if(isset($person_business->family_name)){{$person_business->family_name}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="date" class="form-control" value="@if(isset($person_business->birthday)){{$person_business->birthday}}@endif" name="birthday" id="birthday">
                              </div>
                              </div>
                            <!-- </form> -->
                          </div>
                        </div>
                        <hr class=" mt-3-p" style="width: 90%;"><br>
                        <div class="row">
                          <!-- <div class="ms-2 py-3"> -->
                          <div class="col-6 col-sm-4 col-md-4 col-lg-5 col-xl-4 col-xxl-4">
                            <p class="mb-3-p font-size-12">Company:</p>
                            <p class="mb-3-p font-size-12">Position:</p>
                          </div>
                        <div class="col-6 col-md-6 col-xl-7 col-xxl-7 per-form">
                            <!-- <form class="mb-5" method="post" id="contactForm" name="contactForm"> -->
                            <div class="row">
                              
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="company" id="company" value="@if(isset($person_business->company)){{$person_business->company}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="position" id="position"  value="@if(isset($person_business->position)){{$person_business->position}}@endif">
                              </div>
                            </div>
                            <!-- </form> -->
                          </div>
                        </div>
                        <hr class="mt-3-p" style="width: 90%;"><br>
                        <div class="row">
                          <!-- <div class="ms-2 py-3"> -->
                          <div class="col-6 col-sm-4 col-md-4 col-lg-5 col-xl-4 col-xxl-4">
                            <p class="mb-3-p font-size-12">Street:</p>
                            <p class="mb-3-p font-size-12">Postal Code:</p>
                            <p class="mb-3-p font-size-12">City:</p>
                            <p class="mb-3-p font-size-12">Country:</p>
                          </div>
                        <div class="col-6 col-md-6 col-xl-7 col-xxl-7 per-form">
                            <!-- <form class="mb-5" method="post" id="contactForm" name="contactForm"> -->
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="street" id="street" value="@if(isset($person_business->street)){{$person_business->street}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="postal_code" id="postal_code" value="@if(isset($person_business->postal_code)){{$person_business->postal_code}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="city" id="city" value="@if(isset($person_business->city)){{$person_business->city}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="country" id="country" value="@if(isset($person_business->country)){{$person_business->country}}@endif">
                              </div>
                            </div>
                            <!-- </form> -->
                          </div>
                        </div>
                        <hr class="mt-3-p" style="width: 90%;"><br>
                        <div class="row">
                          <!-- <div class="ms-2 py-3"> -->
                          <div class="col-6 col-sm-4 col-md-4 col-lg-5 col-xl-4 col-xxl-4">
                            <p class="mb-3-p font-size-12">Phone(1):</p>
                            <p class="mb-3-p font-size-12">Phone(2):</p>
                            <p class="mb-3-p font-size-12">Mobile:</p>
                            <p class="mb-3-p font-size-12">Fax:</p>
                          </div>
                        <div class="col-6 col-md-6 col-xl-7 col-xxl-7 per-form">
                            <!-- <form class="mb-5" method="post" id="contactForm" name="contactForm"> -->
                             <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="number" class="form-control" name="phone_one" id="phone_one" value="@if(isset($person_business->phone_one)){{$person_business->phone_one}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="number" class="form-control" name="phone_two" id="phone_two" value="@if(isset($person_business->phone_two)){{$person_business->phone_two}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="number" class="form-control" name="mobile" id="mobile" value="@if(isset($person_business->mobile)){{$person_business->mobile}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="number" class="form-control" name="fax" id="fax" value="@if(isset($person_business->fax)){{$person_business->fax}}@endif">
                              </div>
                            </div>
                            <!-- </form> -->
                          </div>
                        </div>
                        <hr class="mt-3-p" style="width: 90%;"><br>
                        <div class="row">
                          <!-- <div class="ms-2 py-3"> -->
                          <div class="col-6 col-sm-4 col-md-4 col-lg-5 col-xl-4 col-xxl-4">
                            <p class="mb-3-p font-size-12">E-mail(1):</p>
                            <p class="mb-3-p font-size-12">E-mail(2):</p>
                            <p class="mb-3-p font-size-12">Website(1):</p>
                            <p class="mb-3-p font-size-12">Website(2):</p>
                            <p class="mb-3-p font-size-12">Website(3):</p>
                          </div>
                        <div class="col-6 col-md-6 col-xl-7 col-xxl-7 per-form">
                            <!-- <form class="mb-5" method="post" id="contactForm" name="contactForm"> -->
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="email" class="form-control" name="email_one" id="email_one" value="@if(isset($person_business->email_one)){{$person_business->email_one}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="email" class="form-control" name="email_two" id="email_two" value="@if(isset($person_business->email_two)){{$person_business->email_two}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="website_one" id="website_one" value="@if(isset($person_business->website_one)){{$person_business->website_one}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="website_two" id="website_two" value="@if(isset($person_business->website_two)){{$person_business->website_two}}@endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                              <input type="text" class="form-control" name="website_three" id="website_three" value="@if(isset($person_business->website_three)){{$person_business->website_three}}@endif">
                              </div>
                            </div>
                            <!-- </form> -->
                            <div class="row">
                            <div class="col-md-12">
                            <button style="border-radius: 30px!important;background-color: #07f5cb!important;" type="submit"  class="btn btn-primary rounded-0 ">Submit</button>
                            <span class="submitting"></span>
                            </div>
                          </div>
                          </div>

                        </div>
                      </form>
                      </div>  


                  </div>
                </div>

                </div>


           
             <div class="col-lg-5 col-xxl-4" style="padding:0;" id="designTabFix1">
        <div class="left-side-h remove-margin" style="height:550px;margin-top: 220px; border-left: 1px solid grey;">
        

        <div class="d-flex justify-content-between">
            <a class="share-profile-btn" target="_blank" href="http://localhost/weunit/share-profile?userID={{ Auth()->user()->id }}">Click To Share Profile</a>
            <div class="text-end">
            <!--    <span><i class="fas fa-mobile-alt fs-3"></i></span>&nbsp;&nbsp;&nbsp;-->
            <!--    <span class="ms-2"><i class="fas fa-laptop fs-3"></i></span>-->
            <!-- </div>-->
        </div>
      </div>

       <div class="mt-3">
         @php

              $design = \App\Models\Design::where('user_id',Auth()->user()->id)->first();
              $user =  \App\Models\User::where('id',Auth()->user()->id)->first();
              @endphp
          <!-- <img style="width:100%" src="images/placeholder-2.png" class="img-fluid"> -->

            <div class="col-md-12">
             
                <div class="row">
                <div style="padding: 0; background-color: {{ ($design->background_color)? $design->background_color:'#000'; }} ;" class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto temp2-bg">
                    <!-- <div style="background-color: #111;" class="col-xs-12 col-sm-5 offset-sm-0 col-md-5 temp2-bg"> -->
                  
                    <div class="text-center temp2 temp4 temp41 temp412 firstTemp" style="padding: 0; background: url(public/assets/images/user/{{ ($design->background_image)? $design->background_image: 'temp1.PNG' }}) !important;">
                      <a href="#" class="text-decoration-none text-white">
                        
                            

                            </a><a href="#" class="text-decoration-none text-white"></a>
                    <div class="temp-borders">
                        <a href="#" class="text-decoration-none text-white">
                        </a>
                        <div class="bbb1" id="bbblast" style="top: 275px !important; height:100px; width: 100px;">
                            <a href="#" class="text-decoration-none text-white">
                            </a>
                               <img src="http://localhost/weunit/public/assets/images/user/{{ $design->logo }}"  class="w-50 pull-left">
                            
                        </div>
                        <h3>{{ $user->firstname }}</h3>
                  <h5>{{ $design->about}}</h5>
                    </div>
                    {{-- <a class="ac-1" wire:click="copyText" href="#">
                        <img style="width: 25px;" src="http://localhost/weunit/public/assets/images/ac1.PNG" alt="">
                        <!-- <i class="fas fa-dharmachakra"></i> -->
                    </a> --}}
                    <!-- <img src="images/t3.png" class="img-fluid"> -->
                    <!-- <a class="ac-1" wire:click="copyText" href="#"><i class="fas fa-dharmachakra"></i></a> -->
                    <div class="row">
                        <div class="col-md-7">
                        </div>
                        <div class="col-md-4">
                            <!-- <div class="bbb1" id="bbblast">
                            <a class="bl-1" href="">BlondAgain</a>
                            </div> -->
                        </div>
                    </div>
                    
                    <div class="row i2 g-3 justify-content-center">
                        <!-- <div class="bbb_main_container"> -->
                        <div class="col-1">
                            <div>
                            <a href="#" class="text-decoration-none text-white">
                                <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                <img class="bbb_viewed_nav bbb_viewed_preview_prev" style="margin-left: 5px;" src="public/assets/images/ang1.PNG">
                            </a>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="owl-carousel owl-theme bbb_viewed_slider_preview owl-loaded owl-drag" wire:ignore="">
                                
                                
                                
                                
                        <div class="owl-dots disabled"></div></div>
                        </div>
                        <div class="col-1">
                            <div>
                            <a href="#" class="text-decoration-none text-white">
                                <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                <img class="bbb_viewed_nav bbb_viewed_preview_next" style="margin-left: -15px;" src="public/assets/images/ang2.PNG">
                            </a>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    
                </div>
                
                </div>
            </div>
            </div>

            
          


       </div>
    </div>
    </div>

    </div>
 

</div>

@endsection