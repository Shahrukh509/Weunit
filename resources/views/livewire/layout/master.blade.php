
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>WeUnit</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}" />

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <link rel="icon" href="{{ asset('public/assets/images/favicon.jpg') }}">
      <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min (2).css"> -->
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style1.css') }}"> --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/font-awesome-5.min.css') }}"> --}}

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/font-awesome.css') }}"> --}}


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

      {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> --}}

      <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

      @livewireStyles

      {{-- <script type="text/javascript">
        $(document).ready(function(){
          $('.slick-carousel').slick({
            setting-name: setting-value
          });
        });
      </script> --}}




      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <link rel="stylesheet" type="text/css"
       href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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
    </script> --}}


    </head>
   <body class="bg-color">
      <section class="">
         <div class="container-fluid">
            <div class="row">
               <div class="fix-col col-lg-2 col-xl-2 col-xxl-2 col-2 col-md-2 pe-lg-0 p-0">
                  <div class="bar">
                     <div class="side-bar bg-black">
                        <div class="text-center logo-div d-none d-lg-none d-xl-block d-xxl-block">
                           <div id="topCoverImage"></div>
                           <img src="{{ asset('public/assets/images/weunitlogo.png') }}" class="img-fluid ">
                        </div>
                        <div class="text-center logo-div d-block d-lg-block d-xl-none d-xxl-none">
                           <img src="" class="img-fluid ">
                        </div>
                        <div class="" style="margin-top: 2.5rem!important;">
                           <div class="nav flex-column nav-pills nav-custom-pill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <a href="{{ route('home') }}" style="padding: 0.9rem 1rem;" class="nav-link @if(Route::CurrentRouteName() == 'home') active  @endif nav-btn1" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                 <b></b>
                                 <b></b>
                                 <span class="navicon1"><i class="fas fa-home"></i></span> <span class="d-none d-xl-inline d-xxl-inline navtext1">Home</span>
                                 <!-- <img src="images/active-shape.png" class="active-shape" alt=""> -->
                              </a>
                              <a href="{{ route('personalown') }}" style="padding: 0.9rem 1rem;" class="nav-link @if(Route::CurrentRouteName() == 'personalown') active  @endif nav-btn1" type="button" role="tab" aria-controls="v-pills-personal" aria-selected="false">
                                 <b></b>
                                 <b></b>
                                 <span class="navicon1"><i class="fas fa-user"></i></span> <span  class="d-none d-xl-inline d-xxl-inline navtext1">Personal</span>
                                 <!-- <img src="images/active-shape.png" class="active-shape" alt=""> -->
                              </a>
                              <a href="{{ route('design') }}" style="padding: 0.9rem 1rem;" class="nav-link @if(Route::CurrentRouteName() == 'design') active  @endif nav-btn1" type="button" role="tab" aria-controls="v-pills-design" aria-selected="false">
                                 <b></b>
                                 <b></b>
                                 <span class="navicon1"><i class="fas fa-fill"></i></span> <span  class="d-none d-xl-inline d-xxl-inline navtext1">Design</span>
                                 <!-- <img src="images/active-shape.png" class="active-shape" alt=""> -->
                              </a>
                              <a href="{{ route('application') }}" style="padding: 0.9rem 1rem;" class="nav-link @if(Route::CurrentRouteName() == 'application') active  @endif nav-btn1" type="button" role="tab" aria-controls="v-pills-app" aria-selected="false">
                                 <b></b>
                                 <b></b>
                                 <span class="navicon1"><i class="fas fa-puzzle-piece"></i></span><span  class="d-none d-xl-inline d-xxl-inline navtext1 navtext11">Application</span>
                                 <!-- <img src="images/active-shape.png" class="active-shape" alt=""> -->
                              </a>
                              <a href="{{ route('statistics') }}" style="padding: 0.9rem 1rem;" class="nav-link @if(Route::CurrentRouteName() == 'statistics') active  @endif nav-btn1"  type="button" role="tab" aria-controls="v-pills-statistics" aria-selected="false">
                                 <b></b>
                                 <b></b>
                                 <span class="navicon1"><i class="fas fa-chart-pie"></i></span> <span  class="d-none d-xl-inline d-xxl-inline navtext1">Statistics</span>
                                 <!-- <img src="images/active-shape.png" class="active-shape" alt=""> -->
                              </a>
                              <a href="{{ route('help') }}" style="padding: 0.9rem 1rem;" class="nav-link @if(Route::CurrentRouteName() == 'help') active  @endif nav-btn1" type="button" role="tab" aria-controls="v-pills-help" aria-selected="false">
                                 <b></b>
                                 <b></b>
                                 <span class="navicon1"><i class="fas fa-question-circle"></i></span> <span  class="d-none d-xl-inline d-xxl-inline navtext1">Help</span>
                                 <!-- <img src="images/active-shape.png" class="active-shape" alt=""> -->
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- side bar end -->
               <!-- right content area start -->
               <div class="col-lg-10 col-xl-10 col-xxl-10 ps-lg-0 col-10">
                  <div class="right-content">
                        <div class="tab-content b-space" id="v-pills-tabContent">
                           <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                           <!-- profile image start -->
                           <div class="row">
                              <div class="col-lg-9 col-xxl-8">
                                 <div class="d-flex justify-content-end" id="designTabFix3">
                                    <!-- <label for="">  </label> -->
                                    <!-- <div> -->
                                    <div class="profile-img py-2 size-mobile">
                                        <!--@if(!empty(Auth::user()->profile_image) && file_exists( storage_path('/app/public/').Auth::user()->profile_image))-->
                                        <!--    <img style="width: 47px; height: 47px;" src="{{  asset("storage/".Auth::user()->profile_image) }}" class="img-fluid rounded-circle">-->
                                        <!--    {{-- <img src="{{ asset('public/assets/images/avatar.jpg') }}" class="img-fluid rounded-circle"> --}}-->
                                        <!--@else-->
                                        <!--    <img src="{{ asset('public/assets/images/avatar.jpg') }}" class="img-fluid rounded-circle">-->
                                        <!--@endif-->
                                        
                                        
                                         {{-------- update by kamal bd ----------}}
<img class="rounded-circle header-profile-user" src="{{ asset(!empty(Auth::user()->profile_image)? url('public/upload/adminimg/'.Auth::user()->profile_image) : url('upload/noimg.png')) }}"
alt="img" style="width: 47px;height:47px">


                                    </div>
                                    <div class="ms-2 py-lg-3 lh-lg-1 lh-mobile">
                                       <!-- <p class="mb-0 font-size-12 fw-bold">Odo Dink</p> -->
                                       <div class="dropdown">
                                          <button class="dropbtn">{{ Auth::user()->firstname.' '.Auth::user()->surname }}</button>
                                          <div class="dropdown-content">
                                             <a class="dropdown-item" href="{{ route('editProfile') }}">Profile</a>
                                             <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Sign Out</a>
                                          </div>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                          </form>
                                       </div>
                                       <span class="font-size-12">Super Admin</span>
                                    </div>
                                    <!-- </div> -->
                                 </div>
                              </div>
                           </div>
                           <!-- profile image -->
                           {{$slot}}
                        </div>

                    </div>
               </div>
            </div>
         </div>
      </section>


      @include('livewire.layout.footer-component')



   </body>
</html>
