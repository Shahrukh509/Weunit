<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WE UNIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css">
    <link rel="icon" href="public/assets/images/favicon.jpg">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min (2).css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style1.css"> -->
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script type="text/javascript">
    //   google.charts.load('current', {'packages':['corechart']});
    //   google.charts.setOnLoadCallback(drawChart);

    //   function drawChart() {

    //     var data = google.visualization.arrayToDataTable([
    //       ['Task', 'Hours per Day'],
    //       ['Work',     11],
    //       ['Eat',      2],
    //       ['Commute',  2],
    //       ['Watch TV', 2],
    //       ['Sleep',    7]
    //     ]);

    //     var options = {
    //       title: 'My Daily Activities'
    //     };

    //     var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    //     chart.draw(data, options);
    //   }   


    // google.charts.load('current', {'packages':['corechart']});
    //   google.charts.setOnLoadCallback(drawChart);

    //   function drawChart() {
    //     var data = google.visualization.arrayToDataTable([
    //       ['Year', 'Sales', 'Expenses'],
    //       ['2004',  1000,      400],
    //       ['2005',  1170,      460],
    //       ['2006',  660,       1120],
    //       ['2007',  1030,      540]
    //     ]);

    //     var options = {
    //       title: 'Company Performance',
    //       curveType: 'function',
    //       legend: { position: 'bottom' }
    //     };

    //     var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    //     chart.draw(data, options);
    //   }


    // google.charts.load('current', {'packages':['line', 'corechart']});
    //   google.charts.setOnLoadCallback(drawChart);

    // function drawChart() {

    //   var button = document.getElementById('change-chart');
    //   var chartDiv = document.getElementById('chart_div');

    //   var data = new google.visualization.DataTable();
    //   data.addColumn('date', 'Month');
    //   data.addColumn('number', "Average Temperature");
    //   data.addColumn('number', "Average Hours of Daylight");

    //   data.addRows([
    //     [new Date(2014, 0),  -.5,  5.7],
    //     [new Date(2014, 1),   .4,  8.7],
    //     [new Date(2014, 2),   .5,   12],
    //     [new Date(2014, 3),  2.9, 15.3],
    //     [new Date(2014, 4),  6.3, 18.6],
    //     [new Date(2014, 5),    9, 20.9],
    //     [new Date(2014, 6), 10.6, 19.8],
    //     [new Date(2014, 7), 10.3, 16.6],
    //     [new Date(2014, 8),  7.4, 13.3],
    //     [new Date(2014, 9),  4.4,  9.9],
    //     [new Date(2014, 10), 1.1,  6.6],
    //     [new Date(2014, 11), -.2,  4.5]
    //   ]);

    //   var materialOptions = {
    //     chart: {
    //       title: 'Average Temperatures and Daylight in Iceland Throughout the Year'
    //     },
    //     width: 900,
    //     height: 500,
    //     series: {
    //       // Gives each series an axis name that matches the Y-axis below.
    //       0: {axis: 'Temps'},
    //       1: {axis: 'Daylight'}
    //     },
    //     axes: {
    //       // Adds labels to each axis; they don't have to match the axis names.
    //       y: {
    //         Temps: {label: 'Temps (Celsius)'},
    //         Daylight: {label: 'Daylight'}
    //       }
    //     }
    //   };

    //   var classicOptions = {
    //     title: 'Average Temperatures and Daylight in Iceland Throughout the Year',
    //     width: 900,
    //     height: 500,
    //     // Gives each series an axis that matches the vAxes number below.
    //     series: {
    //       0: {targetAxisIndex: 0},
    //       1: {targetAxisIndex: 1}
    //     },
    //     vAxes: {
    //       // Adds titles to each axis.
    //       0: {title: 'Temps (Celsius)'},
    //       1: {title: 'Daylight'}
    //     },
    //     hAxis: {
    //       ticks: [new Date(2014, 0), new Date(2014, 1), new Date(2014, 2), new Date(2014, 3),
    //               new Date(2014, 4),  new Date(2014, 5), new Date(2014, 6), new Date(2014, 7),
    //               new Date(2014, 8), new Date(2014, 9), new Date(2014, 10), new Date(2014, 11)
    //              ]
    //     },
    //     vAxis: {
    //       viewWindow: {
    //         max: 30
    //       }
    //     }
    //   };

    //   function drawMaterialChart() {
    //     var materialChart = new google.charts.Line(chartDiv);
    //     materialChart.draw(data, materialOptions);
    //     button.innerText = 'Change to Classic';
    //     button.onclick = drawClassicChart;
    //   }

    //   function drawClassicChart() {
    //     var classicChart = new google.visualization.LineChart(chartDiv);
    //     classicChart.draw(data, classicOptions);
    //     button.innerText = 'Change to Material';
    //     button.onclick = drawMaterialChart;
    //   }

    //   drawMaterialChart();

    // }
    </script>
</head>
<body class="bg-color">

    @php
    $design = \App\Models\Design::where('user_id',Auth()->user()->id)->first();

    @endphp
    
<section class="">
    <div class="container-fluid">
        <div class="row">
           
            <!-- side bar end -->

            <!-- right content area start -->
            <div class="col-lg-10 col-xl-10 col-xxl-10 ps-lg-0 col-10">
                <div class="right-content">
                  <div class="tab-content b-space" id="v-pills-tabContent">

                  
                    
                    <div class="tab-pane fade show active" id="v-pills-design" role="tabpanel" aria-labelledby="v-pills-design-tab">
                            <!-- profile image start -->
                           
                            <!-- profile image -->
                        <div class="row">
                            <div class="col-md-12 clone-this">
                                
                            </div>
                            <div class="col-md-9 col-lg-4 col-xl-6 col-xxl-4 design-col design-col-p left-margin" id="designTabFix">
                                
                                <div class="row" id="hideNavF">             
                                            <div class="col-lg-12 ml-120">
                                                <ul style="overflow-x: inherit;width: 405px;
                                                display: flex;
                                                flex-wrap: wrap!important;" class="nav nav-res1 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist">
                                            
                                                    <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                                                      <button class="nav-link active" id="pills-style-tab1" data-bs-toggle="pill" data-bs-target="#pills-style" type="button" role="tab" aria-controls="pills-style" aria-selected="true">Style</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                                                      <button class="nav-link" id="pills-background-tab1" data-bs-toggle="pill" data-bs-target="#pills-background" type="button" role="tab" aria-controls="pills-background" aria-selected="false">Background</button>
                                                    </li>
                                                   {{--  <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                                                      <button class="nav-link" id="pills-profile-image-tab1" data-bs-toggle="pill" data-bs-target="#pills-profile-image" type="button" role="tab" aria-controls="pills-profile-image" aria-selected="false">Profile Image</button>

                                                    </li>
                                                    <br> --}}
                                                  <!-- </ul> -->
                                            
                                            <!-- </div>
                                        <div class="col-lg-12 ml-120"> -->
                                            <!-- <ul style=" flex-wrap: wrap; overflow-x: inherit;" class="nav nav-res111 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist"> -->
                                                <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                                                  <button class="nav-link" id="pills-logo-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo" aria-selected="false">Logo</button>
                                                </li>
                                                <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                                                    <button class="nav-link" id="pills-logo1-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo1" type="button" role="tab" aria-controls="pills-logo1" aria-selected="false">About</button>
                                                  </li>
                                                <!-- <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-font-tab1" data-bs-toggle="pill" data-bs-target="#pills-font" type="button" role="tab" aria-controls="pills-font" aria-selected="false">Font</button>
                                                </li> -->
                                               {{--  <li class="nav-item" role="presentation" style="margin-bottom: 10px;">
                                                    <button class="nav-link" id="pills-profile-video-tab1" data-bs-toggle="pill" data-bs-target="#pills-profile-video" type="button" role="tab" aria-controls="pills-profile-video" aria-selected="false">Video</button>
                                                  </li> --}}
                                              <!-- </ul> -->
                                        <!-- </div>
                                        <div class="col-lg-12 ml-120"> -->
                                            <!-- <ul style=" flex-wrap: wrap; overflow-x: inherit;" class="nav nav-res111 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist"> -->
                                                
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-logo2-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo2" type="button" role="tab" aria-controls="pills-logo2" aria-selected="false">Location</button>
                                                </li>
                                                <!-- <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-logo3-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo3" type="button" role="tab" aria-controls="pills-logo3" aria-selected="false">New</button>
                                                </li> -->
                                              </ul>
                                        </div>
                                </div>
                                <div class="row" id="hideNavS">             
                                            <div class="col-lg-12 ml-120">
                                                <ul style="overflow-x: inherit;" class="nav nav-res1 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist">
                                            
                                                    <li class="nav-item" role="presentation">
                                                      <button class="nav-link active" id="pills-style-tab1" data-bs-toggle="pill" data-bs-target="#pills-style" type="button" role="tab" aria-controls="pills-style" aria-selected="true">Style</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                      <button class="nav-link" id="pills-background-tab1" data-bs-toggle="pill" data-bs-target="#pills-background" type="button" role="tab" aria-controls="pills-background" aria-selected="false">Background</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                      <button class="nav-link" id="pills-profile-image-tab1" data-bs-toggle="pill" data-bs-target="#pills-profile-image" type="button" role="tab" aria-controls="pills-profile-image" aria-selected="false">Profile Image</button>
                                                    </li><br>
                                                  <!-- </ul> -->
                                            
                                            <!-- </div>
                                        <div class="col-lg-12 ml-120"> -->
                                            <!-- <ul style=" flex-wrap: wrap; overflow-x: inherit;" class="nav nav-res111 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist"> -->
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-logo-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo" aria-selected="false">Logo</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-logo1-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo1" type="button" role="tab" aria-controls="pills-logo1" aria-selected="false">About</button>
                                                  </li>
                                                <!-- <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-font-tab1" data-bs-toggle="pill" data-bs-target="#pills-font" type="button" role="tab" aria-controls="pills-font" aria-selected="false">Font</button>
                                                </li> -->
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-video-tab1" data-bs-toggle="pill" data-bs-target="#pills-profile-video" type="button" role="tab" aria-controls="pills-profile-video" aria-selected="false">Video</button>
                                                  </li>
                                              <!-- </ul> -->
                                        <!-- </div>
                                        <div class="col-lg-12 ml-120"> -->
                                            <!-- <ul style=" flex-wrap: wrap; overflow-x: inherit;" class="nav nav-res111 nav-res nav-pills mb-4 personal-tab ms-3 design-nav justify-content-lg-start" id="pills-tab" role="tablist"> -->
                                                
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-logo2-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo2" type="button" role="tab" aria-controls="pills-logo2" aria-selected="false">Location</button>
                                                </li>
                                                <!-- <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-logo3-tab1" data-bs-toggle="pill" data-bs-target="#pills-logo3" type="button" role="tab" aria-controls="pills-logo3" aria-selected="false">New</button>
                                                </li> -->
                                              </ul>
                                        </div>
                                </div>

                                <div class="tab-content tab-content-padd left-side-h left-side-h-1 h-100" id="pills-tabContent">

                                    <div class="tab-pane fade show active" id="pills-style" role="tabpanel" aria-labelledby="pills-style-tab">
                                        <div class="padding-50">
                                            <div class="row g-2 justify-content-center temp-row1 tab-content-mr-row" style="">
                                                {{-- theme1 --}}
                                                <div class="col-md-12 clone-this" id="theme1">
                                                    <div class="row">
                                                        <div style="padding: 0;background-color: #000;" class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">
                                                           {{--  <input class="theme_number"type="hidden" name="" value="theme1"> --}}
                                                            <!-- <div style="background-color: #111;" class="col-xs-12 col-sm-5 offset-sm-0 col-md-5 temp2-bg"> -->
                                                                <a href="#" class="text-decoration-none text-white">
                                                                    <!-- <div class="text-center">
                                                                        <img src="images/t2.png" class="img-fluid">
                                                                    </div> -->
                                                                    <div class="text-center temp2 temp4 temp41 temp412 firstTemp">
                                                                        <div class="temp-borders">
                                                                            <div class="bbb1" id="bbblast">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                            <h3>Jerry<br>Lorenzo</h3>
                                                                                <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <a class="ac-1 copy-html" href="#">
                                                                            <img style="width: 25px;" src="public/assets/images/ac1.PNG" alt="">
                                                                            <!-- <i class="fas fa-dharmachakra"></i> -->
                                                                        </a>
                                                                        <!-- <img src="images/t3.png" class="img-fluid"> -->
                                                                        <!-- <a class="ac-1 copy-html" href="#"><i class="fas fa-dharmachakra"></i></a> -->
                                                                        <div class="row">
                                                                            <div class="col-md-7">
                                                                                
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <!-- <div class="bbb1" id="bbblast">
                                                                                    <a class="bl-1" href="">BlondAgain</a>
                                                                                </div> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="row i2 g-3 justify-content-center">
                                                                            <!-- <div class="bbb_main_container"> -->
                                                                                <div class="col-1">
                                                                                    <div>
                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                            <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                            <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                            <img class="bbb_viewed_nav bbb_viewed_prev" style="margin-left: 5px;" src="public/assets/images/ang1.PNG" class="">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-10">
                                                                                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                                                                                        <div class="owl-item">
                                                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                                <div class="row">
                                                                                                    <div class="col-2 mx-auto">
                                                                                                        <div class="per-icon">
                                                                                                            <a href="#" class="text-decoration-none text-white">
                                                                                                                <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="owl-item">
                                                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                                <div class="row">
                                                                                                    <div class="col-2 mx-auto">
                                                                                                        <div class="per-icon">
                                                                                                            <a href="#" class="text-decoration-none text-white">
                                                                                                                <i class="fab fa-instagram"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="owl-item">
                                                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                                <div class="row">
                                                                                                    <div class="col-2 mx-auto">
                                                                                                        <div class="per-icon">
                                                                                                            <a href="#" class="text-decoration-none text-white">
                                                                                                                <i class="fab fa-whatsapp"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="owl-item">
                                                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                                <div class="row">
                                                                                                    <div class="col-2 mx-auto">
                                                                                                        <div class="per-icon">
                                                                                                            <a href="#" class="text-decoration-none text-white">
                                                                                                                <i class="fab fa-pinterest-p"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="owl-item">
                                                                                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                                <div class="row">
                                                                                                    <div class="col-2 mx-auto">
                                                                                                        <div class="per-icon">
                                                                                                            <a href="#" class="text-decoration-none text-white">
                                                                                                                <i class="fab fa-tiktok"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-1">
                                                                                    <div>
                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                            <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                            <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                            <img class="bbb_viewed_nav bbb_viewed_next" style="margin-left: -15px;" src="public/assets/images/ang2.PNG" class="">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            <!-- </div> -->
                                                                        </div>
                                                                    </div>
                                                                </a>                                                    
                                                            </div>
                                                    </div>
                                                </div>
                                                {{-- THEME2 --}}

                                                <div class="col-md-12 clone-this" id="theme2">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto" style="padding: 0;">
                                                            {{-- <input class="theme_number"type="hidden" name="" value="theme2"> --}}
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t1.PNG" class="img-fluid">
                                                                </div> -->
                                                                <div class="temp1 temp6 temp612 temp6123">
                                                                    <div class="temp6123-wrap" style="">
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-7">
                                                                            <h3>Jerryrrrr <br>Lorenzo</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row i2 g-3 justify-content-center">
                                                                        <hr style="position: absolute; top:-20px;right: 0; background: #fff;opacity: 1;width: 60%;height: 3px;"><br>
                                                                        
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_prev_2" style="margin-left: 5px;" src="public/assets/images/ang1.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_2">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_next_2" style="margin-left: -15px;" src="public/assets/images/ang2.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                         <hr style="position: absolute;bottom: 35px!important;left: 0;background: #fff;width: 60%;height: 3px;opacity: 1;">
                                                                    </div>
                                                                    <div class="text-center mx-auto">
                                                                        <button class="temp-btn1 copy-html"><span><img style="width:25px;" src="public/assets/images/ac1.PNG" alt=""></span> <span  class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>
        
                                                                    </div>
        
                                                                    </div>
        
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- theme 3 --}}
                                                <div class="col-md-12 clone-this " id="theme3">
                                                    <div class="row">
                                                        <div style="padding: 0;background-color: #373532;" class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">
                        
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t2.png" class="img-fluid">
                                                                </div> -->
                                                                <div class="text-center temp2 temp4 temp41 temp410">
                                                                    <a class="ac-1" href="#">
                                                                        <img style="width:25px;" src="public/assets/images/ac1.PNG" alt="">
                                                                        <!-- <i class="fas fa-dharmachakra"></i> -->
                                                                    </a>
                                                                    <!-- <img src="images/t3.png" class="img-fluid"> -->
                                                                    <!-- <a class="ac-1 copy-html" href="#"><i class="fas fa-dharmachakra"></i></a> -->
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <h3>Jerry<br>Lorenzo</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row i2 g-3 justify-content-center copy-html">
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_prev_3" style="margin-left: 5px;" src="public/assets/images/an1.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_3">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_next_3" style="margin-left: -15px;" src="public/assets/images/an2.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                    </div>
                                                                </div>
                                                            </a>                                                    
                                                        </div>
        
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12 clone-this">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-7 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto" style="padding: 0;">
                                                            <a href="#" class="text-decoration-none text-white">
                                                                
                                                                <div class="temp1 temp6 temp612">
                                                                    <div class="temp612-wrap" style="">
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-7">
                                                                            <h3>Kristin <br>Remy</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row i2 g-3 justify-content-center">
                                                                        <hr style="position: absolute; top:-6px; color: #fff;width: 70%;height: 2px;"><br>
                                                                        <div class="col-1">
                                                                            <div class="text-left">
                                                                                <a href="#" class="text-decoration-none text-white text-left">
                                                                                    <i style="margin-top: 8px;margin-left: 0px;" class="fas fa-caret-left"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-3">
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i class="fab fa-whatsapp"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i class="fab fa-pinterest-p"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i class="fab fa-tiktok"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-1">
                                                                            <div>
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i style="margin-top: 8px;margin-left: -6px;" class="fas fa-caret-right"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                            <hr style="position: absolute;bottom: 15px!important;color: #fff;width: 70%;height: 2px;">
                                                                    </div>
                                                                    <button class="temp-btn1"><span><img style="width:35px;" src="public/assets/images/ac1.PNG" alt=""></span> <span  class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>
        
        
                                                                    </div>
        
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>
                                                </div> -->

                                                {{-- theme4 --}}
                                                <div class="col-md-12 clone-this" id="theme4">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto" style="padding: 0;">
                                                         {{--    <input class="theme_number"type="hidden" name="" value="theme4"> --}}
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t1.PNG" class="img-fluid">
                                                                </div> -->
                                                                <div class="temp1 temp6 temp612">
                                                                    <div class="temp612-wrap" style="">
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-7">
                                                                            <h3>Kristin <br>Remy</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row i2 g-3 justify-content-center">
                                                                        <hr style="position: absolute; top:-13px; opacity: 1;color: #fff;width: 60%;height: 3px;"><br>
                                                                        
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white bbb_viewed_nav bbb_viewed_prev_4">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                        <i style="margin-top: 8px;margin-left: 0px;" class="fas fa-caret-left"></i>
                                                                                        <!-- <img style="margin-left: 5px;" src="public/assets/images/ang1.PNG" class=""> -->
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_4">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white bbb_viewed_nav bbb_viewed_next_4" style="">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                        <i style="margin-top: 8px;margin-left: -6px;" class="fas fa-caret-right"></i>
                                                                                        <!-- <img style="margin-left: -15px;" src="images/ang2.PNG" class=""> -->
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                         <hr style="position: absolute;bottom: 35px!important;color: #fff;opacity: 1;width: 60%;height: 3px;">
                                                                    </div>
                                                                    <button class="temp-btn1 copy-html"><span><img style="width:25px;" src="public/assets/images/ac1.PNG" alt=""></span> <span  class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>
        
        
                                                                    </div>
        
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>
                                                </div>

                                                 {{-- theme 5 --}}
                                                <div class="col-md-12 clone-this" id="theme5">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto" style="padding: 0;">
                                                           {{--  <input class="theme_number"type="hidden" name="" value="theme5"> --}}
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t1.PNG" class="img-fluid">
                                                                </div> -->
                                                                <div class="temp1 temp6 temp61">
                                                                    <a class="ac-1 copy-html" href="#">
                                                                        <img style="width:25px;" src="public/assets/images/ac1.PNG" alt="">
                                                                        <!-- <i class="fas fa-dharmachakra"></i> -->
                                                                    </a>
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-7">
                                                                            <h3>Kristin <br>Remy</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row i2 g-3 justify-content-center copy-html">
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_prev_5" style="margin-left: 5px;" src="public/assets/images/a1.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_5">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_next_5" style="margin-left: -15px;" src="public/assets/images/a2.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                    </div>
        
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>

                                                    {{-- theeme6 --}}
                                                </div>

                                                {{-- theme6 --}}

                                                <div class="col-md-12 clone-this" id="theme6">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto p-0">
                                                          {{--   <input class="theme_number"type="hidden" name="" value="theme6"> --}}
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t1.PNG" class="img-fluid">
                                                                </div> -->
                                                                <div class="temp1">
                                                                    <a class="ac-1 copy-html" href="#">
                                                                        <img style="width:25px;" src="public/assets/images/ac1.PNG" alt="">
                                                                        <!-- <i class="fas fa-dharmachakra"></i> -->
                                                                    </a>
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-7">
                                                                            <h3>Kristin <br>Remy</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row i2 g-3 justify-content-center copy-html">
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="bbb_viewed_nav bbb_viewed_prev_6 text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <i style="color:#fff" class="fas fa-caret-left"></i>
                                                                                        <!-- <img class="bbb_viewed_nav bbb_viewed_prev" style="margin-left: 5px;" src="public/assets/images/ang1.PNG" class=""> -->
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_6">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white bbb_viewed_nav bbb_viewed_next_6">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <i style="color:#fff" class="fas fa-caret-right"></i>
                                                                                        <!-- <img class="bbb_viewed_nav bbb_viewed_next" style="margin-left: -15px;" src="images/ang2.PNG" class=""> -->
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                    </div>
        
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- theme7 --}}
                                                <div class="col-md-12 clone-this" id="theme7">
                                                    <div class="row">
                                                        <div style="padding: 0;background-color: #D0BCA3;" class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">
                                                            {{-- <input class="theme_number"type="hidden" name="" value="theme7"> --}}
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t2.png" class="img-fluid">
                                                                </div> -->
                                                                <div class="text-center temp2">
                                                                    <!-- <img src="images/t3.png" class="img-fluid"> -->
                                                                    <!-- <a class="ac-1 copy-html" href="#"><i class="fas fa-dharmachakra"></i></a> -->
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <h3>Kristin</h3>
                                                                            <h4>Remy</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row i2 g-3 justify-content-center copy-html">
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1">
                                                                                <div style="width:70px;">
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_prev_7" style="margin-top: 5px;position: absolute;left: 12px;" src="public/assets/images/angle1.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_7">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon" style="padding: 9px!important;">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i style="font-size: 21px;margin-left: -1px;" class="fa fa-facebook-f"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div style="width: 70px;">
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_next_7" style="margin-top: 5px;position: absolute;right: 12px;" src="public/assets/images/angle11.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                    </div>
                                                                    <!-- <div class="justify-content-center"> -->
                                                                        <div class="text-center">
                                                                                
                                                                            <button class="temp-btn1 copy-html"><span><img style="width:25px;" src="public/assets/images/ac1.PNG" alt=""></span> <span  class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>
                                                                            
                                                                        </div>
                                                                    <!-- </div> -->
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- theme 8 --}}
                                                <div class="col-md-12 clone-this" id="theme8">
                                                    <div class="row">
                                                        <div style="padding: 0;background-color: #D0BCA3;" class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto temp2-bg">
                                                           {{--  <input class="theme_number"type="hidden" name="" value="theme8"> --}}
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t2.png" class="img-fluid">
                                                                </div> -->
                                                                <div class="text-center temp2 temp22">
                                                                    <!-- <img src="images/t3.png" class="img-fluid"> -->
                                                                    <!-- <a class="ac-1 copy-html" href="#"><i class="fas fa-dharmachakra"></i></a> -->
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <h3>Kristin</h3>
                                                                            <h4>Remy</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row i2 g-3 justify-content-center copy-html">
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1">
                                                                                <div style="width:70px;">
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_prev_8" style="margin-top: 5px;position: absolute;left: 12px;" src="public/assets/images/angle1.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_8">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon" style="padding: 9px!important;">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i style="font-size: 21px;margin-left: -1px;" class="fa fa-facebook-f"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div style="width: 70px;">
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_next_8" style="margin-top: 5px;position: absolute;right: 12px;" src="public/assets/images/angle11.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                    </div>
                                                                    <!-- <div class="justify-content-center"> -->
                                                                        <div class="text-center">
                                                                                
                                                                            <button class="temp-btn1 copy-html"><span><img style="width:25px;" src="public/assets/images/ac1.PNG" alt=""></span> <span  class="d-xl-inline d-xxl-inline temptext1">Add to my Contact</span></button>
                                                                            
                                                                        </div>
                                                                    <!-- </div> -->
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- theme9 --}}
                                                <div class="col-md-12 clone-this" id="theme9">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto p-0">
                                                            {{-- <input class="theme_number"type="hidden" name="" value="theme9"> --}}
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t1.PNG" class="img-fluid">
                                                                </div> -->
                                                                <div class="temp1 temp3">
                                                                    <a class="ac-1 copy-html" href="#">
                                                                        <img style="width:25px;" src="public/assets/images/ac1.PNG" alt="">
                                                                        <!-- <i class="fas fa-dharmachakra"></i> -->
                                                                    </a>
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-7">
                                                                            <h3>Kristin <br>Remy</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row i2 g-3 justify-content-center temp9-row">
                                                                        <!-- <div style="margin: auto;"> -->
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1" style="margin:0">
                                                                                <div style="">
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_prev_9" style="margin-top: 5px;position: absolute;left: 12px;" src="public/assets/images/angle1.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10" style="margin:0">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_9">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon" style="padding: 9px!important;">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i style="font-size: 21px;margin-left: -1px;" class="fa fa-facebook-f"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1" style="margin:0">
                                                                                <div style="width: 70px;">
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_next_9" style="margin-top: 5px;position: absolute;right: 12px;" src="public/assets/images/angle11.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                        <!-- </div> -->
                                                                    </div>
                                                                    <!-- <div class="row g-3 justify-content-center soc-row">
                                                                        <div class="" style="margin:auto">
                                                                            <div class="">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <img class="bbb_viewed_nav bbb_viewed_prev_9" style="margin-left: 5px;" src="images/arr1.PNG" class="">
                                                                                
                                                                                </a>
                                                                            </div>
                                                                            <div class="owl-carousel owl-theme bbb_viewed_slider_9">
                                                                                <div class="owl-item">
                                                                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                            
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item">
                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i class="fab fa-instagram"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item">
                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i class="fab fa-whatsapp"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item">
                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i class="fab fa-pinterest-p"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item">
                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i class="fab fa-tiktok"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item">
                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i class="fab fa-whatsapp"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-item">
                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                
                                                                            <div class="per-icon">
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <i class="fab fa-pinterest-p"></i>
                                                                                </a>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                            <div>
                                                                                <a href="#" class="text-decoration-none text-white">
                                                                                    <img style="margin-top: -20px;margin-left: 5px;" src="images/arr2.PNG"  class="bbb_viewed_nav bbb_viewed_next_9">
                                                                                
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div> -->
        
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- theme10 --}}
                                                <div class="col-md-12 clone-this" id="theme10">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto p-0">
                                                          
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t1.PNG" class="img-fluid">
                                                                </div> -->
                                                                <div style="background-repeat: no-repeat!important;background-size: cover!important;" class="temp1 temp5">
                                                                    <a class="ac-1 copy-html" href="#">
                                                                        <img style="width:25px;" src="public/assets/images/ac1.PNG" alt="">
                                                                        <!-- <i class="fas fa-dharmachakra"></i> -->
                                                                    </a>
                                                                    <div class="temp5-wrap">
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-7">
                                                                            <h3>Alex <br>Mustermann</h3>
                                                                            <h5>Founder WEUNIT</h5>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr style="opacity:1">
                                                                    <div class="row i2 g-3 justify-content-center copy-html">
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_prev_10" style="margin-left: 5px;" src="public/assets/images/ar1.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_10">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_next_10" style="margin-left: -15px;" src="public/assets/images/ar2.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                    </div>
                                                                    </div>      
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- theme11 --}}

                                                <div class="col-md-12 clone-this" id="theme11">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9 offset-sm-1 col-md-9 col-lg-12 col-xl-10 col-xxl-12 mx-auto" style="padding: 0;">
                                                            {{-- <input class="theme_number"type="hidden" name="" value="theme11"> --}}
                                                            <a href="#" class="text-decoration-none text-white">
                                                                <!-- <div class="text-center">
                                                                    <img src="images/t1.PNG" class="img-fluid">
                                                                </div> -->
                                                                <div class="temp1 temp6 temp622">
                                                                    <a class="ac-1 copy-html" href="#">
                                                                        <img style="width:25px;" src="public/assets/images/ac1.PNG" alt="">
                                                                        <!-- <i class="fas fa-dharmachakra"></i> -->
                                                                    </a>
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-7">
                                                                            <h3>Kristin <br>Remy</h3>
                                                                            <h5>Founder BlondAgain</h5>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-4">
                                                                            <div class="bbb1">
                                                                                <a class="bl-1" href="">BlondAgain</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row last-row i2 g-3 justify-content-center copy-html">
                                                                        <!-- <div class="bbb_main_container"> -->
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/BeautyPlus_20211213231814100_save.jpg" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-left"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_prev_11" style="margin-left: 5px;" src="public/assets/images/a1.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10">
                                                                                <div class="owl-carousel owl-theme bbb_viewed_slider_11">
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i style="margin-top: 2px;font-size: 26px;" class="fa fa-facebook-f"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-whatsapp"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-pinterest-p"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="owl-item">
                                                                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-2 mx-auto">
                                                                                                    <div class="per-icon">
                                                                                                        <a href="#" class="text-decoration-none text-white">
                                                                                                            <i class="fab fa-tiktok"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div>
                                                                                    <a href="#" class="text-decoration-none text-white">
                                                                                        <!-- <img style="margin-top: 10px;" src="images/arrow.png" class="img-fluid"> -->
                                                                                        <!-- <i style="color:#fff" class="fas fa-caret-right"></i> -->
                                                                                        <img class="bbb_viewed_nav bbb_viewed_next_11" style="margin-left: -15px;" src="public/assets/images/a2.PNG" class="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                         <!-- </div> -->
                                                                    </div>
        
                                                                </div>
                                                            </a>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="tab-pane fade" id="pills-background" role="tabpanel" aria-labelledby="pills-background-tab">
                                            
                                        <div class="padding-50 ">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center pb-3 pt-3">
                                                        <p>Color</p>
                                                        <div class="container-fluid">

                                                            
                                                  <div class="vue-color-picker">
                                                    <div class="vue-color-picker-container">
                                                        <div id="vue_chrome_picker">
                                                            <chrome-color v-model="color"></chrome-color>
                                                    </div>
                                                </div>  
                                              </div>

                                                            <!-- <div class="gradient">
                                                                <div class="picker">
                                                                  <div class="inner"></div>
                                                                </div>
                                                                <div class="overlay"></div>
                                                                <div class="overlay"></div>
                                                            </div>
                                                            <div class="slider">
                                                                <div class="track"></div> 
                                                                <div class="thumb"></div>
                                                            </div>
                                                            <div class="rgb">
                                                                RGB: 255,255,255
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="upload text-center pt-3 pb-3">
                                                        <label for="upload"><span>Image Upload</span> <span><i class="fas fa-upload"></i></span></label>
                                                        <input type="file" name="image" id="background_image_other"style="display:block">
                                                    </div>
                                                    <hr>
                                                    <div class="text-center pt-3 pb-3">
                                                        <label class="text-capitalize">
                                                            <span>online image platform</span>
                                                        </label>
                                                    </div>

                                                    <button style="background-color:#07f5cb;margin:auto;display:flex;" class="color_image" type="button">Save</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="pills-profile-image" role="tabpanel" aria-labelledby="pills-profile-image-tab">
                                            
                                        <div class="padding-50">
                                            <div class="upload text-center pt-3 pb-3">
                                                <label for="upload"><span>Image Upload</span> <span><i class="fas fa-upload"></i></span></label>
                                              <input type="file" name="background_image__" id="background_image"style="display:block">
                                            </div>
                                            <hr>
                                            <div class="text-center pt-3 pb-3">
                                                <label class="text-capitalize">
                                                    <span>online image platform</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-profile-video" role="tabpanel" aria-labelledby="pills-profile-video-tab">
                                            
                                        <div class="padding-50">
                                            <div class="upload text-center pt-3 pb-3">
                                                <label for="upload"><span>Video Upload</span> <span><i class="fas fa-upload"></i></span>
                                                </label>
                                                <input type="file" class="form-control" name="" id="upload">
                                            </div>
                                            <hr>


                                            <div class="text-center pt-3 pb-3">
                                                <label class="text-capitalize">
                                                    <span>online Video platform</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">
                                            
                                        <div class="padding-50">
                                            <div class="upload text-center pt-3 pb-3">
                                                <label for="upload"><span>Upload your logo here</span> <span><i class="fas fa-upload"></i></span></label>

                                                <input type="file" class="form-control" name="logo" id="logo_theme" style="display: block">
                                                <br>

                                                 <button style="background-color:#07f5cb; class="logo_save" type="button">Save</button>

                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="tab-pane fade" id="pills-font" role="tabpanel" aria-labelledby="pills-font-tab">
                                        
                                        <div class="padding-50 ">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row row-cols-lg-5 row-cols-3 g-3">
                                                        <div class="col">
                                                            <p class="mb-0 font-size-12"><strong>Arial</strong></p>
                                                            <p class="mb-0 font-size-12">Arial</p>
                                                            <p class="mb-0 font-size-12">Arial</p>
                                                            <p class="mb-0 font-size-12">Arial</p>
                                                            <p class="mb-0 font-size-12">Arial</p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="mb-0 font-size-12"><strong>Tahoma</strong></p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="mb-0 font-size-12"><strong>Arial</strong></p>
                                                            <p class="mb-0 font-size-12">Arial</p>
                                                            <p class="mb-0 font-size-12">Arial</p>
                                                            <p class="mb-0 font-size-12">Arial</p>
                                                            <p class="mb-0 font-size-12">Arial</p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="mb-0 font-size-12"><strong>Tahoma</strong></p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="mb-0 font-size-12"><strong>Tahoma</strong></p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                            <p class="mb-0 font-size-12">Tahoma</p>
                                                        </div>                                                      
                                                    </div>
                                                    <hr>
                                                    <div class="text-center">
                                                        <div>
                                                            <p class="fw-bold font-size-12">Size</p>
                                                        </div>
                                                        <div class="d-flex justify-content-around">
                                                            <div>
                                                                <p class="mb-0 font-size-12">Small</p>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-size-12">Medium</p>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-size-12">Large</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="text-center">
                                                        <p class="fw-bold font-size-12">Color</p>
                                                        <div class="container">
                                                            <div class="gradient">
                                                                <div class="picker">
                                                                  <div class="inner"></div>
                                                                </div>
                                                                <div class="overlay"></div>
                                                                <div class="overlay"></div>
                                                            </div>
                                                            <div class="slider">
                                                                <div class="track"></div> 
                                                                <div class="thumb"></div>
                                                            </div>
                                                            <div class="rgb">
                                                                RGB: 255,255,255
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-logo1" role="tabpanel" aria-labelledby="pills-logo1-tab">
                                              
                                        <div class="padding-50">
                                          <div class="upload text-center pt-3 pb-3">
                                              <!-- <label for="upload"><span>Choose</span> <span><i class="fas fa-upload"></i></span></label> -->
                                              <!-- <input type="text" class="form-control" placeholder="Enter..." name="" id=""> -->
                                              <div class="row">
                                                <div class="col-md-12 clone-this form-group mb-3">
                                                  <textarea class="form-control" placeholder="Enter.." name="about" id="about_you" cols="30" rows="7"></textarea>

                                                   <button style="background-color:#07f5cb;" class="about_save" type="button"> Save</button>
                                                </div>

                                              </div>
                                          </div>
                                      </div>

                                  </div>
                                    <div class="tab-pane fade" id="pills-logo2" role="tabpanel" aria-labelledby="pills-logo2-tab">
                                              
                                        <div class="padding-50">
                                          <div class="upload text-center pt-3 pb-3">
                                              <label for="upload"><span>Choose Your Location</span> <span><i class="fas fa-upload"></i></span></label>
                                              <input type="file" class="form-control" name="" id="upload">
                                          </div>
                                      </div>

                                  </div>
                                    <div class="tab-pane fade" id="pills-logo3" role="tabpane" aria-labelledby="pills-logo3-tab">
                                              
                                        <div class="padding-50">
                                          <div class="upload text-center pt-3 pb-3">
                                              <label for="upload"><span>New</span> <span><i class="fas fa-upload"></i></span></label>
                                              <input type="file" class="form-control" name="" id="upload">
                                          </div>
                                      </div>

                                  </div>
                                  
                                    


                                </div>

                            </div>
                            <div class="col-lg-5 col-xxl-4 temp-bg-4" id="designTabFix1" style="padding:0;">
                                <div class="left-side-h remove-margin" style="margin-top: 159px;border-left: 1px solid grey;width: 417px;">

                                    {{-- <div class="text-end">
                                        <span><i class="fas fa-mobile-alt fs-3"></i></span>&nbsp;&nbsp;&nbsp;
                                        <span class="ms-2"><i class="fas fa-laptop fs-3"></i></span>
                                    </div> --}}
                                    


                                    
                                  <div class="put-your-content-here">
                                    @if(!empty($design->theme))
                                    @include('themes.'.$design->theme)
                                    @else
                                    <div class="" style="margin-top: 1rem!important;height:92%;display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    color: #000;
                                    font-family: sans-serif;
                                    font-weight: bold;
                                    background: #C1C1C1;border: 1px solid grey;">
                                        <img style="width:100%" src="public/assets/images/temp1.PNG" class="img-fluid">
                                        <span>Preview</span>
                                    </div>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                    </div>
                                </div>
            
            <!-- ./Tabs -->
                        </div>
                      </div>
                    </div>
                 </div>
              </div>
                </div>
            </div>
            <!-- right content area end -->

        </div>
    </div>
</section>

    <!-- Color Picker-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-color/2.8.1/vue-color.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="public/assets/js/color.js"></script>
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
<script type="text/javascript" src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="public/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="public/assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="public/assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script>

//Slider 1

$(document).ready(function()
{


if($('.bbb_viewed_slider').length)
{
var viewedSlider = $('.bbb_viewed_slider');

viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:5},
575:{items:5},
768:{items:5},
991:{items:5},
1199:{items:5}
}
});

if($('.bbb_viewed_prev').length)
{
var prev = $('.bbb_viewed_prev');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next').length)
{
var next = $('.bbb_viewed_next');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});
}
}
});

//Slider 2

$(document).ready(function()
{


if($('.bbb_viewed_slider_2').length)
{
var viewedSlider = $('.bbb_viewed_slider_2');

viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:5},
575:{items:5},
768:{items:5},
991:{items:5},
1199:{items:5}
}
});

if($('.bbb_viewed_prev_2').length)
{
var prev = $('.bbb_viewed_prev_2');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next_2').length)
{
var next = $('.bbb_viewed_next_2');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});
}
}
});

//Slider 3

$(document).ready(function()
{
if($('.bbb_viewed_slider_3').length)
{
var viewedSlider = $('.bbb_viewed_slider_3');
viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:5},
575:{items:5},
768:{items:5},
991:{items:5},
1199:{items:5}
}
});
if($('.bbb_viewed_prev_3').length)
{
var prev = $('.bbb_viewed_prev_3');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}
if($('.bbb_viewed_next_3').length)
{
var next = $('.bbb_viewed_next_3');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});}}
});


//Slider 4

$(document).ready(function()
{


if($('.bbb_viewed_slider_4').length)
{
var viewedSlider = $('.bbb_viewed_slider_4');

viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:3},
575:{items:3},
768:{items:3},
991:{items:3},
1199:{items:3}
}
});

if($('.bbb_viewed_prev_4').length)
{
var prev = $('.bbb_viewed_prev_4');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next_4').length)
{
var next = $('.bbb_viewed_next_4');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});}}

});


//Slider 5


$(document).ready(function()
{

if($('.bbb_viewed_slider_5').length)
{
var viewedSlider = $('.bbb_viewed_slider_5');

viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:5},
575:{items:5},
768:{items:5},
991:{items:5},
1199:{items:5}

}
});

if($('.bbb_viewed_prev_5').length)
{
var prev = $('.bbb_viewed_prev_5');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next_5').length)
{
var next = $('.bbb_viewed_next_5');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});}}

});

//Slider 6

$(document).ready(function()
{
if($('.bbb_viewed_slider_6').length)
{
var viewedSlider = $('.bbb_viewed_slider_6');
viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:5},
575:{items:5},
768:{items:5},
991:{items:5},
1199:{items:5}
}
});
if($('.bbb_viewed_prev_6').length)
{
var prev = $('.bbb_viewed_prev_6');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}
if($('.bbb_viewed_next_6').length)
{
var next = $('.bbb_viewed_next_6');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});}}
});

//Slider 7

$(document).ready(function()
{
if($('.bbb_viewed_slider_7').length)
{
var viewedSlider = $('.bbb_viewed_slider_7');
viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:5},
575:{items:5},
768:{items:5},
991:{items:5},
1199:{items:5}
}
});
if($('.bbb_viewed_prev_7').length)
{
var prev = $('.bbb_viewed_prev_7');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}
if($('.bbb_viewed_next_7').length)
{
var next = $('.bbb_viewed_next_7');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});}}
});

//Slider 8

$(document).ready(function()
{
if($('.bbb_viewed_slider_8').length)
{
var viewedSlider = $('.bbb_viewed_slider_8');
viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:5},
575:{items:5},
768:{items:5},
991:{items:5},
1199:{items:5}
}
});
if($('.bbb_viewed_prev_8').length)
{
var prev = $('.bbb_viewed_prev_8');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}
if($('.bbb_viewed_next_8').length)
{
var next = $('.bbb_viewed_next_8');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});}}
});

//Slider 9

$(document).ready(function()
{
if($('.bbb_viewed_slider_9').length)
{
var viewedSlider = $('.bbb_viewed_slider_9');
viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:7},
575:{items:7},
768:{items:7},
991:{items:7},
1199:{items:7}
}
});
if($('.bbb_viewed_prev_9').length)
{
var prev = $('.bbb_viewed_prev_9');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}
if($('.bbb_viewed_next_9').length)
{
var next = $('.bbb_viewed_next_9');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});}}
});

//Slider 10

$(document).ready(function()
{
if($('.bbb_viewed_slider_10').length)
{
var viewedSlider = $('.bbb_viewed_slider_10');
viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:5},
575:{items:5},
768:{items:5},
991:{items:5},
1199:{items:5}
}
});
if($('.bbb_viewed_prev_10').length)
{
var prev = $('.bbb_viewed_prev_10');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}
if($('.bbb_viewed_next_10').length)
{
var next = $('.bbb_viewed_next_10');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});}}
});

//Slider 11

$(document).ready(function()
{
if($('.bbb_viewed_slider_11').length)
{
var viewedSlider = $('.bbb_viewed_slider_11');
viewedSlider.owlCarousel(
{
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:1000,
nav:false,
dots:false,
responsive:
{
0:{items:5},
575:{items:5},
768:{items:5},
991:{items:5},
1199:{items:5}
}
});
if($('.bbb_viewed_prev_11').length)
{
var prev = $('.bbb_viewed_prev_11');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}
if($('.bbb_viewed_next_11').length)
{
var next = $('.bbb_viewed_next_11');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});}}
});

</script>
<script type="text/javascript">

    
$(document).on('click','.copy-html', function(){

    var theme = $(this).parents('.clone-this').attr('id');

    // alert(theme);
    // return false;
  //   console.log(clone_to);
  //   return false
  
  // var html = $('.').html();
  // console.log(html);
  // return false;

  $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "POST",
    url:'storing-html',
    cache: false,
    data: {theme:theme},
    success: function(response){

        Swal.fire({
             icon: 'success',
              title: 'Successfull',
              text: 'Contact has been added to your wall!',
              timer: 3000
          });


    $('.put-your-content-here').html(response);

     // location.href="design";
    }

  });
});

$(document).on('click','.color_image', function(){
  var myFormData = new FormData();
var color = $('.vc-input__input').val();
var image = $('#background_image_other')[0].files[0];
// console.log(image);
myFormData.append('image', image)
myFormData.append('color',color)

// console.log(image);
$.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "POST",
    url:'storing-background',
     processData: false,
    contentType: false,
    cache: false,
    dataType: 'json',
    data: myFormData,
    
    success: function(response){

         Swal.fire({
             icon: 'success',
              title: 'Successfull',
              text: 'Your data been added!',
              timer: 3000
       });

     location.href="design";
    }

  });

});

$(document).on('click','.logo_save', function(){
  var myFormData = new FormData();
var logo = $('#logo_theme')[0].files[0];
// console.log(logo);
myFormData.append('logo', logo)

// console.log(image);
$.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "POST",
    url:'storing-logo',
     processData: false,
    contentType: false,
    cache: false,
    dataType: 'json',
    data: myFormData,
    
    success: function(response){

         Swal.fire({
             icon: 'success',
              title: 'Successfull',
              text: 'Your Logo has been added!',
              timer: 3000
       });

     location.href="design";
    }

  });

});



$(document).on('click','.about_save', function(){

var about = $('#about_you').val();

// alert(about);

// console.log(logo);

// console.log(image);
$.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "POST",
    url:'storing-about',
    data: {about},
    
    success: function(response){

        Swal.fire({
             icon: 'success',
              title: 'Successfull',
              text: 'Your about has been added!',
              timer: 3000
       });

     location.href="design";
    }

  });

});

// $(document).on('click','.vc-input__input', function(){
    
//     alert($(this).val());
    
    
// });

</script>

</body>
</html>