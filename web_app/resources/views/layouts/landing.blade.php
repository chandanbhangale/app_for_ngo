<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="icon" href="https://cdn4.iconfinder.com/data/icons/business-graphs-charts-set-2/256/Business_Graph__Charts-23-512.png">

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/md-css.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">

    <!-- Material Kit CSS -->
    <link href=" {{ URL::to('css/material-kit.min.css')}} " rel="stylesheet"/>
    <link href=" {{ URL::to('css/mk-demo.css')}} " rel="stylesheet"/>
    <style>
        [data-sr] {
            visibility: hidden;
        }
    </style>

    <title>Family Expenditure Planner</title>
</head>
<body>
    
    {{-- <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg bg-info" color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand">
                    Family Expenditure Planner
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            @yield('nav-section')
        </div>
    </nav> --}}
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Giving</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span>
          Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="donate.html" class="nav-link">Donate</a>
            </li>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">Gallery</a>
            </li>
            <li class="nav-item">
              <a href="blog.html" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    @yield('carousel-section')
    
    @yield('main-section')


    <footer class="footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4">
                    <h3 class="heading-section">About Us</h3>
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p>
                        <a href="#" class="btn btn-primary px-4 py-3">Join Volunteer</a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h3 class="heading-section">Blog</h3>
                    <div class="block-21 d-flex mb-4">
                        <figure class="mr-3">
                            <img src="images/img_1.jpg" alt="" class="img-fluid">
                        </figure>
                    <div class="text">
                        <h3 class="heading">
                        <a href="#">Give Meal A Day</a>
                        </h3>
                        <div class="meta">
                        <div>
                            <a href="#">
                            <span class="icon-calendar"></span>
                            July 29, 2018</a>
                        </div>
                        <div>
                            <a href="#">
                            <span class="icon-person"></span>
                            Admin</a>
                        </div>
                        <div>
                            <a href="#">
                            <span class="icon-chat"></span>
                            19</a>
                        </div>
                        </div>
                    </div>
                    </div>
    
                <div class="block-21 d-flex mb-4">
                  <figure class="mr-3">
                    <img src="images/img_2.jpg" alt="" class="img-fluid">
                  </figure>
                  <div class="text">
                    <h3 class="heading">
                      <a href="#">Free Education For African Children</a>
                    </h3>
                    <div class="meta">
                      <div>
                        <a href="#">
                          <span class="icon-calendar"></span>
                          July 29, 2018</a>
                      </div>
                      <div>
                        <a href="#">
                          <span class="icon-person"></span>
                          Admin</a>
                      </div>
                      <div>
                        <a href="#">
                          <span class="icon-chat"></span>
                          19</a>
                      </div>
                    </div>
                  </div>
                </div>
    
                <div class="block-21 d-flex mb-4">
                  <figure class="mr-3">
                    <img src="images/img_4.jpg" alt="" class="img-fluid">
                  </figure>
                  <div class="text">
                    <h3 class="heading">
                      <a href="#">Join As A Volunteers</a>
                    </h3>
                    <div class="meta">
                      <div>
                        <a href="#">
                          <span class="icon-calendar"></span>
                          July 29, 2018</a>
                      </div>
                      <div>
                        <a href="#">
                          <span class="icon-person"></span>
                          Admin</a>
                      </div>
                      <div>
                        <a href="#">
                          <span class="icon-chat"></span>
                          19</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="block-23">
                  <h3 class="heading-section">Contact Info</h3>
                  <ul>
                    <li>
                      <span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                    <li>
                      <a href="#">
                        <span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a>
                    </li>
                    <li>
                      <span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
                  </ul>
                </div>
              </div>
    
            </div>
            <div class="row pt-5">
              <div class="col-md-12 text-center">
                <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | This template is made with
                  <i class="icon-heart" aria-hidden="true"></i>
                  by
                  <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
    </div>

    <!-- Core JS Files -->
    <script src=" {{ URL::to('js/core/jquery.min.js') }} " type="text/javascript"></script>
    <script src=" {{ URL::to('js/core/popper.min.js') }} " type="text/javascript"></script>
    <script src=" {{ URL::to('js/core/bootstrap-material-design.min.js') }} " type="text/javascript"></script>
    <script src=" {{ URL::to('js/plugins/moment.min.js') }} "></script>
    <!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src=" {{ URL::to('js/plugins/bootstrap-datetimepicker.js') }} " type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src=" {{ URL::to('js/material-kit.min.js') }} " type="text/javascript"></script>

    <script src=" {{ URL::to('js/plugins/scrollReveal.min.js') }} "></script>
    <script src="{{ URL::to('js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ URL::to('js/popper.min.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ URL::to('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::to('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap-datepicker.js') }}"></script>

    <script src="{{ URL::to('js/aos.js') }}"></script>
    <script src="{{ URL::to('js/jquery.animateNumber.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ URL::to('js/google-map.js') }}"></script>
    <script src="{{ URL::to('js/main.js') }}"></script>
    <script>
        window.sr = new scrollReveal();
    </script>
    <script>
        $('.datetimepicker').datetimepicker({
            viewMode: 'days',
            format: 'YYYY/MM/DD',
            maxDate: $.now(),
            icons: {
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });
    </script>

    @yield('custom-scripts')
</body>
</html>