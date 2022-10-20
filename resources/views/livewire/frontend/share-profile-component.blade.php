@push('js')
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
@endpush
<div>
    <div class="row">
        <div class="offset-xxl-4 offset-lg-4 col-lg-4 col-xxl-4" id="designTabFix1" style="padding:0;">
            <div class="left-side-h remove-margin" style="height:550px;margin-top: 100px;">

                <div class="mt-5 p-0" style=" ">
                    <img src="http://127.0.0.1:8000/assets/images/weunitlogo.png" class="img-fluid" style="margin-top:10px; background-color: black;">
                </div>
                @php
                $design = \App\Models\Design::where('user_id',Request()->query('userID'))->first();
                $id = Request()->query('userID');
                @endphp


                @include('themes.'.$design->theme,compact('id'))




              </div>
          </div>
      </div>
  </div>