
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>WE UNIT</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.min.css') }}">

      <link rel="icon" href="{{ asset('public/assets/images/favicon.jpg') }}">
      <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min (2).css"> -->
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style1.css') }}"> --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/font-awesome-5.min.css') }}"> --}}

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/font-awesome.css') }}"> --}}

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

      {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> --}}

      <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

      @livewireStyles

    </head>
   <body class="bg-color">
      <section class="">
         <div class="container">
            {{-- <div class="row">
                <div class="offset-lg-4 col-lg-4 p-0" style=" ">
                    <img src="http://127.0.0.1:8000/assets/images/weunitlogo.png" class="img-fluid" style="margin-top:10px; background-color: black;">
                </div>
            </div> --}}
            {{ $slot }}
        </div>
      </section>

<!-- Color Picker-->
{{-- <script src = "https://cdnjs.cloudflare.com/ajax/libs/vue-color/2.8.1/vue-color.min.js" > </script> --}}
{{-- <script src = "https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js" > < /script> --}}
    <script src = "https://cdn.jsdelivr.net/npm/chart.js" > </script>
    {{-- <script src = "{{ asset('public/assets/js/color.js') }}" > </script> --}}

    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin = "anonymous" > </script>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" > </script>
        <script>
            $(document).ready(function () {
                $('.next').click(function () {
                    $('.socialHide2').animate({
                        height: "315px"
                    }, 400);
                    $('.socialHide1').animate({
                        height: "0px"
                    }, 400);
                    $('.socialHide2').slideDown(1000);
                });
                $('.next1').click(function () {
                    $('.socialHide1').animate({
                        height: "315px"
                    }, 400);
                    $('.socialHide2').animate({
                        height: "0px"
                    }, 400);
                    $('.socialHide1').slideDown(1000);
                });
                $('.next3').click(function () {
                    $('.soc-bothide2').animate({
                        height: "45px"
                    }, 400);
                    $('.soc-bothide1').animate({
                        height: "0px"
                    }, 400);
                    $('.soc-bothide2').slideDown(1000);
                });
                $('.next4').click(function () {
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


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/assets/js/script.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/owl-carousel.js') }}"></script>

    {{--sweet alert--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @livewireScripts


    <script>
        window.addEventListener('copyToClipBoard', event => {
            var text = $("#copyPersonPreviewData").get(0)
            var selection = window.getSelection();
            var range = document.createRange();
            range.selectNodeContents(text);
            selection.removeAllRanges();
            selection.addRange(range);
            //add to clipboard.
            document.execCommand('copy');

            toastr[event.detail.type](event.detail.message,
            event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        })
    </script>

   </body>
</html>
