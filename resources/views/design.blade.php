@extends('layouts.master')

@section('section')
<div class="row">
    <div class="col-md-12">
    </div>
    <div class="col-md-9 col-lg-4 col-xl-6 col-xxl-4 design-col design-col-p left-margin" id="designTabFix">
        <div class="row" id="hideNavF">
            <div class="col-lg-12 ml-120">
                <ul style="overflow-x: inherit;width: 405px;
                display: flex;
                flex-wrap: wrap!important;"
                    class="nav nav-res1 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start"
                    id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                        <button class="nav-link active" id="pills-style-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-style" type="button" role="tab" aria-controls="pills-style"
                            aria-selected="true">Style</button>
                    </li>
                    <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                        <button class="nav-link" id="pills-background-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-background" type="button" role="tab" aria-controls="pills-background"
                            aria-selected="false">Background</button>
                    </li>
                    <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                        <button class="nav-link" id="pills-profile-image-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-profile-image" type="button" role="tab"
                            aria-controls="pills-profile-image" aria-selected="false">Profile Image</button>
                    </li>
                    <br>
                    <!-- </ul> -->
                    <!-- </div>
                   <div class="col-lg-12 ml-120"> -->
                    <!-- <ul style=" flex-wrap: wrap; overflow-x: inherit;" class="nav nav-res111 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist"> -->
                    <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                        <button class="nav-link" id="pills-logo-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo"
                            type="button" role="tab" aria-controls="pills-logo" aria-selected="false">Logo</button>
                    </li>
                    <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                        <button class="nav-link" id="pills-logo1-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-logo1" type="button" role="tab" aria-controls="pills-logo1"
                            aria-selected="false">About</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                   <button class="nav-link" id="pills-font-tab1" data-bs-toggle="pill" data-bs-target="#pills-font" type="button" role="tab" aria-controls="pills-font" aria-selected="false">Font</button>
                   </li> -->
                    <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                        <button class="nav-link" id="pills-profile-video-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-profile-video" type="button" role="tab"
                            aria-controls="pills-profile-video" aria-selected="false">Video</button>
                    </li>
                    <!-- </ul> -->
                    <!-- </div>
                   <div class="col-lg-12 ml-120"> -->
                    <!-- <ul style=" flex-wrap: wrap; overflow-x: inherit;" class="nav nav-res111 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist"> -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-logo2-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-logo2" type="button" role="tab" aria-controls="pills-logo2"
                            aria-selected="false">Location</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                   <button class="nav-link" id="pills-logo3-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo3" type="button" role="tab" aria-controls="pills-logo3" aria-selected="false">New</button>
                   </li> -->
                </ul>
            </div>
        </div>
        <div class="row" id="hideNavS">
            <div class="col-lg-12 ml-120">
                <ul style="overflow-x: inherit;"
                    class="nav nav-res1 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start"
                    id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-style-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-style" type="button" role="tab" aria-controls="pills-style"
                            aria-selected="true">Style</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-background-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-background" type="button" role="tab" aria-controls="pills-background"
                            aria-selected="false">Background</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-image-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-profile-image" type="button" role="tab"
                            aria-controls="pills-profile-image" aria-selected="false">Profile Image</button>
                    </li>
                    <br>
                    <!-- </ul> -->
                    <!-- </div>
                   <div class="col-lg-12 ml-120"> -->
                    <!-- <ul style=" flex-wrap: wrap; overflow-x: inherit;" class="nav nav-res111 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist"> -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-logo-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo"
                            type="button" role="tab" aria-controls="pills-logo" aria-selected="false">Logo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-logo1-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-logo1" type="button" role="tab" aria-controls="pills-logo1"
                            aria-selected="false">About</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                   <button class="nav-link" id="pills-font-tab1" data-bs-toggle="pill" data-bs-target="#pills-font" type="button" role="tab" aria-controls="pills-font" aria-selected="false">Font</button>
                   </li> -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-video-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-profile-video" type="button" role="tab"
                            aria-controls="pills-profile-video" aria-selected="false">Video</button>
                    </li>
                    <!-- </ul> -->
                    <!-- </div>
                   <div class="col-lg-12 ml-120"> -->
                    <!-- <ul style=" flex-wrap: wrap; overflow-x: inherit;" class="nav nav-res111 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist"> -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-logo2-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-logo2" type="button" role="tab" aria-controls="pills-logo2"
                            aria-selected="false">Location</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                   <button class="nav-link" id="pills-logo3-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo3" type="button" role="tab" aria-controls="pills-logo3" aria-selected="false">New</button>
                   </li> -->
                </ul>
            </div>
        </div>
        <div class="tab-content tab-content-padd left-side-h left-side-h-1 h-100" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-style" role="tabpanel" aria-labelledby="pills-style-tab">
                <div class="padding-50">
                    <div class="row g-2 justify-content-center temp-row1 tab-content-mr-row" style="">
                        <div class="col-md-12">
                            <div class="row">
                                <div style="padding: 0;background-color: #000;"
                                    class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">
                                    <!-- <div style="background-color: #111;" class="col-xs-12 col-sm-5 offset-sm-0 col-md-5 temp2-bg"> -->
                                    <a href="#" class="text-decoration-none text-white">
                                            <!-- <div class="text-center">
                                                <img src="images/t2.png" class="img-fluid">
                                            </div> -->
                                            <div class="text-center temp2 temp4 temp41 temp412 firstTemp">
                                                <div class="temp-borders">
                                                    <div class="bbb1" id="bbblast">
                                                        <a class="bl-1" href="">BlondAgain</a>
                                                    </div>
                                                    <h3>Jerry<br>Lorenzo</h3>
                                                    <h5>Founder BlondAgain</h5>
                                                </div>
                                                <a class="ac-1" href="#">
                                                    <img style="width: 25px;" src="./images/ac1.PNG" alt="">
                                                    <!-- <i class="fas fa-dharmachakra"></i> -->
                                                </a>
                                                <!-- <img src="images/t3.png" class="img-fluid"> -->
                                                <!-- <a class="ac-1" href="#"><i class="fas fa-dharmachakra"></i></a> -->
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
                                                                <img class="bbb_viewed_nav bbb_viewed_prev"
                                                                    style="margin-left: 5px;" src="images/ang1.PNG"
                                                                    class="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="owl-carousel owl-theme bbb_viewed_slider">
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i style="margin-top: 2px;font-size: 26px;"
                                                                                        class="fa fa-facebook-f"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-instagram"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-whatsapp"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-pinterest-p"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-tiktok"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div>
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                <img class="bbb_viewed_nav bbb_viewed_next"
                                                                    style="margin-left: -15px;" src="images/ang2.PNG"
                                                                    class="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto"
                                    style="padding: 0;">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t1.PNG" class="img-fluid">
                                  </div> -->
                                        <div class="temp1 temp6 temp612 temp6123">
                                            <div class="temp6123-wrap" style="">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-7">
                                                        <h3>Jerry <br>Lorenzo</h3>
                                                        <h5>Founder BlondAgain</h5>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4">
                                                        <div class="bbb1">
                                                            <a class="bl-1" href="">BlondAgain</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row i2 g-3 justify-content-center">
                                                    <hr
                                                        style="position: absolute; top:-20px;right: 0; background: #fff;opacity: 1;width: 60%;height: 3px;">
                                                    <br>
                                                    <!-- <div class="bbb_main_container"> -->
                                                    <div class="col-1">
                                                        <div>
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                <img class="bbb_viewed_nav bbb_viewed_prev_2"
                                                                    style="margin-left: 5px;" src="images/ang1.PNG"
                                                                    class="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="owl-carousel owl-theme bbb_viewed_slider_2">
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i style="margin-top: 2px;font-size: 26px;"
                                                                                        class="fa fa-facebook-f"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-instagram"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-whatsapp"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-pinterest-p"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-tiktok"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div>
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                <img class="bbb_viewed_nav bbb_viewed_next_2"
                                                                    style="margin-left: -15px;" src="images/ang2.PNG"
                                                                    class="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                    <hr
                                                        style="position: absolute;bottom: 35px!important;left: 0;background: #fff;width: 60%;height: 3px;opacity: 1;">
                                                </div>
                                                <div class="text-center mx-auto">
                                                    <button class="temp-btn1"><span><img style="width:25px;"
                                                                src="./images/ac1.PNG" alt=""></span> <span
                                                            class="d-xl-inline d-xxl-inline temptext1">Add to my
                                                            Contact</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div style="padding: 0;background-color: #373532;"
                                    class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t2.png" class="img-fluid">
                                  </div> -->
                                        <div class="text-center temp2 temp4 temp41 temp410">
                                            <a class="ac-1" href="#">
                                                <img style="width:25px;" src="./images/ac1.PNG" alt="">
                                                <!-- <i class="fas fa-dharmachakra"></i> -->
                                            </a>
                                            <!-- <img src="images/t3.png" class="img-fluid"> -->
                                            <!-- <a class="ac-1" href="#"><i class="fas fa-dharmachakra"></i></a> -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h3>Jerry<br>Lorenzo</h3>
                                                    <h5>Founder BlondAgain</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="bbb1">
                                                        <a class="bl-1" href="">BlondAgain</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row i2 g-3 justify-content-center">
                                                <!-- <div class="bbb_main_container"> -->
                                                <div class="col-1">
                                                    <div>
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_prev_3"
                                                                style="margin-left: 5px;" src="images/an1.PNG" class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_3">
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i style="margin-top: 2px;font-size: 26px;"
                                                                                    class="fa fa-facebook-f"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-pinterest-p"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-tiktok"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div>
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_next_3"
                                                                style="margin-left: -15px;" src="images/an2.PNG"
                                                                class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                      <div class="row">
                          <div class="col-xs-12 col-sm-7 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto" style="padding: 0;">
                              <a href="#" class="text-decoration-none text-white">

                                  <div class="temp1 temp6 temp612">
                                      <div class="temp612-wrap" style="">
                                      <div class="row">
                                          <div class="col-xs-6 col-md-7">
                                              <h3>Kristin <br>Remy</h3>
                                              <h5>Founder BlondAgain</h5>
                                          </div>
                                          <div class="col-xs-6 col-md-4">
                                              <div class="bbb1">
                                                  <a class="bl-1" href="">BlondAgain</a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row i2 g-3 justify-content-center">
                                          <hr style="position: absolute; top:-6px; color: #fff;width: 70%;height: 2px;"><br>
                                          <div class="col-1">
                                              <div class="text-left">
                                                  <a href="#" class="text-decoration-none text-white text-left">
                                                      <i style="margin-top: 8px;margin-left: 0px;" class="fas fa-caret-left"></i>
                                                  </a>
                                              </div>
                                          </div>

                                          <div class="col-3">
                                              <div class="per-icon">
                                                  <a href="#" class="text-decoration-none text-white">
                                                      <i class="fab fa-whatsapp"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="col-3">
                                              <div class="per-icon">
                                                  <a href="#" class="text-decoration-none text-white">
                                                      <i class="fab fa-pinterest-p"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="col-3">
                                              <div class="per-icon">
                                                  <a href="#" class="text-decoration-none text-white">
                                                      <i class="fab fa-tiktok"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="col-1">
                                              <div>
                                                  <a href="#" class="text-decoration-none text-white">
                                                      <i style="margin-top: 8px;margin-left: -6px;" class="fas fa-caret-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                      <hr style="position: absolute;bottom: 15px!important;color: #fff;width: 70%;height: 2px;">
                                      </div>
                                      <button class="temp-btn1"><span><img style="width:35px;" src="./images/ac1.PNG" alt=""></span> <span  class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>


                                      </div>

                                  </div>
                              </a>
                          </div>
                      </div>
                      </div> -->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto"
                                    style="padding: 0;">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t1.PNG" class="img-fluid">
                                  </div> -->
                                        <div class="temp1 temp6 temp612">
                                            <div class="temp612-wrap" style="">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-7">
                                                        <h3>Kristin <br>Remy</h3>
                                                        <h5>Founder BlondAgain</h5>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4">
                                                        <div class="bbb1">
                                                            <a class="bl-1" href="">BlondAgain</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row i2 g-3 justify-content-center">
                                                    <hr
                                                        style="position: absolute; top:-13px; opacity: 1;color: #fff;width: 60%;height: 3px;">
                                                    <br>
                                                    <!-- <div class="bbb_main_container"> -->
                                                    <div class="col-1">
                                                        <div>
                                                            <a href="#"
                                                                class="text-decoration-none text-white bbb_viewed_nav bbb_viewed_prev_4">
                                                                <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                <i style="margin-top: 8px;margin-left: 0px;"
                                                                    class="fas fa-caret-left"></i>
                                                                <!-- <img style="margin-left: 5px;" src="images/ang1.PNG" class=""> -->
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="owl-carousel owl-theme bbb_viewed_slider_4">
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-whatsapp"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-pinterest-p"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-tiktok"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div>
                                                            <a href="#"
                                                                class="text-decoration-none text-white bbb_viewed_nav bbb_viewed_next_4"
                                                                style="">
                                                                <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                <i style="margin-top: 8px;margin-left: -6px;"
                                                                    class="fas fa-caret-right"></i>
                                                                <!-- <img style="margin-left: -15px;" src="images/ang2.PNG" class=""> -->
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                    <hr
                                                        style="position: absolute;bottom: 35px!important;color: #fff;opacity: 1;width: 60%;height: 3px;">
                                                </div>
                                                <button class="temp-btn1"><span><img style="width:25px;"
                                                            src="./images/ac1.PNG" alt=""></span> <span
                                                        class="d-xl-inline d-xxl-inline temptext1">Add to my
                                                        Contact</span></button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto"
                                    style="padding: 0;">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t1.PNG" class="img-fluid">
                                  </div> -->
                                        <div class="temp1 temp6 temp61">
                                            <a class="ac-1" href="#">
                                                <img style="width:25px;" src="./images/ac1.PNG" alt="">
                                                <!-- <i class="fas fa-dharmachakra"></i> -->
                                            </a>
                                            <div class="row">
                                                <div class="col-xs-6 col-md-7">
                                                    <h3>Kristin <br>Remy</h3>
                                                    <h5>Founder BlondAgain</h5>
                                                </div>
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="bbb1">
                                                        <a class="bl-1" href="">BlondAgain</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row i2 g-3 justify-content-center">
                                                <!-- <div class="bbb_main_container"> -->
                                                <div class="col-1">
                                                    <div>
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_prev_5"
                                                                style="margin-left: 5px;" src="images/a1.PNG" class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_5">
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i style="margin-top: 2px;font-size: 26px;"
                                                                                    class="fa fa-facebook-f"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-pinterest-p"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-tiktok"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div>
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_next_5"
                                                                style="margin-left: -15px;" src="images/a2.PNG"
                                                                class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div
                                    class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto p-0">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t1.PNG" class="img-fluid">
                                  </div> -->
                                        <div class="temp1">
                                            <a class="ac-1" href="#">
                                                <img style="width:25px;" src="./images/ac1.PNG" alt="">
                                                <!-- <i class="fas fa-dharmachakra"></i> -->
                                            </a>
                                            <div class="row">
                                                <div class="col-xs-6 col-md-7">
                                                    <h3>Kristin <br>Remy</h3>
                                                    <h5>Founder BlondAgain</h5>
                                                </div>
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="bbb1">
                                                        <a class="bl-1" href="">BlondAgain</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row i2 g-3 justify-content-center">
                                                <!-- <div class="bbb_main_container"> -->
                                                <div class="col-1">
                                                    <div>
                                                        <a href="#"
                                                            class="bbb_viewed_nav bbb_viewed_prev_6 text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <i style="color:#fff" class="fas fa-caret-left"></i>
                                                            <!-- <img class="bbb_viewed_nav bbb_viewed_prev" style="margin-left: 5px;" src="images/ang1.PNG" class=""> -->
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_6">
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i style="margin-top: 2px;font-size: 26px;"
                                                                                    class="fa fa-facebook-f"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-pinterest-p"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-tiktok"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div>
                                                        <a href="#"
                                                            class="text-decoration-none text-white bbb_viewed_nav bbb_viewed_next_6">
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <i style="color:#fff" class="fas fa-caret-right"></i>
                                                            <!-- <img class="bbb_viewed_nav bbb_viewed_next" style="margin-left: -15px;" src="images/ang2.PNG" class=""> -->
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div style="padding: 0;background-color: #D0BCA3;"
                                    class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t2.png" class="img-fluid">
                                  </div> -->
                                        <div class="text-center temp2">
                                            <!-- <img src="images/t3.png" class="img-fluid"> -->
                                            <!-- <a class="ac-1" href="#"><i class="fas fa-dharmachakra"></i></a> -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h3>Kristin</h3>
                                                    <h4>
                                                        Remy</h3>
                                                        <h5>Founder BlondAgain</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="bbb1">
                                                        <a class="bl-1" href="">BlondAgain</a>
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
                                                            <img class="bbb_viewed_nav bbb_viewed_prev_7"
                                                                style="margin-top: 5px;position: absolute;left: 12px;"
                                                                src="images/angle1.PNG" class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_7">
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon"
                                                                            style="padding: 9px!important;">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i style="font-size: 21px;margin-left: -1px;"
                                                                                    class="fa fa-facebook-f"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-pinterest-p"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-tiktok"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div style="width: 70px;">
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_next_7"
                                                                style="margin-top: 5px;position: absolute;right: 12px;"
                                                                src="images/angle11.PNG" class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                            <!-- <div class="justify-content-center"> -->
                                            <div class="text-center">
                                                <button class="temp-btn1"><span><img style="width:25px;"
                                                            src="./images/ac1.PNG" alt=""></span> <span
                                                        class="d-xl-inline d-xxl-inline temptext1">Add to my
                                                        Contact</span></button>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div style="padding: 0;background-color: #D0BCA3;"
                                    class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t2.png" class="img-fluid">
                                  </div> -->
                                        <div class="text-center temp2 temp22">
                                            <!-- <img src="images/t3.png" class="img-fluid"> -->
                                            <!-- <a class="ac-1" href="#"><i class="fas fa-dharmachakra"></i></a> -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h3>Kristin</h3>
                                                    <h4>
                                                        Remy</h3>
                                                        <h5>Founder BlondAgain</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="bbb1">
                                                        <a class="bl-1" href="">BlondAgain</a>
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
                                                            <img class="bbb_viewed_nav bbb_viewed_prev_8"
                                                                style="margin-top: 5px;position: absolute;left: 12px;"
                                                                src="images/angle1.PNG" class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_8">
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon"
                                                                            style="padding: 9px!important;">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i style="font-size: 21px;margin-left: -1px;"
                                                                                    class="fa fa-facebook-f"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-pinterest-p"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-tiktok"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div style="width: 70px;">
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_next_8"
                                                                style="margin-top: 5px;position: absolute;right: 12px;"
                                                                src="images/angle11.PNG" class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                            <!-- <div class="justify-content-center"> -->
                                            <div class="text-center">
                                                <button class="temp-btn1"><span><img style="width:25px;"
                                                            src="./images/ac1.PNG" alt=""></span> <span
                                                        class="d-xl-inline d-xxl-inline temptext1">Add to my
                                                        Contact</span></button>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div
                                    class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto p-0">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t1.PNG" class="img-fluid">
                                  </div> -->
                                        <div class="temp1 temp3">
                                            <a class="ac-1" href="#">
                                                <img style="width:25px;" src="./images/ac1.PNG" alt="">
                                                <!-- <i class="fas fa-dharmachakra"></i> -->
                                            </a>
                                            <div class="row">
                                                <div class="col-xs-6 col-md-7">
                                                    <h3>Kristin <br>Remy</h3>
                                                    <h5>Founder BlondAgain</h5>
                                                </div>
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="bbb1">
                                                        <a class="bl-1" href="">BlondAgain</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row i2 g-3 justify-content-center temp9-row">
                                                <!-- <div style="margin: auto;"> -->
                                                <!-- <div class="bbb_main_container"> -->
                                                <div class="col-1" style="margin:0">
                                                    <div style="">
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_prev_9"
                                                                style="margin-top: 5px;position: absolute;left: 12px;"
                                                                src="images/angle1.PNG" class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-10" style="margin:0">
                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_9">
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon"
                                                                            style="padding: 9px!important;">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i style="font-size: 21px;margin-left: -1px;"
                                                                                    class="fa fa-facebook-f"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-pinterest-p"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-tiktok"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-pinterest-p"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-tiktok"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1" style="margin:0">
                                                    <div style="width: 70px;">
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_next_9"
                                                                style="margin-top: 5px;position: absolute;right: 12px;"
                                                                src="images/angle11.PNG" class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                                <!-- </div> -->
                                            </div>
                                            <!-- <div class="row g-3 justify-content-center soc-row">
                               <div class="" style="margin:auto">
                                   <div class="">
                                       <a href="#" class="text-decoration-none text-white">
                                           <img class="bbb_viewed_nav bbb_viewed_prev_9" style="margin-left: 5px;" src="images/arr1.PNG" class="">

                                       </a>
                                   </div>
                                   <div class="owl-carousel owl-theme bbb_viewed_slider_9">
                                       <div class="owl-item">
                                           <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                   <div class="per-icon">
                                       <a href="#" class="text-decoration-none text-white">
                                           <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>
                                       </a>
                                   </div>
                               </div>
                               </div>
                               <div class="owl-item">
                               <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                   <div class="per-icon">
                                       <a href="#" class="text-decoration-none text-white">
                                           <i class="fab fa-instagram"></i>
                                       </a>
                                   </div>
                               </div>
                               </div>
                               <div class="owl-item">
                               <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                   <div class="per-icon">
                                       <a href="#" class="text-decoration-none text-white">
                                           <i class="fab fa-whatsapp"></i>
                                       </a>
                                   </div>
                               </div>
                               </div>
                               <div class="owl-item">
                               <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                   <div class="per-icon">
                                       <a href="#" class="text-decoration-none text-white">
                                           <i class="fab fa-pinterest-p"></i>
                                       </a>
                                   </div>
                               </div>
                               </div>
                               <div class="owl-item">
                               <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                   <div class="per-icon">
                                       <a href="#" class="text-decoration-none text-white">
                                           <i class="fab fa-tiktok"></i>
                                       </a>
                                   </div>
                               </div>
                               </div>
                               <div class="owl-item">
                               <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                   <div class="per-icon">
                                       <a href="#" class="text-decoration-none text-white">
                                           <i class="fab fa-whatsapp"></i>
                                       </a>
                                   </div>
                               </div>
                               </div>
                               <div class="owl-item">
                               <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                   <div class="per-icon">
                                       <a href="#" class="text-decoration-none text-white">
                                           <i class="fab fa-pinterest-p"></i>
                                       </a>
                                   </div>
                                   </div>
                               </div>
                               </div>
                                   <div>
                                       <a href="#" class="text-decoration-none text-white">
                                           <img style="margin-top: -20px;margin-left: 5px;" src="images/arr2.PNG"  class="bbb_viewed_nav bbb_viewed_next_9">

                                       </a>
                                   </div>
                               </div>

                               </div> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div
                                    class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto p-0">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t1.PNG" class="img-fluid">
                                  </div> -->
                                        <div style="background-repeat: no-repeat!important;background-size: cover!important;"
                                            class="temp1 temp5">
                                            <a class="ac-1" href="#">
                                                <img style="width:25px;" src="./images/ac1.PNG" alt="">
                                                <!-- <i class="fas fa-dharmachakra"></i> -->
                                            </a>
                                            <div class="temp5-wrap">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-7">
                                                        <h3>Alex <br>Mustermann</h3>
                                                        <h5>Founder WEUNIT</h5>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4">
                                                        <div class="bbb1">
                                                            <a class="bl-1" href="">BlondAgain</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="opacity:1">
                                                <div class="row i2 g-3 justify-content-center">
                                                    <!-- <div class="bbb_main_container"> -->
                                                    <div class="col-1">
                                                        <div>
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                <img class="bbb_viewed_nav bbb_viewed_prev_10"
                                                                    style="margin-left: 5px;" src="images/ar1.PNG"
                                                                    class="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="owl-carousel owl-theme bbb_viewed_slider_10">
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i style="margin-top: 2px;font-size: 26px;"
                                                                                        class="fa fa-facebook-f"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-instagram"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-whatsapp"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-pinterest-p"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item">
                                                                <div
                                                                    class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="row">
                                                                        <div class="col-2 mx-auto">
                                                                            <div class="per-icon">
                                                                                <a href="#"
                                                                                    class="text-decoration-none text-white">
                                                                                    <i class="fab fa-tiktok"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <div>
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                <img class="bbb_viewed_nav bbb_viewed_next_10"
                                                                    style="margin-left: -15px;" src="images/ar2.PNG"
                                                                    class="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto"
                                    style="padding: 0;">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <div class="text-center">
                                  <img src="images/t1.PNG" class="img-fluid">
                                  </div> -->
                                        <div class="temp1 temp6 temp622">
                                            <a class="ac-1" href="#">
                                                <img style="width:25px;" src="./images/ac1.PNG" alt="">
                                                <!-- <i class="fas fa-dharmachakra"></i> -->
                                            </a>
                                            <div class="row">
                                                <div class="col-xs-6 col-md-7">
                                                    <h3>Kristin <br>Remy</h3>
                                                    <h5>Founder BlondAgain</h5>
                                                </div>
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="bbb1">
                                                        <a class="bl-1" href="">BlondAgain</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row last-row i2 g-3 justify-content-center">
                                                <!-- <div class="bbb_main_container"> -->
                                                <div class="col-1">
                                                    <div>
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_prev_11"
                                                                style="margin-left: 5px;" src="images/a1.PNG" class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="owl-carousel owl-theme bbb_viewed_slider_11">
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i style="margin-top: 2px;font-size: 26px;"
                                                                                    class="fa fa-facebook-f"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-pinterest-p"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div
                                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                <div class="row">
                                                                    <div class="col-2 mx-auto">
                                                                        <div class="per-icon">
                                                                            <a href="#"
                                                                                class="text-decoration-none text-white">
                                                                                <i class="fab fa-tiktok"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div>
                                                        <a href="#" class="text-decoration-none text-white">
                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                            <img class="bbb_viewed_nav bbb_viewed_next_11"
                                                                style="margin-left: -15px;" src="images/a2.PNG"
                                                                class="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-background" role="tabpanel" aria-labelledby="pills-background-tab">
                <div class="padding-50 ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center pb-3 pt-3">
                                <p>Color</p>
                                <div class="container-fluid">
                                    <div class="vue-color-picker">
                                        <div class="vue-color-picker-container">
                                            <div id="vue_chrome_picker">
                                                <chrome-color v-model="color"></chrome-color>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="gradient">
                               <div class="picker">
                                 <div class="inner"></div>
                               </div>
                               <div class="overlay"></div>
                               <div class="overlay"></div>
                               </div>
                               <div class="slider">
                               <div class="track"></div>
                               <div class="thumb"></div>
                               </div>
                               <div class="rgb">
                               RGB: 255,255,255
                               </div> -->
                                </div>
                            </div>
                            <hr>
                            <div class="upload text-center pt-3 pb-3">
                                <label for="upload"><span>Image Upload</span> <span><i
                                            class="fas fa-upload"></i></span></label>
                                <input type="file" class="form-control" name="" id="upload">
                            </div>
                            <hr>
                            <div class="text-center pt-3 pb-3">
                                <label class="text-capitalize">
                                    <span>online image platform</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile-image" role="tabpanel"
                aria-labelledby="pills-profile-image-tab">
                <div class="padding-50">
                    <div class="upload text-center pt-3 pb-3">
                        <label for="upload"><span>Image Upload</span> <span><i class="fas fa-upload"></i></span></label>
                        <input type="file" class="form-control" name="" id="upload">
                    </div>
                    <hr>
                    <div class="text-center pt-3 pb-3">
                        <label class="text-capitalize">
                            <span>online image platform</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile-video" role="tabpanel"
                aria-labelledby="pills-profile-video-tab">
                <div class="padding-50">
                    <div class="upload text-center pt-3 pb-3">
                        <label for="upload"><span>Video Upload</span> <span><i class="fas fa-upload"></i></span></label>
                        <input type="file" class="form-control" name="" id="upload">
                    </div>
                    <hr>
                    <div class="text-center pt-3 pb-3">
                        <label class="text-capitalize">
                            <span>online Video platform</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">
                <div class="padding-50">
                    <div class="upload text-center pt-3 pb-3">
                        <label for="upload"><span>Image Upload</span> <span><i class="fas fa-upload"></i></span></label>
                        <input type="file" class="form-control" name="" id="upload">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-font" role="tabpanel" aria-labelledby="pills-font-tab">
                <div class="padding-50 ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row row-cols-lg-5 row-cols-3 g-3">
                                <div class="col">
                                    <p class="mb-0 font-size-12"><strong>Arial</strong></p>
                                    <p class="mb-0 font-size-12">Arial</p>
                                    <p class="mb-0 font-size-12">Arial</p>
                                    <p class="mb-0 font-size-12">Arial</p>
                                    <p class="mb-0 font-size-12">Arial</p>
                                </div>
                                <div class="col">
                                    <p class="mb-0 font-size-12"><strong>Tahoma</strong></p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                </div>
                                <div class="col">
                                    <p class="mb-0 font-size-12"><strong>Arial</strong></p>
                                    <p class="mb-0 font-size-12">Arial</p>
                                    <p class="mb-0 font-size-12">Arial</p>
                                    <p class="mb-0 font-size-12">Arial</p>
                                    <p class="mb-0 font-size-12">Arial</p>
                                </div>
                                <div class="col">
                                    <p class="mb-0 font-size-12"><strong>Tahoma</strong></p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                </div>
                                <div class="col">
                                    <p class="mb-0 font-size-12"><strong>Tahoma</strong></p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                    <p class="mb-0 font-size-12">Tahoma</p>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <div>
                                    <p class="fw-bold font-size-12">Size</p>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <p class="mb-0 font-size-12">Small</p>
                                    </div>
                                    <div>
                                        <p class="mb-0 font-size-12">Medium</p>
                                    </div>
                                    <div>
                                        <p class="mb-0 font-size-12">Large</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <p class="fw-bold font-size-12">Color</p>
                                <div class="container">
                                    <div class="gradient">
                                        <div class="picker">
                                            <div class="inner"></div>
                                        </div>
                                        <div class="overlay"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="slider">
                                        <div class="track"></div>
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="rgb">
                                        RGB: 255,255,255
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-logo1" role="tabpanel" aria-labelledby="pills-logo1-tab">
                <div class="padding-50">
                    <div class="upload text-center pt-3 pb-3">
                        <!-- <label for="upload"><span>Choose</span> <span><i class="fas fa-upload"></i></span></label> -->
                        <!-- <input type="text" class="form-control" placeholder="Enter..." name="" id=""> -->
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <textarea class="form-control" placeholder="Enter.." name="message" id="message"
                                    cols="30" rows="7"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-logo2" role="tabpanel" aria-labelledby="pills-logo2-tab">
                <div class="padding-50">
                    <div class="upload text-center pt-3 pb-3">
                        <label for="upload"><span>Choose Your Location</span> <span><i
                                    class="fas fa-upload"></i></span></label>
                        <input type="file" class="form-control" name="" id="upload">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-logo3" role="tabpane" aria-labelledby="pills-logo3-tab">
                <div class="padding-50">
                    <div class="upload text-center pt-3 pb-3">
                        <label for="upload"><span>New</span> <span><i class="fas fa-upload"></i></span></label>
                        <input type="file" class="form-control" name="" id="upload">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-xxl-4" id="designTabFix1" style="padding:0;">
        <div class="left-side-h remove-margin" style="height:550px;margin-top: 220px;border-left: 1px solid grey;">
            <div class="text-end">
                <span><i class="fas fa-mobile-alt fs-3"></i></span>&nbsp;&nbsp;&nbsp;
                <span class="ms-2"><i class="fas fa-laptop fs-3"></i></span>
            </div>
            <div class="" style="margin-top: 1rem!important;height:92%;display: flex;
             justify-content: center;
             align-items: center;
             color: #000;
             font-family: sans-serif;
             font-weight: bold;
             background: #C1C1C1;border: 1px solid grey;">
                <!-- <img style="width:100%" src="images/placeholder-2.png" class="img-fluid"> -->
                <span>Preview</span>
            </div>
        </div>
    </div>
</div>
@endsection
