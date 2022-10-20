<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP | LogIn</title>

    <link href="{{ asset('public/assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/signup.css">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<style type="text/css">
    form i {
    margin-left: -30px;
    cursor: pointer;
}

    /* ---------------- Start Update by kamal ------------ */
        .icon-addon .fa {
            position: absolute;
            z-index: 2;
            left: 194px;
            font-size: 14px;
            width: 20px;
            margin-left: -2.5px;
            text-align: center;
            padding: 10px 0;
            top: 10px
        }
    /* ---------------- End Update by kamal ------------ */
        
</style>

</head>
<body   >
    <section>

        <div class="container" id="container">
            <div class="form-container sign-up-container">
              <form method="POST" action="{{ route('register-store') }}">
                @csrf
                <h1>Create Account</h1>
                <span>or use your email for registration</span>
                <div class="text">
                    <input id="firstname" type="text" placeholder="First Name" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="name" autofocus>
                    <a class="field-icon1" id=""><i class="fa fa-user"></i></a>
                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="text">
                    <input id="surname" type="text" placeholder="Last Name" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                    <a class="field-icon1" id=""><i class="fa fa-user"></i></a>
                    @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="text">
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <a class="field-icon1" id=""><i class="fa fa-envelope"></i></a>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="text">
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <a class="field-icon1" id=""><i class="fa fa-lock"></i></a>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="text">
                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <a class="field-icon1" id=""><i class="fa fa-lock"></i></a>
                </div>
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit">Sign Up</button>
              </form>
            </div>
            <a onclick="rt()" class="arrow-2" id="arrowRight"><i class="fa fa-angle-right"></i></a>
            <div class="form-container sign-in-container">

                {{-- @if(Session::has('message'))
                    <div class="alert alert-success" id="alert">
                        <strong>Success:</strong> {{Session::get('message')}}
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger" id="alert">
                        <strong>Error:</strong>{{Session::get('error')}}
                    </div>
                @endif --}}

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

                    // custome woork by farooq
                    // <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
                    $(document).ready(function() {
                     const togglePassword = document.querySelector("#togglePassword");
                        // alert(togglePassword);
                     const password = document.querySelector("#login-password");

                
                     togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            console.log(password);
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
                
        });
        });


         // const togglePassword = document.getElementById('togglePassword');
  // togglePassword.addEventListener('click', function () {
    // toggle the type attribute


    
        // =================================

                </script>

              <form method="POST" action="{{ route('login') }}" autocomplete="false">
                @csrf
                <h1>Sign in</h1>

                <span>or use your account</span>
               
                {{---------------- Start Update by kamal ------------}}
                <div class="text">
                    <div class="icon-addon">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required  autofocus autocomplete="off">
                        <label for="email" class="fa fa-envelope" rel="tooltip" title="email"></label>
                    </div>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="text">
                    <div class="icon-addon">
                        <input id="login-password" type="password"     name="password" required class="password" >
                        <a><i class="bi bi-eye-slash  togglePassword" id="togglePassword"  ></i></a>
                    </div>
               </div>
               @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            {{---------------- End Update by kamal ------------}}
               
                 <a href="{{ route('forget.password.get') }}">Forget Password</a>
                                    
                <button type="submit">Sign In</button>
              </form>
            </div>
            <a onclick="lf()" class="arrow-1" id="arrowLeft"><i class="fa fa-angle-left"></i></a>
            <div class="overlay-container">
              <div class="overlay">
                <div class="overlay-panel overlay-left">
                  <h1>Welcome Back!</h1>
                  <p>To keep connected with us please login with your personal info</p>
                  <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                  <h1>Hello, Friend!</h1>
                  <p>Enter your personal details and start journey with us</p>
                  <button style="margin-top: 20px;" class="ghost" id="signUp">Sign Up</button>
                </div>
              </div>
            </div>
          </div>

          <a onclick="up()" class="arrow-4" id="arrowDown"><i class="fa fa-angle-up"></i></a>
        <a onclick="dn()" class="arrow-3" id="arrowUp"><i class="fa fa-angle-down"></i></a>
    </section>
    <script src="{{ asset('public/assets/js/signup.js') }}"></script>



</body>
</html>
