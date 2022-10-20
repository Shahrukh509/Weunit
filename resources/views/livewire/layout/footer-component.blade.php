
 {{-- <script src="//code.jquery.com/jquery-1.12.4.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0-rc.1/chartjs-plugin-datalabels.js">
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="{{ mix('/js/app.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

<script>
    // window.addEventListener('alert', event => {
    //     toastr[event.detail.type](event.detail.message,
    //         event.detail.title ?? ''), toastr.options = {
    //         "closeButton": true,
    //         "progressBar": true,
    //     }
    // });

    window.addEventListener('reload', event => {
        location.reload();
    })

    window.addEventListener('copyToClipBoard', event => {

        var text = $("#copyPersonData").get(0)
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



@stack('scripts')

{{-- <script>
    window.addEventListener('alertSuccess', event => {
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: event.detail.title,
            showConfirmButton: false,
            timer: 1500
        })
    })
</script> --}}
