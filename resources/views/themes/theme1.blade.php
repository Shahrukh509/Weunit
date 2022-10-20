@php
$design = \App\Models\Design::where('user_id',Auth()->user()->id??$id)->first();
$user =  \App\Models\User::where('id',Auth()->user()->id??$id)->first();
$app = \App\Models\Application::where('user_id',Auth()->user()->id??$id)->first();
$social_position = \App\Models\SocialPosition::where('user_id',Auth()->user()->id??$id)->orderBy('position','asc')->get();
@endphp

<div class="row">


<div style="padding: 0;background-color:{{ ($design->background_color)? $design->background_color:'#000;'}} " class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">

<div class="text-center temp2 temp4 temp41 temp412 firstTemp" style="background: url(public/assets/images/user/{{ ($design->background_image)? $design->background_image: 'ASS.webp' }}) !important;">
<a href="#" class="text-decoration-none text-white">
</a>

<div class="temp-borders">

    <a href="#" class="text-decoration-none text-white ">
    </a>
    <div class="bbb1" id="bbblast">
        <a href="#" class="text-decoration-none text-white">
        </a>
      <img src="public/assets/images/user/{{ $design->logo }}"  class="w-50 pull-left">
    </div>
    <h3>{{ $user->firstname }}</h3>
        <h5>{{ $design->about}}</h5>
</div>
{{-- <a class="ac-1 copy-html" href="#">
    <img style="width: 25px;" src="public/assets/images/ac1.PNG" alt="">
    <!-- <i class="fas fa-dharmachakra"></i> -->
</a> --}}
<!-- <img src="images/t3.png" class="img-fluid"> -->
<!-- <a class="ac-1 copy-html" href="#"><i class="fas fa-dharmachakra"></i></a> -->
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
                <img class="bbb_viewed_nav bbb_viewed_prev_theme" style="margin-left: 5px;" src="public/assets/images/ang1.PNG" class="">
            </a>
        </div>
    </div>
    <div class="col-10">
        <div class="owl-carousel owl-theme bbb_viewed_slider_theme">
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




            {{-- <div class="owl-item">
                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="row">
                        <div class="col-2 mx-auto">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white social_hit" target="blank"id="instagram" user_id="{{ Auth()->user()->id??$id }}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="owl-item">
                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="row">
                        <div class="col-2 mx-auto">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white social_hit" target="blank"id="whatsapp"user_id="{{ Auth()->user()->id??$id }}">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="row">
                        <div class="col-2 mx-auto">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white social_hit" target="blank"id="pinterest" user_id="{{ Auth()->user()->id??$id }}">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="row">
                        <div class="col-2 mx-auto">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white social_hit" target="blank"id="tiktok" user_id="{{ Auth()->user()->id??$id }}">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
        </div>
    </div>
    <div class="col-1">
        <div>
            <a href="#" class="text-decoration-none text-white" target="blank">
                <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                <img class="bbb_viewed_nav bbb_viewed_next_theme" style="margin-left: -15px;" src="public/assets/images/ang2.PNG" class="">
            </a>
        </div>
    </div>
<!-- </div> -->
</div>
</div>
</div>
</div>
</div>




{{-- ,.,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, --}}



