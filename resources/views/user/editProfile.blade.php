<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

<style>
body {
    background: #FFFFFF;
    margin: 0;
    padding: 0;
    color: #545454;
}

.form-control:focus {
    box-shadow: none;
    border-color: #7DFBCC;
}

.profile-button {
    background: #07f5cb;
    color: #545454;
    border-radius: 25px;
    /* box-shadow: none; */
    border: none;
    font-size: 11px;
    padding: 8px 17px;
}

.profile-button:hover {
    background: #07f5cb;
    color: #545454;
    opacity: 0.8;
}

.profile-button:focus {
    background: #07f5cb;
    box-shadow: none;
    color: #545454;
}

.profile-button:active {
    background: #07f5cb;
    box-shadow: none;
    color: #545454;
}

.labels {
    font-size: 11px
}
.btn-dark{
    background-color: darkgray;
}

.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
 .custom-file-input::before {
  content: 'Upload Image';
  font-weight: 700;
  font-size: 10pt;
  /* display: inline-block;
  background: linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt; */
}
/* .custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
} */


    </style>
</head>
<body>

    <form action="{{ route('store_profile') }}" method="POST" enctype="multipart/form-data">
          @csrf

    <div class="container rounded bg-white mt-5 mb-5">
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
            <div class="col-md-4 border-right">
               <!--  <label>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img src="{{asset('/assets/images'.$user->image)}}" class="rounded-circle mt-5" height="145px"  width="150px" type="file" >
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">

               
                <span class="font-weight-bold mt-3">{{ $user->firstname ?? 'Odo Dink' }}</span>
                <span class="text-black-50">{{ $user->surname ?? 'user' }}</span><span> </span>
                    {{-- <button class="btn btn-primary profile-button mt-3" type="button">Edit Image</button> --}}
                    <input style="width: 38%;" type="file" name="profile_image" class="custom-file-input btn btn-primary  mt-3">
                </div>
                </label> -->
                                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                         <label>
                                            <img class="rounded-circle mt-5 " id="output" width="150px" height="160px" src="{{ ($user->profile_image == '') ? 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg' : asset('public/upload/adminimg/'.$user->profile_image) }}" width="7%" />
                                            <p><input type="file"  accept="image/*" name="profile_image" id="file"  onchange="loadFile(event)" style="display: block;background-color:aqua;"></p>
                                            
                                              {{-- Updated by kamal bd --}}
                            <!--                  <img class="rounded-circle header-profile-user" src="{{ asset(!empty(Auth::user()->profile_image)? url('upload/adminimg/'.Auth::user()->profile_image) : url('upload/noimg.png')) }}"-->
                            <!--alt="img" style="width: 100px;height:100px">-->
                            
                            
                                            <!--<p><label for="file" style="cursor: pointer;" class="btn btn-info btn-lg">Upload Profile</label>-->
                                            <!--</p>-->
                                        </label>
                                        </div>

            </div>

          
            <div class="col-md-5">
                <div class="p-5 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                        <a href="{{ route('home') }}" class="btn btn-dark profile-button">Back</a>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" name="firstname" value="{{ old('firstname', $user->firstname) }}"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="surname" value="{{ old('surname', $user->surname) }}" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <!--<div class="col-md-12"><label class="labels">Email ID</label><input disabled type="text" class="form-control" placeholder="enter email id"  name="email" value="{{ old('email', $user->email) }}"></div>-->
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number"  name="phone_no" value="{{ old('phone_no', $user->phone_no) }}"></div>
                        <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" name="address_line_no_one" value="{{ old('address_line_no_one', $user->address_line_no_one) }}"></div>
                        <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" name="address_line_no_two" value="{{ old('address_line_no_two', $user->address_line_no_two) }}"></div>
                        <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" name="post_code" value="{{ old('post_code', $user->post_code) }}"></div>
                        <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" name="state" value="{{ old('state', $user->state) }}"></div>
                        <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" name="area" value="{{ old('area', $user->area) }}"></div>
                        <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" name="education" value="{{ old('education', $user->education) }}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" name="country" value="{{ old('country', $user->country) }}"></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" name="state" value="{{ old('state', $user->state) }}" placeholder="state"></div>
                    </div>
                    <div class="row">
                        <div class="mt-5 text-left">
                            <a href="{{ route('home') }}" class="btn btn-dark profile-button">Back</a>
                            <button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                        </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    
        var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
</body>
</html>
