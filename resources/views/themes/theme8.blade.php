@php
$design = \App\Models\Design::where('user_id',Auth()->user()->id??$id)->first();
$user =  \App\Models\User::where('id',Auth()->user()->id??$id)->first();
$app = \App\Models\Application::where('user_id',Auth()->user()->id??$id)->first();
$social_position = \App\Models\SocialPosition::where('user_id',Auth()->user()->id??$id)->orderBy('position','asc')->get();
@endphp

<div class="col-md-12 clone-this">
            <div class="row">
                <div style="padding: 0;background-color:{{ ($design->background_color)? $design->background_color:'#D0BCA3;'}} " class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">
                    <a href="#" class="text-decoration-none text-white">
                        <!-- <div class="text-center">
                            <img src="images/t2.png" class="img-fluid">
                        </div> -->
                        <div class="text-center temp2 temp22" style="background: url(public/assets/images/user/{{ ($design->background_image)? $design->background_image: 'Ebene1.png' }}) !important;">
                            {{-- <img src="images/t3.png" class="img-fluid"> --}}
                            <a class="ac-1 copy-html" href="#"><i class="fas fa-dharmachakra"></i></a>
                            <div class="row">
                                <div class="col-md-7">
                                   <h3>{{ $user->firstname }}</h3>
                           <h5>{{ $design->about}}</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="bbb1">
                                       <img src="http://localhost/weunit/public/assets/images/user/{{ $design->logo }}"  class="w-50 pull-left">
                                    </div>
                                </div>
                            </div>
                            <div class="row i2 g-3 justify-content-center">
                                <!-- <div class="bbb_main_container"> -->
                                    <div class="col-1">
                                        <div style="width:70px;">
                                            <a href="#" class="text-decoration-none text-white">
                                                <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                <img class="bbb_viewed_nav bbb_viewed_prev_8" style="margin-top: 5px;position: absolute;left: 12px;" src="public/assets/images/angle1.PNG" class="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="owl-carousel owl-theme bbb_viewed_slider_8">
                                              @foreach($social_position as $social)
                                @php
                                $name = $social->social_media;
                                @endphp
                                <div class="owl-item">
                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="row">
                                            <div class="col-2 mx-auto">
                                                <div class="per-icon">
                                                    <a href="{{ $app->$name?? '' }}" class="text-decoration-none text-white social_hit" target="blank" id="facebook" user_id="{{ Auth()->user()->id??$id }}">
                                                        <i style="margin-top: 2px;font-size: 26px;" class="@if($name == 'ball')fas fa-basketball-ball @else fa fa-{{ $name }} @endif"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach()
                                            
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div style="width: 70px;">
                                            <a href="#" class="text-decoration-none text-white">
                                                <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                <img class="bbb_viewed_nav bbb_viewed_next_8" style="margin-top: 5px;position: absolute;right: 12px;" src="public/assets/images/angle11.PNG" class="">
                                            </a>
                                        </div>
                                    </div>
                                 <!-- </div> -->
                            </div>
                            <!-- <div class="justify-content-center"> -->
                                {{-- <div class="text-center">
                                        
                                    <button class="temp-btn1 copy-html"><span><img style="width:25px;" src="public/assets/images/ac1.PNG" alt=""></span> <span  class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>
                                    
                                </div> --}}
                            <!-- </div> -->
                        </div>
                    </a>                                                    
                </div>
            </div>
      