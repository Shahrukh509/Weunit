    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-color/2.8.1/vue-color.min.js"></script> --}}
	{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script src="{{ asset('assets/js/color.js') }}"></script> --}}
    <script>

    // setup
    const data={
        labels: ['Facebook', 'Instagram', 'Pinterest', 'WhatsApp', 'Twitch'],
            datasets: [{
                label: '',
                data: [700, 200, 650, 500, 400, 500],
                backgroundColor: [
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb'
                ],
                borderColor: [
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb'
                ],
                // borderWidth: 1
            }]
    };

    // config
    const config ={
        type: 'bar',
        data,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'grey'
                    }

                }
            },
            plugins:{
                legend:{
                    labels:{
                        boxWidth:0
                    }
                }
            }
        }
    };

    // render
    const mychart = new Chart(
    document.getElementById('myChart'),
    config
    );


    // vertical chart2
    // setup
    const datachart={
        labels: ['Facebook', 'Instagram', 'Pinterest', 'WhatsApp', 'Twitch'],
            datasets: [{
                label: '',
                data: [700, 200, 650, 500, 400, 500],
                backgroundColor: [
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb'
                ],
                borderColor: [
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb'
                ],
                borderWidth: 1
            }]
    };

    // config
    const config0 ={
        type: 'bar',
        data: datachart,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'grey'
                    }
                }
            },
            plugins:{
                legend:{
                    labels:{
                        boxWidth:0
                    }
                }
            }
        }
    };

    // render
    const mychart2 = new Chart(
    document.getElementById('myChart2'),
    config0
    );

    // piechart
    // setup
    const datapie={
        labels: ['optimization level',],
            datasets: [{
                label: '# of Votes',
                data: [85, 15],
                backgroundColor: [
                    '#07f5cb',
                    '#000'
                ],
                borderColor: [
                   '#07f5cb',
                    '#000'
                ],
                borderWidth: 1
            }]
    };

    // config
    const config1 ={
        type: 'pie',
        data: datapie,
        options: {
            scales: {
            },
            plugins:{
                legend:{
                    labels:{
                        boxWidth:0
                    }
                }
            }
        }
    };

    // render
    const pieChart = new Chart(
    document.getElementById('piechart'),
    config1
    );

    // linechart

    // setup
    const dataline={
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            datasets: [{
                label: '',
                data: [0, 260, 750, 550, 650, 450, 800],
                backgroundColor: [
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb'
                ],
                borderColor: [
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb',
                    '#07f5cb'
                ],
                borderWidth: 1
            }]
    };

    // config
    const config2 ={
        type: 'line',
        data: dataline,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'grey'
                    }
                }
            },
            plugins:{
                legend:{
                    labels:{
                        boxWidth:0
                    }
                }
            }
        }
    };

    // render
    const linechart = new Chart(
    document.getElementById('linechart'),
    config2
    );

    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // setup
        const data={
            labels: ['Facebook', 'Instagram', 'Pinterest', 'WhatsApp', 'Twitch'],
                datasets: [{
                    label: '',
                    data: [700, 200, 650, 500, 400, 500],
                    backgroundColor: [
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb'
                    ],
                    borderColor: [
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb'
                    ],
                    // borderWidth: 1
                }]
        };

        // config
        const config ={
            type: 'bar',
            data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'grey'
                        }

                    }
                },
                plugins:{
                    legend:{
                        labels:{
                            boxWidth:0
                        }
                    }
                }
            }
        };

        // render
        const mychart = new Chart(
        document.getElementById('myChart'),
        config
        );


        // vertical chart2
        // setup
        const datachart={
            labels: ['Facebook', 'Instagram', 'Pinterest', 'WhatsApp', 'Twitch'],
                datasets: [{
                    label: '',
                    data: [700, 200, 650, 500, 400, 500],
                    backgroundColor: [
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb'
                    ],
                    borderColor: [
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb'
                    ],
                    borderWidth: 1
                }]
        };

        // config
        const config0 ={
            type: 'bar',
            data: datachart,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'grey'
                        }
                    }
                },
                plugins:{
                    legend:{
                        labels:{
                            boxWidth:0
                        }
                    }
                }
            }
        };

        // render
        const mychart2 = new Chart(
        document.getElementById('myChart2'),
        config0
        );

        // piechart
        // setup
        const datapie={
            labels: ['optimization level',],
                datasets: [{
                    label: '# of Votes',
                    data: [85, 15],
                    backgroundColor: [
                        '#07f5cb',
                        '#000'
                    ],
                    borderColor: [
                    '#07f5cb',
                        '#000'
                    ],
                    borderWidth: 1
                }]
        };

        // config
        const config1 ={
            type: 'pie',
            data: datapie,
            options: {
                scales: {
                },
                plugins:{
                    legend:{
                        labels:{
                            boxWidth:0
                        }
                    }
                }
            }
        };

        // render
        const pieChart = new Chart(
        document.getElementById('piechart'),
        config1
        );

        // linechart

        // setup
        const dataline={
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                datasets: [{
                    label: '',
                    data: [0, 260, 750, 550, 650, 450, 800],
                    backgroundColor: [
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb'
                    ],
                    borderColor: [
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb',
                        '#07f5cb'
                    ],
                    borderWidth: 1
                }]
        };

        // config
        const config2 ={
            type: 'line',
            data: dataline,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'grey'
                        }
                    }
                },
                plugins:{
                    legend:{
                        labels:{
                            boxWidth:0
                        }
                    }
                }
            }
        };

        // render
        const linechart = new Chart(
        document.getElementById('linechart'),
        config2
        );

    </script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
     </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script>
     $(document).ready(function(){
       $('.next').click(function(){
       $('.socialHide2').animate({height: "315px"},400);
       $('.socialHide1').animate({height: "0px"},400);
       $('.socialHide2').slideDown(1000);
       });
       $('.next1').click(function(){
       $('.socialHide1').animate({height: "315px"},400);
       $('.socialHide2').animate({height: "0px"},400);
       $('.socialHide1').slideDown(1000);
       });
       $('.next3').click(function(){
       $('.soc-bothide2').animate({height: "45px"},400);
       $('.soc-bothide1').animate({height: "0px"},400);
       $('.soc-bothide2').slideDown(1000);
       });
       $('.next4').click(function(){
       $('.soc-bothide1').animate({height: "45px"},400);
       $('.soc-bothide2').animate({height: "0px"},400);
       $('.soc-bothide1').slideDown(1000);
       });
     });
     </script>


     <!-- script area start -->
     <!-- <script type="text/javascript" src="js/jQuery-3.6.0.min.js"></script> -->
     <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
     <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

     <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
     {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>


     {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script> --}}

     <script>
        //  new ClipboardJS('.copy-btn');


    // $('.CopyToClipboard').on('click', function (e) {
    //     e.preventDefault();
    //     var containerid = $(this).data('id');
    //     alert(containerid);
    //     var range = document.createRange();
    //     range.selectNode(containerid); //changed here
    //     window.getSelection().removeAllRanges();
    //     window.getSelection().addRange(range);
    //     document.execCommand("copy");
    //     window.getSelection().removeAllRanges();
    //     alert("data copied");
    // });


    // function CopyToClipboard(containerid) {
    //     // alert(containerid);
    //     var range = document.createRange();
    //     range.selectNode(containerid); //changed here
    //     window.getSelection().removeAllRanges();
    //     window.getSelection().addRange(range);
    //     document.execCommand("copy");
    //     window.getSelection().removeAllRanges();
    //     alert("data copied");
    // }

     //Slider 1

     $(document).ready(function () {

        if ($('.bbb_viewed_slider').length) {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_prev').length) {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_next').length) {
                var next = $('.bbb_viewed_next');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //Slider 2

    $(document).ready(function () {


        if ($('.bbb_viewed_slider_2').length) {
            var viewedSlider = $('.bbb_viewed_slider_2');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_prev_2').length) {
                var prev = $('.bbb_viewed_prev_2');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_next_2').length) {
                var next = $('.bbb_viewed_next_2');
                next.on('click', function () {
                    alert();
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //Slider 3

    $(document).ready(function () {
        if ($('.bbb_viewed_slider_3').length) {
            var viewedSlider = $('.bbb_viewed_slider_3');
            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });
            if ($('.bbb_viewed_prev_3').length) {
                var prev = $('.bbb_viewed_prev_3');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }
            if ($('.bbb_viewed_next_3').length) {
                var next = $('.bbb_viewed_next_3');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });


    //Slider 4

    $(document).ready(function () {


        if ($('.bbb_viewed_slider_4').length) {
            var viewedSlider = $('.bbb_viewed_slider_4');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 3
                    },
                    575: {
                        items: 3
                    },
                    768: {
                        items: 3
                    },
                    991: {
                        items: 3
                    },
                    1199: {
                        items: 3
                    }
                }
            });

            if ($('.bbb_viewed_prev_4').length) {
                var prev = $('.bbb_viewed_prev_4');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_next_4').length) {
                var next = $('.bbb_viewed_next_4');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }

    });


    //Slider 5


    $(document).ready(function () {

        if ($('.bbb_viewed_slider_5').length) {
            var viewedSlider = $('.bbb_viewed_slider_5');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }

                }
            });

            if ($('.bbb_viewed_prev_5').length) {
                var prev = $('.bbb_viewed_prev_5');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_next_5').length) {
                var next = $('.bbb_viewed_next_5');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }

    });

    //Slider 6

    $(document).ready(function () {
        if ($('.bbb_viewed_slider_6').length) {
            var viewedSlider = $('.bbb_viewed_slider_6');
            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });
            if ($('.bbb_viewed_prev_6').length) {
                var prev = $('.bbb_viewed_prev_6');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }
            if ($('.bbb_viewed_next_6').length) {
                var next = $('.bbb_viewed_next_6');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //Slider 7

    $(document).ready(function () {
        if ($('.bbb_viewed_slider_7').length) {
            var viewedSlider = $('.bbb_viewed_slider_7');
            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });
            if ($('.bbb_viewed_prev_7').length) {
                var prev = $('.bbb_viewed_prev_7');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }
            if ($('.bbb_viewed_next_7').length) {
                var next = $('.bbb_viewed_next_7');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //Slider 8

    $(document).ready(function () {
        if ($('.bbb_viewed_slider_8').length) {
            var viewedSlider = $('.bbb_viewed_slider_8');
            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });
            if ($('.bbb_viewed_prev_8').length) {
                var prev = $('.bbb_viewed_prev_8');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }
            if ($('.bbb_viewed_next_8').length) {
                var next = $('.bbb_viewed_next_8');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //Slider 9

    $(document).ready(function () {
        if ($('.bbb_viewed_slider_9').length) {
            var viewedSlider = $('.bbb_viewed_slider_9');
            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 7
                    },
                    575: {
                        items: 7
                    },
                    768: {
                        items: 7
                    },
                    991: {
                        items: 7
                    },
                    1199: {
                        items: 7
                    }
                }
            });
            if ($('.bbb_viewed_prev_9').length) {
                var prev = $('.bbb_viewed_prev_9');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }
            if ($('.bbb_viewed_next_9').length) {
                var next = $('.bbb_viewed_next_9');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //Slider 10

    $(document).ready(function () {
        if ($('.bbb_viewed_slider_10').length) {
            var viewedSlider = $('.bbb_viewed_slider_10');
            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });
            if ($('.bbb_viewed_prev_10').length) {
                var prev = $('.bbb_viewed_prev_10');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }
            if ($('.bbb_viewed_next_10').length) {
                var next = $('.bbb_viewed_next_10');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //Slider 11

    $(document).ready(function () {
        if ($('.bbb_viewed_slider_11').length) {
            var viewedSlider = $('.bbb_viewed_slider_11');
            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });
            if ($('.bbb_viewed_prev_11').length) {
                var prev = $('.bbb_viewed_prev_11');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }
            if ($('.bbb_viewed_next_11').length) {
                var next = $('.bbb_viewed_next_11');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });


    //  Preview Sliders

    //Slider 1

    $(document).ready(function () {

        if ($('.bbb_viewed_slider_preview').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev').length) {
                var prev = $('.bbb_viewed_preview_prev');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_next').length) {
                var next = $('.bbb_viewed_preview_next');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });


    //  Preview Slider 2
    $(document).ready(function () {

        if ($('.bbb_viewed_slider_preview_2').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_2');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_2').length) {
                var prev = $('.bbb_viewed_preview_prev_2');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_2').length) {
                var next = $('.bbb_viewed_preview_nex_2');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //  Preview Slider 3
    $(document).ready(function () {

        if ($('.bbb_viewed_slider_preview_3').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_3');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_3').length) {
                var prev = $('.bbb_viewed_preview_prev_3');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_3').length) {
                var next = $('.bbb_viewed_preview_nex_3');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //  Preview Slider 4
    $(document).ready(function () {

        if ($('.bbb_viewed_slider_preview_4').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_4');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_4').length) {
                var prev = $('.bbb_viewed_preview_prev_4');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_4').length) {
                var next = $('.bbb_viewed_preview_nex_4');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //  Preview Slider 5
    $(document).ready(function () {
        if ($('.bbb_viewed_slider_preview_5').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_5');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_5').length) {
                var prev = $('.bbb_viewed_preview_prev_5');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_5').length) {
                var next = $('.bbb_viewed_preview_nex_5');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //  Preview Slider 6
    $(document).ready(function () {
        if ($('.bbb_viewed_slider_preview_6').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_6');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_6').length) {
                var prev = $('.bbb_viewed_preview_prev_6');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_6').length) {
                var next = $('.bbb_viewed_preview_nex_6');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //  Preview Slider 7
    $(document).ready(function () {
        if ($('.bbb_viewed_slider_preview_7').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_7');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_7').length) {
                var prev = $('.bbb_viewed_preview_prev_7');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_7').length) {
                var next = $('.bbb_viewed_preview_nex_7');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //  Preview Slider 8
    $(document).ready(function () {
        if ($('.bbb_viewed_slider_preview_8').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_8');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_8').length) {
                var prev = $('.bbb_viewed_preview_prev_8');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_8').length) {
                var next = $('.bbb_viewed_preview_nex_8');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //  Preview Slider 9
    $(document).ready(function () {
        if ($('.bbb_viewed_slider_preview_9').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_9');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_9').length) {
                var prev = $('.bbb_viewed_preview_prev_9');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_9').length) {
                var next = $('.bbb_viewed_preview_nex_9');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //  Preview Slider 10
    $(document).ready(function () {
        if ($('.bbb_viewed_slider_preview_10').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_10');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_10').length) {
                var prev = $('.bbb_viewed_preview_prev_10');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_10').length) {
                var next = $('.bbb_viewed_preview_nex_10');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });

    //  Preview Slider 11
    $(document).ready(function () {
        if ($('.bbb_viewed_slider_preview_11').length) {
            var viewedSlider = $('.bbb_viewed_slider_preview_11');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 0,
                autoplay: false,
                autoplayTimeout: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    575: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_preview_prev_11').length) {
                var prev = $('.bbb_viewed_preview_prev_11');
                prev.on('click', function () {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_preview_nex_11').length) {
                var next = $('.bbb_viewed_preview_nex_11');
                next.on('click', function () {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
    });
    </script>

         {{--sweet alert--}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}

        @livewireScripts

         <script>
            window.addEventListener('contentChanged', event => {

            });
         </script>

        <script>
            window.addEventListener('alertSuccess', event => {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: event.detail.title,
                    showConfirmButton: false,
                    timer: 1500
                })
            })

            // window.addEventListener('alertConfirm', event => {
            //     Swal.fire({
            //         title: 'Are you sure?',
            //         text: "You won't be able to revert this!",
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         cancelButtonColor: '#d33',
            //         confirmButtonText: 'Yes, delete it!'
            //     }).then((result) => {
            //         if (result.isConfirmed) {

            //             // alert(event.detail.function);
            //             console.log(event.detail.function);
            //             // console.log(event.detail.id);

            //             // Livewire.emit(event.detail.function);
            //             // window.livewire.emit('deleteCase');
            //             // Swal.fire(
            //             // 'Deleted!',
            //             // 'Your file has been deleted.',
            //             // 'success'
            //             // )
            //         }
            //     })

            // })

            // window.addEventListener('alertDeleted', event => {
            //     Swal.fire(
            //         'Deleted!',
            //         'Your file has been deleted.',
            //         'success'
            //     )
            // })
        </script>
