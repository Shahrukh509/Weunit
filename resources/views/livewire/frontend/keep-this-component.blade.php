
<!--<div>-->
<!--    <div class="row">-->
<!--        <div class="offset-xxl-4 offset-lg-4 col-lg-4 col-xxl-4" id="designTabFix1" style="padding:0;">-->
<!--            <div class="left-side-h remove-margin" style="height:550px;margin-top: 100px;">-->

<!--                <div class="mt-5 p-0" style=" ">-->
<!--                    <img src="http://127.0.0.1:8000/assets/images/weunitlogo.png" class="img-fluid" style="margin-top:10px; background-color: black;">-->
<!--                </div>-->

<!--               <div class="mt-3">-->

<!--                    @php-->
<!--                        $personals = App\Models\Personal::where('user_id', $userID)->first();-->
<!--                        $application = App\Models\Application::where('user_id', $userID)->first();-->
<!--                    @endphp-->
<!--                    @php-->
<!--                        $copyFirstName = isset($personals->first_name) ? $personals->first_name : 'Jerry';-->
<!--                        $copyFamilyName = isset($personals->family_name) ? $personals->family_name : 'Lorenzo';-->
<!--                        $copyBirthday = isset($personals->birthday) ? $personals->birthday : '11-12-2000';-->
<!--                        $copyPhoneNo = isset($personals->phone_no) ? $personals->phone_no : '00 000 00';-->
<!--                    @endphp-->

<!--                    {{-- <input style="color:#f2f2f2; background-color:#f2f2f2; border:0px;"  id="copyPersonData" value=" {{ 'First Name: ' . $copyFirstName .', Family Name: '.$copyFamilyName .', Birthday: '.$copyBirthday .', Phone No: '.$copyPhoneNo  }}"> --}}-->
<!--                    <div style="color:#f2f2f2; font-size: 0px;" id="copyPersonPreviewData">{{ 'First Name: ' . $copyFirstName .', Family Name: '.$copyFamilyName .', Birthday: '.$copyBirthday .', Phone No: '.$copyPhoneNo  }}</div>-->

<!--                    @if($theme == 1)-->
<!--                    @php $themeOne =  App\Models\Design::where('user_id', $userID)->where('theme', 1)->first(); @endphp-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="row">-->
<!--                        <div style="padding: 0; background-color: {{ (isset($themeOne->background_color)) ? $themeOne->background_color : '#000' }} ;" class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto temp2-bg">-->
                            <!-- <div style="background-color: #111;" class="col-xs-12 col-sm-5 offset-sm-0 col-md-5 temp2-bg"> -->
<!--                            <a href="#" class="text-decoration-none text-white">-->
                                <!-- <div class="text-center">
<!--                                    <img src="images/t2.png" class="img-fluid">-->
<!--                                    </div> -->-->

<!--                                @if(isset($themeOne) && !empty($themeOne->background_image) && file_exists( storage_path('/app/public/').$themeOne->background_image))-->
<!--                                    <div class="text-center temp2 temp4 temp41 temp412 firstTemp" style="background: url('{{ asset("storage/".$themeOne->background_image) }}'); height: 375px; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                @else-->
<!--                                    <div class="text-center temp2 temp4 temp41 temp412 firstTemp">-->
<!--                                @endif-->

<!--                                    {{-- <div class="text-center temp2 temp4 temp41 temp412 firstTemp" style="background: url('{{ (isset($themeOne->background_image)) ? asset("storage/".$themeOne->background_image) : asset('assets/images/temp1.png') }}'); height: 375px; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;"> --}}-->

<!--                                    <a href="#" class="text-decoration-none text-white"></a>-->
<!--                            <div class="temp-borders">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
<!--                                </a>-->
<!--                                <div class="bbb1" id="bbblast" style="top: 275px !important; height:100px; width: 100px;">-->
<!--                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                    </a>-->

<!--                                    @if(isset($themeOne) && !empty($themeOne->logo) && file_exists( storage_path('/app/public/').$themeOne->logo))-->
<!--                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeOne->logo) }}" alt="">-->
<!--                                        </a>-->
<!--                                    @else-->
<!--                                        <a class="bl-1" href="">-->
<!--                                            BlondAgain-->
<!--                                        </a>-->
<!--                                    @endif-->

<!--                                </div>-->
<!--                                <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'Jerry' }}<br>{{ (isset($personals->family_name)) ? $personals->family_name : 'Lorenzo' }}</h3>-->
<!--                                <h5>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h5>-->
<!--                            </div>-->
<!--                            <a class="ac-1" wire:click="copyText" href="#">-->
<!--                                <img style="width: 25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt="">-->
                                <!-- <i class="fas fa-dharmachakra"></i> -->
<!--                            </a>-->
                            <!-- <img src="images/t3.png" class="img-fluid"> -->
                            <!-- <a class="ac-1" wire:click="copyText" href="#"><i class="fas fa-dharmachakra"></i></a> -->
<!--                            <div class="row">-->
<!--                                <div class="col-md-7">-->
<!--                                </div>-->
<!--                                <div class="col-md-4">-->
                                    <!-- <div class="bbb1" id="bbblast">
<!--                                    <a class="bl-1" href="">BlondAgain</a>-->
<!--                                    </div> -->-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            {{-- carousel --}}-->
<!--                            <div class="row i2 g-3 justify-content-center">-->
                                <!-- <div class="bbb_main_container"> -->
<!--                                <div class="col-1">-->
<!--                                    <div>-->
<!--                                    <a href="#" class="text-decoration-none text-white">-->
                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                        <img class="bbb_viewed_nav bbb_viewed_preview_prev" style="margin-left: 5px;" src="{{ asset('assets/images/ang1.PNG') }}">-->
<!--                                    </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-10">-->
<!--                                    <div class="owl-carousel owl-theme bbb_viewed_slider_preview" >-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-2 mx-auto">-->
<!--                                                        <div class="per-icon">-->
<!--                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>-->
<!--                                                            </a>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-2 mx-auto">-->
<!--                                                        <div class="per-icon">-->
<!--                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                <i class="fab fa-instagram"></i>-->
<!--                                                            </a>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-2 mx-auto">-->
<!--                                                        <div class="per-icon">-->
<!--                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                            </a>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-2 mx-auto">-->
<!--                                                        <div class="per-icon">-->
<!--                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                            </a>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-2 mx-auto">-->
<!--                                                        <div class="per-icon">-->
<!--                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                            </a>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-1">-->
<!--                                    <div>-->
<!--                                    <a href="#" class="text-decoration-none text-white">-->
                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                        <img class="bbb_viewed_nav bbb_viewed_preview_next" style="margin-left: -15px;" src="{{ asset('assets/images/ang2.PNG') }}">-->
<!--                                    </a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!-- </div> -->
<!--                            </div>-->
<!--                            {{-- End Carousel --}}-->
<!--                        </div>-->
<!--                        </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    </div>-->

<!--                    @elseif($theme == 2)-->
<!--                    @php $themeTwo =  App\Models\Design::where('user_id', $userID)->where('theme', 2)->first(); @endphp-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto" style="padding: 0;">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
                                    <!-- <div class="text-center">
<!--                                        <img src="images/t1.PNG" class="img-fluid">-->
<!--                                    </div> -->-->
<!--                                    </a>-->

<!--                                    @if(isset($themeTwo) && !empty($themeTwo->background_image) && file_exists( storage_path('/app/public/').$themeTwo->background_image))-->
<!--                                         <div class="temp1 temp6 temp612 temp6123" style="background: url('{{ asset("storage/".$themeTwo->background_image)  }}') !important; height: 375px; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                    @else-->
<!--                                        <div class="temp1 temp6 temp612 temp6123" style="background: url('{{ asset('assets/images/Ebene1.png') }}') !important; height: 375px; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                    @endif-->


<!--                                        <a href="#" class="text-decoration-none text-white">-->
<!--                                        </a><div class="temp6123-wrap" style=""><a href="#" class="text-decoration-none text-white">-->
<!--                                        </a><div class="row"><a href="#" class="text-decoration-none text-white">-->
<!--                                            <div class="col-xs-6 col-md-7">-->

<!--                                                <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'Jerry' }}<br>{{ (isset($personals->family_name)) ? $personals->family_name : 'Lorenzo' }}</h3>-->
<!--                                                <h5>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h5>-->
<!--                                            </div>-->
<!--                                            </a><div class="col-xs-6 col-md-4"><a href="#" class="text-decoration-none text-white">-->
<!--                                                </a>-->
<!--                                                <div class="bbb1" style="height:100px; width: 100px;">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                    </a>-->
<!--                                                        @if(isset($themeTwo) && !empty($themeTwo->logo) && file_exists( storage_path('/app/public/').$themeTwo->logo))-->
<!--                                                            <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                                <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeTwo->logo) }}" alt="">-->
<!--                                                            </a>-->
<!--                                                        @else-->
<!--                                                            <a class="bl-1" href="">-->
<!--                                                                BlondAgain-->
<!--                                                            </a>-->
<!--                                                        @endif-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row i2 g-3 justify-content-center">-->
<!--                                            <hr style="position: absolute; top:-20px;right: 0; background: #fff;opacity: 1;width: 60%;height: 3px;"><br>-->

                                            <!-- <div class="bbb_main_container"> -->
<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_prev_2" style="margin-left: 5px;" src="{{ asset('assets/images/ang1.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10">-->
<!--                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_preview_2">-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-instagram"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->

<!--                                                    </div>-->
<!--                                                </div>-->

<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_nex_2" style="margin-left: -15px;" src="{{ asset('assets/images/ang2.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            <!-- </div> -->
<!--                                            <hr style="position: absolute;bottom: 35px!important;left: 0;background: #fff;width: 60%;height: 3px;opacity: 1;">-->
<!--                                        </div>-->
<!--                                        <div class="text-center mx-auto">-->
<!--                                            <button class="temp-btn1"><span><img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt=""></span> <span class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>-->

<!--                                        </div>-->

<!--                                        </div>-->

<!--                                    </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    @elseif($theme == 3)-->
<!--                    @php $themeThree = App\Models\Design::where('user_id', $userID)->where('theme', 3)->first(); @endphp-->

<!--                    <div class="col-md-12" >-->
<!--                        <div class="row">-->
<!--                            <div style="padding: 0;background-color: {{ (isset($themeThree->background_color)) ? $themeThree->background_color : '#000' }} ;;" class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto temp2-bg">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
                                    <!-- <div class="text-center">
<!--                                        <img src="images/t2.png" class="img-fluid">-->
<!--                                    </div> -->-->
<!--                                    </a>-->

<!--                                    @if(isset($themeThree) && !empty($themeThree->background_image) && file_exists( storage_path('/app/public/').$themeThree->background_image))-->
<!--                                        <div class="text-center temp2 temp4 temp41 temp410" style="background: url('{{  asset("storage/".$themeThree->background_image) }}'); border-radius: 0px !important; width: 74%; float: right; height: 330px;  background-size: cover !important; background-position: center !important; margin-top: 50px;">-->
<!--                                    @else-->
<!--                                        <div class="text-center temp2 temp4 temp41 temp410" style="background: url('{{ asset('assets/images/temp1.png') }}'); border-radius: 0px !important; width: 74%; float: right; height: 330px;  background-size: cover !important; background-position: center !important; margin-top: 50px;">-->
<!--                                    @endif-->

<!--                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                    </a><a class="ac-1" wire:click="copyText" href="#">-->
<!--                                            <img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt="">-->
                                            <!-- <i class="fas fa-dharmachakra"></i> -->
<!--                                        </a>-->
                                        <!-- <img src="images/t3.png" class="img-fluid"> -->
                                        <!-- <a class="ac-1" wire:click="copyText" href="#"><i class="fas fa-dharmachakra"></i></a> -->
<!--                                        <div class="row">-->
<!--                                            <div class="col-md-7">-->
<!--                                            <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'Jerry' }}<br>{{ (isset($personals->family_name)) ? $personals->family_name : 'Lorenzo' }}</h3>-->
<!--                                            <h5>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h5>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
<!--                                                <div class="bbb1" style="height:100px; width: 100px; top:340px !important;">-->
<!--                                                    @if(isset($themeThree) && !empty($themeThree->logo) && file_exists( storage_path('/app/public/').$themeThree->logo))-->
<!--                                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeThree->logo) }}" alt="">-->
<!--                                                        </a>-->
<!--                                                    @else-->
<!--                                                        <a class="bl-1" href="">-->
<!--                                                            BlondAgain-->
<!--                                                        </a>-->
<!--                                                    @endif-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row i2 g-3 justify-content-center">-->
                                            <!-- <div class="bbb_main_container"> -->
<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_prev_3" style="margin-left: 5px;" src="{{ asset('assets/images/an1.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10">-->
<!--                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_preview_3">-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-instagram"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->

<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_nex_3" style="margin-left: -15px;" src="{{ asset('assets/images/ang2.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            <!-- </div> -->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                            </div>-->

<!--                        </div>-->
<!--                    </div>-->

<!--                    @elseif($theme == 4)-->

<!--                    @php $themeFour = App\Models\Design::where('user_id', $userID)->where('theme', 4)->first(); @endphp-->
<!--                    <div class="col-md-12" wire:click="themeStatus('4');">-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto" style="padding: 0;">-->
<!--                            <a href="#" class="text-decoration-none text-white">-->
                                <!-- <div class="text-center">
<!--                                <img src="images/t1.PNG" class="img-fluid">-->
<!--                                </div> -->-->
<!--                            </a>-->

<!--                                {{-- <div class="temp1 temp6 temp612"> --}}-->
<!--                                @if(isset($themeFour) && !empty($themeFour->background_image) && file_exists( storage_path('/app/public/').$themeFour->background_image))-->
<!--                                    <div class="temp1 temp6 temp612" style="background: url('{{ asset("storage/".$themeFour->background_image)  }}') !important; height: 375px; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                @else-->
<!--                                   <div class="temp1 temp6 temp612" style="background: url('{{ asset('assets/images/Ebene1.png') }}') !important; height: 375px; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                @endif-->

<!--                                <a href="#" class="text-decoration-none text-white">-->
<!--                                </a>-->
<!--                                <div class="temp612-wrap" style="">-->
<!--                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                    </a>-->
<!--                                    <div class="row">-->
<!--                                        <a href="#" class="text-decoration-none text-white">-->
<!--                                            <div class="col-xs-6 col-md-7">-->
<!--                                            <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'Jerry' }}<br>{{ (isset($personals->family_name)) ? $personals->family_name : 'Lorenzo' }}</h3>-->
<!--                                            <h5>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h5>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                        <div class="col-xs-6 col-md-4">-->
<!--                                            <a href="#" class="text-decoration-none text-white">-->
<!--                                            </a>-->
<!--                                            <div class="bbb1" style="height:100px; width: 100px; top: 10px !important;">-->
<!--                                            <a href="#" class="text-decoration-none text-white">-->
<!--                                            </a>-->
<!--                                            {{-- <div style="height:100px; width: 100px;"> --}}-->
<!--                                                    @if(isset($themeFour) && !empty($themeFour->logo) && file_exists( storage_path('/app/public/').$themeFour->logo))-->
<!--                                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeFour->logo) }}" alt="">-->
<!--                                                        </a>-->
<!--                                                    @else-->
<!--                                                        <a class="bl-1" href="">-->
<!--                                                            BlondAgain-->
<!--                                                        </a>-->
<!--                                                    @endif-->
<!--                                            {{-- </div> --}}-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row i2 g-3 justify-content-center">-->
<!--                                        <hr style="position: absolute; top:-13px; opacity: 1;color: #fff;width: 60%;height: 3px;">-->
<!--                                        <br>-->
                                        <!-- <div class="bbb_main_container"> -->
<!--                                        <div class="col-1">-->
<!--                                            <div>-->
<!--                                            <a href="#" class="text-decoration-none text-white bbb_viewed_nav bbb_viewed_preview_prev_4">-->
                                                <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                                <i style="margin-top: 8px;margin-left: 0px;" class="fas fa-caret-left"></i>-->
                                                <!-- <img style="margin-left: 5px;" src="images/ang1.PNG" class=""> -->
<!--                                            </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-10">-->
<!--                                            <div class="owl-carousel owl-theme bbb_viewed_slider_preview_4">-->
<!--                                                <div class="owl-item">-->
<!--                                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                        <div class="row">-->
<!--                                                            <div class="col-2 mx-auto">-->
<!--                                                                <div class="per-icon">-->
<!--                                                                    <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                        <i class="fab fa-whatsapp"></i>-->
<!--                                                                    </a>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="owl-item">-->
<!--                                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                        <div class="row">-->
<!--                                                            <div class="col-2 mx-auto">-->
<!--                                                                <div class="per-icon">-->
<!--                                                                    <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                        <i class="fab fa-pinterest-p"></i>-->
<!--                                                                    </a>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="owl-item">-->
<!--                                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                        <div class="row">-->
<!--                                                            <div class="col-2 mx-auto">-->
<!--                                                                <div class="per-icon">-->
<!--                                                                    <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                        <i class="fab fa-tiktok"></i>-->
<!--                                                                    </a>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->

<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-1">-->
<!--                                            <div>-->
<!--                                            <a href="#" class="text-decoration-none text-white bbb_viewed_nav bbb_viewed_preview_next_4" style="">-->
                                                <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                                <i style="margin-top: 8px;margin-left: -6px;" class="fas fa-caret-right"></i>-->
                                                <!-- <img style="margin-left: -15px;" src="images/ang2.PNG" class=""> -->
<!--                                            </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                        <!-- </div> -->
<!--                                        <hr style="position: absolute;bottom: 35px!important;color: #fff;opacity: 1;width: 60%;height: 3px;">-->
<!--                                    </div>-->
<!--                                    <button class="temp-btn1"><span><img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt=""></span> <span class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>-->
<!--                                </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    @elseif($theme == 5)-->

<!--                    @php $themeFive = App\Models\Design::where('user_id', $userID)->where('theme', 5)->first(); @endphp-->
<!--                    <div class="col-md-12" >-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto" style="padding: 0;">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
                                    <!-- <div class="text-center">
<!--                                        <img src="images/t1.PNG" class="img-fluid">-->
<!--                                    </div> -->-->
<!--                                    </a>-->

<!--                                    {{-- <div class="temp1 temp6 temp61"> --}}-->
<!--                                    @if(isset($themeFive) && !empty($themeFive->background_image) && file_exists( storage_path('/app/public/').$themeFive->background_image))-->
<!--                                        <div class="temp1 temp6 temp61" style="background: url('{{ asset("storage/".$themeFive->background_image)  }}') !important; height: 375px; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                    @else-->
<!--                                        <div class="temp1 temp6 temp61" style="background: url('{{ asset('assets/images/Ebene1.png') }}') !important; height: 375px; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                    @endif-->

<!--                                        <a href="#" class="text-decoration-none text-white">-->
<!--                                        </a><a class="ac-1" wire:click="copyText" href="#">-->
<!--                                            <img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt="">-->
                                            <!-- <i class="fas fa-dharmachakra"></i> -->
<!--                                        </a>-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-xs-6 col-md-7">-->

<!--                                                <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'Kristin' }}<br>{{ (isset($personals->family_name)) ? $personals->family_name : 'Remy' }}</h3>-->
<!--                                                <h5>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h5>-->
<!--                                            </div>-->
<!--                                            <div class="col-xs-6 col-md-4">-->
<!--                                                <div class="bbb1" style="height:100px; width: 100px; top: 300px !important;">-->
<!--                                                    @if(isset($themeFive) && !empty($themeFive->logo) && file_exists( storage_path('/app/public/').$themeFive->logo))-->
<!--                                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeFive->logo) }}" alt="">-->
<!--                                                        </a>-->
<!--                                                    @else-->
<!--                                                        <a class="bl-1" href="">-->
<!--                                                            BlondAgain-->
<!--                                                        </a>-->
<!--                                                    @endif-->
<!--                                                 </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row i2 g-3 justify-content-center">-->
                                            <!-- <div class="bbb_main_container"> -->
<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_prev_5" style="margin-left: 5px;" src="{{ asset('assets/images/a1.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10">-->
<!--                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_preview_5" wire:ignore>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-instagram"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->

<!--                                                    </div>-->
<!--                                                </div>-->

<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_next_5" style="margin-left: -15px;" src="{{ asset('assets/images/a2.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            <!-- </div> -->
<!--                                        </div>-->

<!--                                    </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    @elseif($theme == 6)-->

<!--                    @php $themeSix = App\Models\Design::where('user_id', $userID)->where('theme', 6)->first(); @endphp-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto p-0">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
                                    <!-- <div class="text-center">
<!--                                        <img src="images/t1.PNG" class="img-fluid">-->
<!--                                    </div> -->-->
<!--                                    </a>-->

<!--                                    {{-- @if(isset($themeThree) && !empty($themeThree->background_image) && file_exists( storage_path('/app/public/').$themeThree->background_image))-->
<!--                                        <div class="text-center temp2 temp4 temp41 temp410" style="background: url('{{  asset("storage/".$themeTwo->background_image) }}'); border-radius: 0px !important; width: 74%; float: right; height: 330px;  background-size: cover !important; background-position: center !important; margin-top: 50px;">-->
<!--                                    @else-->
<!--                                        <div class="text-center temp2 temp4 temp41 temp410" style="background: url('{{ asset('assets/images/temp1.png') }}'); border-radius: 0px !important; width: 74%; float: right; height: 330px;  background-size: cover !important; background-position: center !important; margin-top: 50px;">-->
<!--                                    @endif --}}-->

<!--                                    {{-- <div class="temp1"> --}}-->
<!--                                        @if(isset($themeSix) && !empty($themeSix->background_image) && file_exists( storage_path('/app/public/').$themeSix->background_image))-->
<!--                                            <div class="temp1" style="background: url('{{ asset("storage/".$themeSix->background_image)  }}') !important; height: 450; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px; position: relative;">-->
<!--                                        @else-->
<!--                                            <div class="temp1" style="background: url('{{ asset('assets/images/Ebene1.png') }}') !important; height: 450; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px; position: relative;">-->
<!--                                        @endif-->

<!--                                        <a href="#" class="text-decoration-none text-white">-->
<!--                                        </a><a class="ac-1" wire:click="copyText" href="#">-->
<!--                                            <img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt="">-->
                                            <!-- <i class="fas fa-dharmachakra"></i> -->
<!--                                        </a>-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-xs-6 col-md-7">-->
<!--                                                <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'kristien' }}<br>{{ (isset($personals->family_name)) ? $personals->family_name : 'Lorenzo' }}</h3>-->
<!--                                                <h5>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h5>-->
<!--                                            </div>-->
<!--                                            <div class="col-xs-6 col-md-4">-->
<!--                                                <div class="bbb1"  style="height:100px; width: 100px; top: 296px;">-->
<!--                                                    @if(isset($themeSix) && !empty($themeSix->logo) && file_exists( storage_path('/app/public/').$themeSix->logo))-->
<!--                                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeSix->logo) }}" alt="">-->
<!--                                                        </a>-->
<!--                                                    @else-->
<!--                                                        <a class="bl-1" href="">-->
<!--                                                            BlondAgain-->
<!--                                                        </a>-->
<!--                                                    @endif-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row i2 g-3 justify-content-center">-->
                                            <!-- <div class="bbb_main_container"> -->
<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="bbb_viewed_nav bbb_viewed_preview_prev_6 text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
<!--                                                            <i style="color:#fff" class="fas fa-caret-left"></i>-->
                                                            <!-- <img class="bbb_viewed_nav bbb_viewed_prev" style="margin-left: 5px;" src="images/ang1.PNG" class=""> -->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10">-->
<!--                                                    <div class="owl-carousel owl-theme bbb_viewed_preview_slider_6" wire:ignore>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-instagram"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->

<!--                                                    </div>-->
<!--                                                </div>-->

<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white bbb_viewed_nav bbb_viewed_preview_next_6">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
<!--                                                            <i style="color:#fff" class="fas fa-caret-right"></i>-->
                                                            <!-- <img class="bbb_viewed_nav bbb_viewed_next" style="margin-left: -15px;" src="images/ang2.PNG" class=""> -->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            <!-- </div> -->
<!--                                        </div>-->

<!--                                    </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    @elseif($theme == 7)-->

<!--                    @php $themeSeven= App\Models\Design::where('user_id', $userID)->where('theme', 7)->first(); @endphp-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="row">-->
<!--                            <div style="padding: 0;background-color: {{ (isset($themeSeven->background_color)) ? $themeSeven->background_color : '#D0BCA3' }};" class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto temp2-bg">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
                                    <!-- <div class="text-center">
<!--                                        <img src="images/t2.png" class="img-fluid">-->
<!--                                    </div> -->-->
<!--                                    </a>-->

<!--                                    {{-- <div class="text-center temp2"> --}}-->
<!--                                    @if(isset($themeSeven) && !empty($themeSeven->background_image) && file_exists( storage_path('/app/public/').$themeSeven->background_image))-->
<!--                                        <div class="text-center temp2" style="background: url('{{ asset("storage/".$themeSeven->background_image)  }}') !important; border-radius: 50px;-->
<!--                                        /* width: 100%; */-->
<!--                                        width: 100%;-->
<!--                                        /* width: 290px; */-->
<!--                                        height: 290px;-->
<!--                                        /* height: 380px; */-->
<!--                                        background-size: cover !important;-->
<!--                                        background-position: center !important;">-->
<!--                                    @else-->
<!--                                        <div class="text-center temp2" style="background: url('{{ asset('assets/images/Ebene1.png') }}') !important; border-radius: 50px;-->
<!--                                        /* width: 100%; */-->
<!--                                        width: 100%;-->
<!--                                        /* width: 290px; */-->
<!--                                        height: 290px;-->
<!--                                        /* height: 380px; */-->
<!--                                        background-size: cover !important;-->
<!--                                        background-position: center !important;">-->
<!--                                    @endif-->


<!--                                        <a href="#" class="text-decoration-none text-white">-->
                                        <!-- <img src="images/t3.png" class="img-fluid"> -->
                                        <!-- <a class="ac-1" wire:click="copyText" href="#"><i class="fas fa-dharmachakra"></i></a> -->
<!--                                        </a><div class="row"><a href="#" class="text-decoration-none text-white">-->
<!--                                            <div class="col-md-7">-->
<!--                                                {{-- <h3>Kristin</h3>-->
<!--                                                <h4>Remy</h4> --}}-->
<!--                                                <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'Kristin' }}<br>-->
<!--                                                {{-- {{ (isset($personals->family_name)) ? $personals->family_name : 'Lorenzo' }}</h3> --}}-->
<!--                                                 <h4>{{ (isset($personals->family_name)) ? $personals->family_name : 'Founder BlondAgain' }}</h4>-->
<!--                                                <h5>Founder BlondAgain</h5>-->
<!--                                            </div>-->
<!--                                            </a><div class="col-md-4"><a href="#" class="text-decoration-none text-white">-->
<!--                                                </a><div class="bbb1"  style="height:100px; width: 100px;"><a href="#" class="text-decoration-none text-white">-->
<!--                                                    </a>-->

<!--                                                    @if(isset($themeSeven) && !empty($themeSeven->logo) && file_exists( storage_path('/app/public/').$themeSeven->logo))-->
<!--                                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeSeven->logo) }}" alt="">-->
<!--                                                        </a>-->
<!--                                                    @else-->
<!--                                                        <a class="bl-1" href="">-->
<!--                                                            BlondAgain-->
<!--                                                        </a>-->
<!--                                                    @endif-->

<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row i2 g-3 justify-content-center">-->
                                            <!-- <div class="bbb_main_container"> -->
<!--                                                <div class="col-1">-->
<!--                                                    <div style="width:70px;">-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_prev_7" style="margin-top: 5px;position: absolute;left: 12px;" src="{{ asset('assets/images/angle1.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10">-->
<!--                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_preview_7" wire:ignore>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon" style="padding: 9px!important;">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i style="font-size: 21px;margin-left: -1px;" class="fa fa-facebook-f"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-instagram"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-1">-->
<!--                                                    <div style="width: 70px;">-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_next_7" style="margin-top: 5px;position: absolute;right: 12px;" src="{{ asset('assets/images/angle11.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            <!-- </div> -->
<!--                                        </div>-->
                                        <!-- <div class="justify-content-center"> -->
<!--                                            <div class="text-center">-->

<!--                                                <button class="temp-btn1"><span><img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt=""></span> <span class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>-->

<!--                                            </div>-->
                                        <!-- </div> -->
<!--                                    </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    @elseif($theme == 8)-->

<!--                    @php $themeEight= App\Models\Design::where('user_id', $userID)->where('theme', 8)->first(); @endphp-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="row">-->
<!--                            <div style="padding: 0; background-color: {{ (isset($themeEight->background_color)) ? $themeEight->background_color : '#D0BCA3' }}; " class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto temp2-bg">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
                                    <!-- <div class="text-center">
<!--                                        <img src="images/t2.png" class="img-fluid">-->
<!--                                    </div> -->-->
<!--                                    </a>-->

<!--                                    {{-- <div class="text-center temp2 temp22"> --}}-->
<!--                                        @if(isset($themeEight) && !empty($themeEight->background_image) && file_exists( storage_path('/app/public/').$themeEight->background_image))-->
<!--                                            <div class="text-center temp2 temp22" style="background: url('{{ asset("storage/".$themeEight->background_image)  }}') !important; ">-->
<!--                                        @else-->
<!--                                            <div class="text-center temp2 temp22">-->
<!--                                                {{-- <div class="text-center temp2 temp22" style="background: url('{{ asset('assets/images/Ebene1.png') }}') !important; "> --}}-->
<!--                                        @endif-->

<!--                                        <a href="#" class="text-decoration-none text-white">-->
                                        <!-- <img src="images/t3.png" class="img-fluid"> -->
                                        <!-- <a class="ac-1" wire:click="copyText" href="#"><i class="fas fa-dharmachakra"></i></a> -->
<!--                                        </a><div class="row"><a href="#" class="text-decoration-none text-white">-->
<!--                                            <div class="col-md-7">-->
<!--                                                {{-- <h3>Kristin</h3>-->
<!--                                                <h4>Remy</h4>-->
<!--                                                <h5>Founder BlondAgain</h5> --}}-->
<!--                                                <h3 style="text-align: start;">{{ (isset($personals->first_name)) ? $personals->first_name : 'kristien' }}<br>-->
<!--                                                {{ (isset($personals->family_name)) ? $personals->family_name : 'Lorenzo' }}</h3>-->
<!--                                                {{-- <h4>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h4> --}}-->

<!--                                                <h5>Founder BlondAgain</h5>-->
<!--                                            </div>-->
<!--                                            </a><div class="col-md-4"><a href="#" class="text-decoration-none text-white">-->
<!--                                                </a><div class="bbb1" style="height:100px; width: 100px; top: 300px !important;">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                    </a>-->

<!--                                                    @if(isset($themeEight) && !empty($themeEight->logo) && file_exists( storage_path('/app/public/').$themeEight->logo))-->
<!--                                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeEight->logo) }}" alt="">-->
<!--                                                        </a>-->
<!--                                                    @else-->
<!--                                                        <a class="bl-1" href="">-->
<!--                                                            BlondAgain-->
<!--                                                        </a>-->
<!--                                                    @endif-->

<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row i2 g-3 justify-content-center">-->
                                            <!-- <div class="bbb_main_container"> -->
<!--                                                <div class="col-1">-->
<!--                                                    <div style="width:70px;">-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_prev_8" style="margin-top: 5px;position: absolute;left: 12px;" src="{{ asset('assets/images/angle1.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10">-->
<!--                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_preview_8" wire:ignore>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon" style="padding: 9px!important;">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i style="font-size: 21px;margin-left: -1px;" class="fa fa-facebook-f"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-instagram"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->

<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-1">-->
<!--                                                    <div style="width: 70px;">-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_next_8" style="margin-top: 5px;position: absolute;right: 12px;" src="{{ asset('assets/images/angle11.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            <!-- </div> -->
<!--                                        </div>-->
                                        <!-- <div class="justify-content-center"> -->
<!--                                            <div class="text-center">-->

<!--                                                <button class="temp-btn1"><span><img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt=""></span> <span class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>-->

<!--                                            </div>-->
                                        <!-- </div> -->
<!--                                    </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    @elseif($theme == 9)-->

<!--                    @php $themeNine= App\Models\Design::where('user_id', $userID)->where('theme', 9)->first(); @endphp-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto p-0">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
                                    <!-- <div class="text-center">
<!--                                        <img src="images/t1.PNG" class="img-fluid">-->
<!--                                    </div> -->-->
<!--                                    </a>-->

<!--                                    {{-- @if(isset($themeThree) && !empty($themeThree->background_image) && file_exists( storage_path('/app/public/').$themeThree->background_image))-->
<!--                                        <div class="text-center temp2 temp4 temp41 temp410" style="background: url('{{  asset("storage/".$themeTwo->background_image) }}'); border-radius: 0px !important; width: 74%; float: right; height: 330px;  background-size: cover !important; background-position: center !important; margin-top: 50px;">-->
<!--                                    @else-->
<!--                                        <div class="text-center temp2 temp4 temp41 temp410" style="background: url('{{ asset('assets/images/temp1.png') }}'); border-radius: 0px !important; width: 74%; float: right; height: 330px;  background-size: cover !important; background-position: center !important; margin-top: 50px;">-->
<!--                                    @endif --}}-->
<!--                                    {{-- <div class="temp1 temp3"> --}}-->

<!--                                        @if(isset($themeNine) && !empty($themeNine->background_image) && file_exists( storage_path('/app/public/').$themeNine->background_image))-->
<!--                                            <div class="temp1 temp3" style="background: url('{{ asset("storage/".$themeNine->background_image)  }}') !important; height: 450; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                        @else-->
<!--                                            <div class="temp1 temp3" style="background: url('{{ asset('assets/images/Ebene1.png') }}') !important; height: 450; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                        @endif-->

<!--                                        <a href="#" class="text-decoration-none text-white">-->

<!--                                    </a><a class="ac-1" wire:click="copyText" href="#">-->
<!--                                            <img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt="">-->
                                            <!-- <i class="fas fa-dharmachakra"></i> -->
<!--                                        </a>-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-xs-6 col-md-7">-->
<!--                                                {{-- <h3>Kristin <br>Remy</h3>-->
<!--                                                <h5>Founder BlondAgain</h5> --}}-->
<!--                                                <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'JeKristinrry' }}<br>-->
<!--                                                    {{ (isset($personals->family_name)) ? $personals->family_name : 'Remy' }}</h3>-->
<!--                                                    <h5>Founder BlondAgain</h5> --}}-->
<!--                                                {{-- <h5>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h5> --}}-->
<!--                                            </div>-->
<!--                                            <div class="col-xs-6 col-md-4">-->
<!--                                                <div class="bbb1" style="height:100px; width: 100px; top: 315px !important;">-->
<!--                                                    @if(isset($themeTwo) && !empty($themeTwo->logo) && file_exists( storage_path('/app/public/').$themeTwo->logo))-->
<!--                                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeTwo->logo) }}" alt="">-->
<!--                                                        </a>-->
<!--                                                    @else-->
<!--                                                        <a class="bl-1" href="">-->
<!--                                                            BlondAgain-->
<!--                                                        </a>-->
<!--                                                    @endif-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row i2 g-3 justify-content-center temp9-row">-->
                                            <!-- <div style="margin: auto;"> -->
                                            <!-- <div class="bbb_main_container"> -->
<!--                                                <div class="col-1" style="margin:0">-->
<!--                                                    <div style="">-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_prev_9" style="margin-top: 5px;position: absolute;left: 12px;" src="{{ asset('assets/images/angle1.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10" style="margin:0">-->
<!--                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_preview_9" wire:ignore>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon" style="padding: 9px!important;">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i style="font-size: 21px;margin-left: -1px;" class="fa fa-facebook-f"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-instagram"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->

<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-1" style="margin:0">-->
<!--                                                    <div style="width: 70px;">-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_next_9" style="margin-top: 5px;position: absolute;right: 12px;" src="{{ asset('assets/images/angle11.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            <!-- </div> -->
                                            <!-- </div> -->
<!--                                        </div>-->
                                        <!-- <div class="row g-3 justify-content-center soc-row">
<!--                                            <div class="" style="margin:auto">-->
<!--                                                <div class="">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                        <img class="bbb_viewed_nav bbb_viewed_prev_9" style="margin-left: 5px;" src="images/arr1.PNG" class="">-->

<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                                <div class="owl-carousel owl-theme bbb_viewed_slider_9">-->
<!--                                                    <div class="owl-item">-->
<!--                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->

<!--                                                <div class="per-icon">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                        <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->

<!--                                                <div class="per-icon">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                        <i class="fab fa-instagram"></i>-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->

<!--                                                <div class="per-icon">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                        <i class="fab fa-whatsapp"></i>-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->

<!--                                                <div class="per-icon">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                        <i class="fab fa-pinterest-p"></i>-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->

<!--                                                <div class="per-icon">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                        <i class="fab fa-tiktok"></i>-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->

<!--                                                <div class="per-icon">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                        <i class="fab fa-whatsapp"></i>-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="owl-item">-->
<!--                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->

<!--                                                <div class="per-icon">-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                        <i class="fab fa-pinterest-p"></i>-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                                <div>-->
<!--                                                    <a href="#" class="text-decoration-none text-white">-->
<!--                                                        <img style="margin-top: -20px;margin-left: 5px;" src="images/arr2.PNG"  class="bbb_viewed_nav bbb_viewed_next_9">-->

<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                        </div> -->-->

<!--                                    </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->


<!--                    @elseif($theme == 10)-->
<!--                    @php $themeTen= App\Models\Design::where('user_id', $userID)->where('theme', 10)->first(); @endphp-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto p-0">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
                                    <!-- <div class="text-center">
<!--                                        <img src="images/t1.PNG" class="img-fluid">-->
<!--                                    </div> -->-->
<!--                                    </a>-->

<!--                                    {{-- <div style="background-repeat: no-repeat !important!important;background-size: cover!important;" class="temp1 temp5"> --}}-->

<!--                                        @if(isset($themeTen) && !empty($themeTen->background_image) && file_exists( storage_path('/app/public/').$themeTen->background_image))-->
<!--                                        <div class="temp1 temp5" style="background: url('{{ asset("storage/".$themeTen->background_image)  }}') !important; height: 450; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                    @else-->
<!--                                        <div class="temp1 temp5" style="background: url('{{ asset('assets/images/Ebene1.png') }}') !important; height: 450; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                    @endif-->

<!--                                        <a href="#" class="text-decoration-none text-white">-->
<!--                                        </a><a class="ac-1" wire:click="copyText" href="#">-->
<!--                                            <img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt="">-->
                                            <!-- <i class="fas fa-dharmachakra"></i> -->
<!--                                        </a>-->

<!--                                        <div class="temp5-wrap">-->



<!--                                        <div class="row">-->
<!--                                            <div class="col-xs-6 col-md-7">-->

<!--                                                <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'Alex' }}<br>{{ (isset($personals->family_name)) ? $personals->family_name : 'Mustermann' }}</h3>-->
<!--                                                <h5>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h5>-->
<!--                                            </div>-->
<!--                                            <div class="col-xs-6 col-md-4">-->
<!--                                                <div class="bbb1"  style="height:100px; width: 100px;">-->
<!--                                                    @if(isset($themeTen) && !empty($themeTen->logo) && file_exists( storage_path('/app/public/').$themeTen->logo))-->
<!--                                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeTen->logo) }}" alt="">-->
<!--                                                        </a>-->
<!--                                                    @else-->
<!--                                                        <a class="bl-1" href="">-->
<!--                                                            BlondAgain-->
<!--                                                        </a>-->
<!--                                                    @endif-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <hr style="opacity:1">-->
<!--                                        <div class="row i2 g-3 justify-content-center">-->
                                            <!-- <div class="bbb_main_container"> -->
<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_prev_10" style="margin-left: 5px;" src="{{ asset('assets/images/ar1.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10">-->
<!--                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_preview_10" wire:ignore>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-instagram"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->

<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_next_10" style="margin-left: -15px;" src="{{ asset('assets/images/ar2.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            <!-- </div> -->
<!--                                        </div>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    @elseif($theme == 11)-->

<!--                    @php $themeEleven = App\Models\Design::where('user_id', $userID)->where('theme', 11)->first(); @endphp-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-12 col-xxl-12 mx-auto" style="padding: 0;">-->
<!--                                <a href="#" class="text-decoration-none text-white">-->
                                    <!-- <div class="text-center">
<!--                                        <img src="images/t1.PNG" class="img-fluid">-->
<!--                                    </div> -->-->
<!--                                    </a>-->

<!--                                {{-- @if(isset($themeThree) && !empty($themeThree->background_image) && file_exists( storage_path('/app/public/').$themeThree->background_image))-->
<!--                                        <div class="text-center temp2 temp4 temp41 temp410" style="background: url('{{  asset("storage/".$themeTwo->background_image) }}'); border-radius: 0px !important; width: 74%; float: right; height: 330px;  background-size: cover !important; background-position: center !important; margin-top: 50px;">-->
<!--                                    @else-->
<!--                                        <div class="text-center temp2 temp4 temp41 temp410" style="background: url('{{ asset('assets/images/temp1.png') }}'); border-radius: 0px !important; width: 74%; float: right; height: 330px;  background-size: cover !important; background-position: center !important; margin-top: 50px;">-->
<!--                                    @endif --}}-->

<!--                                    {{-- <div class="temp1 temp6 temp622"> --}}-->
<!--                                    @if(isset($themeEleven) && !empty($themeEleven->background_image) && file_exists( storage_path('/app/public/').$themeEleven->background_image))-->
<!--                                        <div class="temp1 temp6 temp622" style="positon:relative; background: url('{{ asset("storage/".$themeEleven->background_image)  }}') !important; height: 450; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                    @else-->
<!--                                        <div class="temp1 temp6 temp622" style="positon:relative; background: url('{{ asset('assets/images/Ebene1.png') }}') !important; height: 450; background-position: center !important; background-size: cover !important; background-repeat: no-repeat !important; margin-top: 0px;">-->
<!--                                    @endif-->

<!--                                        <a href="#" class="text-decoration-none text-white">-->
<!--                                        </a><a class="ac-1" wire:click="copyText" href="#">-->
<!--                                            <img style="width:25px;" src="{{ asset('assets/images/ac1.PNG') }}" alt="">-->
                                            <!-- <i class="fas fa-dharmachakra"></i> -->
<!--                                        </a>-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-xs-6 col-md-7">-->
<!--                                                <h3>{{ (isset($personals->first_name)) ? $personals->first_name : 'Kristin' }}<br>{{ (isset($personals->family_name)) ? $personals->family_name : 'Rimy' }}</h3>-->
<!--                                                <h5>{{ (isset($personals->first_name)) ? $personals->first_name : 'Founder BlondAgain' }}</h5>-->
<!--                                            </div>-->
<!--                                            <div class="col-xs-6 col-md-4">-->
<!--                                                <div class="bbb1"  style="height:100px; width: 100px; top: 323px !important;">-->
<!--                                                    @if(isset($themeEleven) && !empty($themeEleven->logo) && file_exists( storage_path('/app/public/').$themeEleven->logo))-->
<!--                                                        <a class="bl-1" href="" style="background-color: transparent !important;">-->
<!--                                                            <img style="width: 100%;  border-radius: 50%; width: 75%; height: 75px !important;" src="{{ asset("storage/".$themeEleven->logo) }}" alt="">-->
<!--                                                        </a>-->
<!--                                                    @else-->
<!--                                                        <a class="bl-1" href="">-->
<!--                                                            BlondAgain-->
<!--                                                        </a>-->
<!--                                                    @endif-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row last-row i2 g-3 justify-content-center">-->
                                            <!-- <div class="bbb_main_container"> -->
<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_prev_11" style="margin-left: 5px;" src="{{ asset('assets/images/ar1.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10">-->
<!--                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_preview_11" wire:ignore>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->facebook)) ? $application->facebook : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->instagram)) ? $application->instagram : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-instagram"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->whatsapp)) ? $application->whatsapp : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-whatsapp"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->pinterest)) ? $application->pinterest : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-pinterest-p"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="owl-item">-->
<!--                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-2 mx-auto">-->
<!--                                                                        <div class="per-icon">-->
<!--                                                                            <a target="_blank" href="{{ (isset($application->tiktok)) ? $application->tiktok : '#' }}" class="text-decoration-none text-white">-->
<!--                                                                                <i class="fab fa-tiktok"></i>-->
<!--                                                                            </a>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->

<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-1">-->
<!--                                                    <div>-->
<!--                                                        <a href="#" class="text-decoration-none text-white">-->
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
<!--                                                            <img class="bbb_viewed_nav bbb_viewed_preview_next_11" style="margin-left: -15px;" src="{{ asset('assets/images/a2.PNG') }}">-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            <!-- </div> -->
<!--                                        </div>-->

<!--                                    </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    @endif-->

<!--                  {{-- END Theme Preview --}}-->


<!--               </div>-->
<!--            </div>-->
<!--        </div>-->

<!--    </div>-->

<!--</div>
