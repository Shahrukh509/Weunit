@extends('layouts.master')

@section('section')

<div class="row help-m">
    <div class="col-lg-12">

        <!-- <ul class="nav nav-pills mb-3 justify-content-around personal-tab overflow-hidden" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-private1-tab" data-bs-toggle="pill" data-bs-target="#pills-private1" type="button" role="tab" aria-controls="pills-private1" aria-selected="true">Frequently Asked Questions</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-business1-tab" data-bs-toggle="pill" data-bs-target="#pills-business1" type="button" role="tab" aria-controls="pills-business1" aria-selected="false">Contact</button>
          </li>
        </ul> -->
        <div class="container-fluid">
            <div class="">
              <div class="row">
            @if(Session::has('success'))
                <div class="alert alert-success" id="alert">
                    <strong>Success:</strong> {{Session::get('success')}}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger" id="alert">
                    <strong>Error:</strong>{{Session::get('error')}}
                </div>
            @endif
        </div>
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" style="padding: 0;">

                        <ul class="nav nav-pills mb-5 overflow-hidden nav-help" id="pills-tab" role="tablist">
                            <li role="presentation">
                              <button class="nav-link link111 active" id="pills-private1-tab" data-bs-toggle="pill" data-bs-target="#pills-private1" type="button" role="tab" aria-controls="pills-private1" aria-selected="true">Frequently Asked Questions</button>
                            </li>&nbsp;
                            <li class="per-tab-ul-li" role="presentation" style="">
                              <button class="nav-link link112" id="pills-business1-tab" data-bs-toggle="pill" data-bs-target="#pills-business1" type="button" role="tab" aria-controls="pills-business1" aria-selected="false">Contact</button>
                            </li>
                          </ul>
                        <!-- <ul class="nav nav-pills mb-5 overflow-hidden nav-help" style="" id="pills-tab" role="tablist">
                            <li role="presentation"><a href="" class="active" id="pills-private1-tab" data-bs-toggle="pill" data-bs-target="#pills-private1" type="button" role="tab" aria-controls="pills-private1" aria-selected="true">Frequently Asked Questions</a></li>
                            <li role="presentation" style="margin-left: 35px!important;"><a href="" id="pills-business1-tab" data-bs-toggle="pill" data-bs-target="#pills-business1" type="button" role="tab" aria-controls="pills-business1" aria-selected="false">Contact</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- <ul class="nav nav-pills mb-5 overflow-hidden nav-help" style="" id="pills-tab" role="tablist">
            <li role="presentation"><a href="" class="active" id="pills-private1-tab" data-bs-toggle="pill" data-bs-target="#pills-private1" type="button" role="tab" aria-controls="pills-private1" aria-selected="true">Frequently Asked Questions</a></li>
            <li role="presentation" style="margin-left: 35px!important;"><a href="" id="pills-business1-tab" data-bs-toggle="pill" data-bs-target="#pills-business1" type="button" role="tab" aria-controls="pills-business1" aria-selected="false">Contact</a></li>
        </ul> -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-private1" role="tabpanel" aria-labelledby="pills-private1-tab">
                <div class="paddingg-50">
                  <div>
                      <!--=========================
            start of questions
            ===========================---->
            <section id="questions">

                <script>
                    @if(Session::has('message'))
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true
                    }
                            toastr.success("{{ session('message') }}");
                    @endif

                    @if(Session::has('error'))
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true
                    }
                            toastr.error("{{ session('error') }}");
                    @endif

                    @if(Session::has('info'))
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true
                    }
                            toastr.info("{{ session('info') }}");
                    @endif

                    @if(Session::has('warning'))
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true
                    }
                            toastr.warning("{{ session('warning') }}");
                    @endif
                </script>

                <div class="container-fluid questions-container">
                <div class="">
                    <div class="row">

                        <div class="col-md-7 col-lg-6 col-xl-8 col-xxl-6 wow fadeInUp">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-1">1.Where do I add my logo/design?</a>
                                   <span class="s-icon1">+</span>
                                   <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non. volutpat lacus Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida id volutpat lacus</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree8">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree8" aria-expanded="false" aria-controls="collapseThree8">
                                          <a data-parent="#accordion" data-toggle="collapse" href="#pan-11">2.How does this work?</a>
                                          <span class="s-icon1">+</span>
                                          <span class="s-icon2">x</span>
                                      </button>
                                    </h2>
                                    <div id="collapseThree8" class="accordion-collapse collapse" aria-labelledby="headingThree8" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                          <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                      </div>
                                    </div>
                                  </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-2">3.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-3">4.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-4">5.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-5">6.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-6">7.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-7">8.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-8">9.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-9">10.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-10">11.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree9" aria-expanded="false" aria-controls="collapseThree9">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#pan-12">12.How does this work?</a>
                                        <span class="s-icon1">+</span>
                                        <span class="s-icon2">x</span>
                                    </button>
                                  </h2>
                                  <div id="collapseThree9" class="accordion-collapse collapse" aria-labelledby="headingThree9" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!--=========================
                end of questions
            ===========================---->
                  </div>
                </div>
            </div>
            <div class="tab-pane fade help-form" id="pills-business1" role="tabpanel" aria-labelledby="pills-business1-tab">

                <div class="padding-50 left-side-h">
                  <div>
                    <div class="content">



                        <div class="">
                          <div class="row">
                            <div class="form-p text-center col-md-8 col-lg-12 col-xl-12 col-xxl-7 mr-auto">

                              <p class="mt-2 mb-0">Did one of your questions remain unanswered in the FAQs?</p>
                              <p class="mb-4">Please contact our customer service. We will contact you personally as sonn as possible.</p>
                            </div>

                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                              <form class="mb-5 contactForm1" method="POST" id="contactForm" action="{{ route('store-contact') }}" name="contactForm">
                                @csrf
                                <div class="row">

                                  <div class="col-md-12 form-group mb-3">
                                    <input type="text" placeholder="Name" class="form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group mb-3">
                                    <input type="email" placeholder="E-mail" class="form-control" name="email" id="email" required>
                                  </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group mb-3">
                                    <input type="number" placeholder="Phone" class="form-control" name="phone" id="phone">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12 form-group mb-3">
                                    <textarea class="form-control" placeholder="Message" name="message" id="message" cols="30" rows="7"></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <input style="border-radius: 30px!important;background-color: #07f5cb!important;border: 1px solid #07f5cb;margin-top: 10px;" type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                  </div>
                                </div>

                                {{-- <button type="submit">save</button> --}}
                              </form>

                              <div id="form-message-warning mt-4"></div>
                              <!-- <div id="form-message-success">
                                Your message was sent, thank you!
                              </div> -->
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
