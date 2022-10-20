@extends('layouts.master')

@section('section')
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
        <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane fade show active" id="pills-private" role="tabpanel" aria-labelledby="pills-private-tab">
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
                                    <input type="text" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
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
                                    <input type="text" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
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
                                    <input type="text" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
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
                                    <input type="text" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                              <!-- </form> -->
                        </div>
                    </div>
                </div>
              </div>

          <div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">

                  <div class="padding-50 left-side-h left-side-h-0">
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
                                    <input type="text" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
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
                                    <input type="text" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
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
                                    <input type="text" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
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
                                    <input type="text" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
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
                                    <input type="text" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="phone">
                                  </div>
                                </div>
                              <!-- </form> -->
                        </div>
                    </div>
                </div>


          </div>
        </div>

    </div>


    <div class="col-lg-5 col-xxl-4" style="padding:0;" id="designTabFix1">
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
