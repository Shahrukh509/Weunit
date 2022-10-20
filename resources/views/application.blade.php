@extends('layouts.master')

@section('section')
    <div class="row">

        <div class=" offset-lg-0 col-lg-4 offset-xl-0 col-xl-4 pe-0  left-side-h left-side-h-0" style="margin-top: 50px;"
            id="designTabFix">
            <div class="padding-50 text-center" style="padding-right: 20px;">
                <div>
                    <input type="text" class="form-control border-0 bg-transparent" placeholder="Search" name="">
                </div>
                <hr class="me-3" style="width: 85%;">
                <div class="social-mdeia socialHide2">

                    <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row1">
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app11">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-facebook-messenger"></i>
                                    <!-- <i class="fab fa-instagram"></i> -->
                                    <!-- <img style="width: 50px;margin-left: -4px;margin-top: -4px;" src="./images/insta2.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app2">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-weixin"></i>
                                    <!-- <img src="./images/fb.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app3">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-telegram"></i>
                                    <!-- <img src="./images/tw.PNG" alt=""> -->
                                    <!-- <i class="fab fa-twitter"></i> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app4">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/you.PNG" alt=""> -->
                                    <!-- <i class="fab fa-youtube"></i> -->
                                    <i class="fab fa-qq"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app5">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/ball.PNG" alt=""> -->
                                    <!-- <i class="fab fa-whatsapp"></i> -->
                                    <i class="fab fa-weibo"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row2">
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app6">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/whats.PNG" alt=""> -->
                                    <!-- <i class="fab fa-whatsapp"></i> -->
                                    <i class="fab fa-reddit"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app7">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fas fa-phone-alt"></i> -->
                                    <i class="fab fa-quora"></i>
                                    <!-- <img src="./images/phone.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app8">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-skype"></i>
                                    <!-- <img src="./images/snap.PNG" alt=""> -->
                                    <!-- <i class="fab fa-instagram"></i> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app9">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-snapchat-ghost"></i> -->
                                    <i class="fab fa-viber"></i>
                                    <!-- <img src="./images/pin.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app10">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-line"></i>
                                    <!-- <img src="./images/link.PNG" alt=""> -->
                                    <!-- <i class="fab fa-pinterest-p"></i> -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row3">
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app1" style="padding: 7px 7px 7px 4px;">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/insta.PNG" alt=""> -->
                                    <i class="fab fa-discord"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app2">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/fb.PNG" alt=""> -->
                                    <i class="fab fa-twitch"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app3">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/tw.PNG" alt=""> -->
                                    <i class="fab fa-xing"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app4">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/you.PNG" alt=""> -->
                                    <i class="fab fa-spotify"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app5">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-amazon"></i>
                                    <!-- <img src="./images/ball.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row4">
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app6">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-vimeo-v"></i>
                                    <!-- <img src="./images/whats.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app7">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-paypal"></i>
                                    <!-- <img src="./images/phone.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app8" style="padding: 7px 7px 7px 3px;">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fa fa-tripadvisor"></i>
                                    <!-- <img src="./images/snap.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app9">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/pin.PNG" alt=""> -->
                                    <i class="fa fa-map-marker"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app10">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-instagram"></i> -->
                                    <!-- <img style="width: 20px;margin-top: -8px;" src="./images/tieba.png" alt=""> -->
                                    <i class="fa fa-home"></i>
                                    <!-- <img style="width: 15px;margin-top: -5px;" src="./images/netflix.png" alt=""> -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row4">
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app1">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/insta.PNG" alt=""> -->
                                    <!-- <img style="width: 20px;margin-top: -8px;" src="./images/clubhouse.png" alt=""> -->
                                    <i class="fa fa-comments"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app2">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-facebook-f"></i>
                                    <!-- <img src="./images/fb.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app3">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/tw.PNG" alt=""> -->
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app4">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/you.PNG" alt=""> -->
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app5">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/ball.PNG" alt=""> -->
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row4">
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app6">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fa fa-heart"></i>
                                    <!-- <img src="./images/whats.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app7">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fas fa-phone-alt"></i>
                                    <!-- <img src="./images/phone.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app8">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-tiktok"></i>
                                    <!-- <img src="./images/snap.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app9">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-snapchat-ghost"></i>
                                    <!-- <img src="./images/pin.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app00 per-icon-app10">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/link.PNG" alt=""> -->
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <img class="next1" src="./images/arrow.png" alt="">
                    <!-- <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row4">
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fas fa-phone-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-snapchat-ghost"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        </div> -->
                </div>
                <div class="social-mdeia socialHide1">


                    <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row4">
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app6">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-whatsapp"></i> -->
                                    <img src="{{ asset('assets/images/ball.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app7">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-tiktok"></i> -->
                                    <img src="{{ asset('assets/images/phone.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app8">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-snapchat-ghost"></i> -->
                                    <img src="{{ asset('assets/images/snap.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app9">
                                <a href="#" class="text-decoration-none text-white">
                                    <img src="{{ asset('assets/images/pin.png') }}" alt="">
                                    <!-- <i class="fab fa-pinterest-p"></i> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app10">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-instagram"></i> -->
                                    <img src="{{ asset('assets/images/link.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row4">
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app6">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-whatsapp"></i> -->
                                    <img src="{{ asset('assets/images/insta.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app7">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-tiktok"></i> -->
                                    <img src="{{ asset('assets/images/fb.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app8">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-snapchat-ghost"></i> -->
                                    <!-- <img src="./images/snap.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app9">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <img src="./images/pin.PNG" alt=""> -->
                                    <!-- <i class="fab fa-pinterest-p"></i> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                            <div class="per-icon-app per-icon-app10">
                                <a href="#" class="text-decoration-none text-white">
                                    <!-- <i class="fab fa-instagram"></i> -->
                                    <!-- <img src="./images/link.PNG" alt=""> -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <img class="next" src="{{ asset('assets/images/arrow.png') }}" alt="">
                    <!-- <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row4">
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fas fa-phone-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-snapchat-ghost"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <div class="per-icon">
                                <a href="#" class="text-decoration-none text-white">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        </div> -->
                </div>

                <div class="d-flex p-3 mt-3 soc-row-insta">
                    <div>
                        <label style="margin-top: 5px;">Instagram</label>
                    </div>
                    <div class="w-100 me-lg-3">
                        <input type="text" class="form-control border-0 border-bottom border-2 rounded-0 bg-transparent"
                            placeholder="weunitnet" name="">
                    </div>
                </div>
                <hr class="hr-1">

                <div>
                    <div class="d-flex justify-content-center pt-3 pb-3">
                        <p>
                            Cronology
                        </p>
                        <img style="margin: -4px 0 10px 5px" src="images/hands.png" class="img-fluid">
                    </div>
                    <div class="soc-bot1 soc-bothide1">
                        <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row1 soc-bot">
                            <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                                <div class="per-icon-app per-icon-app1">
                                    <a href="#" class="text-decoration-none text-white">
                                        <img src="{{ asset('assets/images/insta.png') }}" alt="">
                                        <!-- <i class="fab fa-instagram"></i> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                                <div class="per-icon-app per-icon-app2">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <i class="fab fa-facebook-f"></i> -->
                                        <img src="{{ asset('assets/images/fb.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                                <div class="per-icon-app per-icon-app3">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <i class="fab fa-whatsapp"></i> -->
                                        <img src="{{ asset('assets/images/tw.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                                <div class="per-icon-app per-icon-app4">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <i class="fab fa-twitter"></i> -->
                                        <img src="{{ asset('assets/images/you.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 mx-auto">
                                <div class="per-icon-app per-icon-app5">
                                    <a href="#" class="text-decoration-none text-white">
                                        <!-- <i class="fab fa-youtube"></i> -->
                                        <img src="{{ asset('assets/images/ball.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="col-2">
                                <div>
                                    <a style="margin-left: 45px;" href="#" class="text-decoration-none text-white">
                                        <img style="margin-top: 5px; width: 15px; height: 100%;" src="images/arrow.png" class="img-fluid">
                                    </a>
                                </div>
                            </div> -->
                        </div>
                        <img class="next3" src="{{ asset('assets/images/arrow.png') }}" alt="">
                    </div>
                    <div class="soc-bot1 soc-bothide2">
                        <div class="row row-cols-lg-5 row-cols-5 g-3 social-cols-1 soc-row1 soc-bot">
                            <div class="col-xs-1 col-sm-1 col-md-1 ">
                                <div class="per-icon-app per-icon-app1">
                                    <a href="#" class="text-decoration-none text-white">
                                        <img src="{{ asset('assets/images/link.png') }}" alt="">
                                        <!-- <i class="fab fa-instagram"></i> -->
                                    </a>
                                </div>
                            </div>

                            <!-- <div class="col-2">
                                <div>
                                    <a style="margin-left: 45px;" href="#" class="text-decoration-none text-white">
                                        <img style="margin-top: 5px; width: 15px; height: 100%;" src="images/arrow.png" class="img-fluid">
                                    </a>
                                </div>
                            </div> -->
                        </div>
                        <img class="next4" src="{{ asset('assets/images/arrow.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xxl-4 app-margin" style="padding:0;" id="designTabFix1">
            <div class="left-side-h" style="height:550px;margin-top: 100px;border-left: 1px solid grey;">
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
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.next').click(function() {
                $('.socialHide2').animate({
                    height: "315px"
                }, 400);
                $('.socialHide1').animate({
                    height: "0px"
                }, 400);
                $('.socialHide2').slideDown(1000);
            });
            $('.next1').click(function() {
                $('.socialHide1').animate({
                    height: "315px"
                }, 400);
                $('.socialHide2').animate({
                    height: "0px"
                }, 400);
                $('.socialHide1').slideDown(1000);
            });
            $('.next3').click(function() {
                $('.soc-bothide2').animate({
                    height: "45px"
                }, 400);
                $('.soc-bothide1').animate({
                    height: "0px"
                }, 400);
                $('.soc-bothide2').slideDown(1000);
            });
            $('.next4').click(function() {
                $('.soc-bothide1').animate({
                    height: "45px"
                }, 400);
                $('.soc-bothide2').animate({
                    height: "0px"
                }, 400);
                $('.soc-bothide1').slideDown(1000);
            });
        });
    </script>
@endpush
