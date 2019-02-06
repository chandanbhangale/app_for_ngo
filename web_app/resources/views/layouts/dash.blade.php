<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

    <title>NGO</title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/md-css.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}">

    {{-- CSS Files --}}
    <link href="{{ URL::to('css/material-dashboard-pro.min.css') }}" rel="stylesheet"/>
</head>
<body>
    
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="black">
            <!-- Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger" Tip 2: you can also add an image using data-image tag -->
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text logo-normal text-center">
                    NGO
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src=" {{ URL::to('images/default-avatar.jpg') }} "/>
                    </div>
                    <div class="user-info">
                        <a>
                            <span>
                                Admin
                            </span>
                        </a>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item" id="dashboard">
                        <a class="nav-link" href=" {{ url('/user/dashboard') }} ">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item" id="members">
                        <a class="nav-link" href=" {{ url('/user/members') }} ">
                            <i class="material-icons">group</i>
                            <p>Family Members</p>
                        </a>
                    </li>
                    <li class="nav-item"  id="reports">
                        <a class="nav-link" href=" {{ url('/user/report') }} ">
                            <i class="material-icons">table_chart</i>
                            <p>Reports</p>
                        </a>
                    </li>
                    <li class="nav-item"  id="addie">
                        <a class="nav-link" href=" {{ url('/user/viewie') }} ">
                            <i class="material-icons">add</i>
                            <p>Add Income/Expense</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logout') }}">
                            <i class="material-icons">power_settings_new</i>
                            <p>Log Out</p>
                        </a>
                    </li>
                    <!-- your sidebar here -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">@yield('page_heading')</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    {{-- <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">notifications</i>
                                </a>
                            </li>
                            <!-- your navbar here -->
                        </ul>
                    </div> --}}
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    @yield('section')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href=" {{ url('/') }} ">
                                    Family Expenditure Planner
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with
                        <i class="material-icons">favorite</i>
                        by
                        <a>M<sup>3</sup></a>
                        for a better saving.
                    </div>
                    <!-- your footer here -->
                </div>
            </footer>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src=" {{ URL::to('js/core/jquery.min.js') }} " type="text/javascript"></script>
    <script src=" {{ URL::to('js/core/popper.min.js') }} " type="text/javascript"></script>
    <script src=" {{ URL::to('js/core/bootstrap-material-design.min.js')}} " type="text/javascript"></script>
    <script src=" {{ URL::to('js/plugins/perfect-scrollbar.jquery.min.js')}} "></script>
    <script src=" {{ URL::to('js/plugins/moment.min.js')}} "></script>
    <!-- Google Maps Plugin -->
    <!-- <script src=" https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!-- Chartist JS -->
    {{-- <script src=" {{ URL::to('js/plugins/chartist.min.js')}} "></script> --}}
    <!-- Notifications Plugin -->
    <script src=" {{ URL::to('js/plugins/bootstrap-notify.js')}} "></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src=" {{ URL::to('js/plugins/jasny-bootstrap.min.js')}} "></script>
    <!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    
    <script src=" {{ URL::to('js/plugins/bootstrap-selectpicker.js')}} " type="text/javascript"></script>
    <script src=" {{ URL::to('js/plugins/Chart.min.js')}} " type="text/javascript"></script>
    <script src=" {{ URL::to('js/plugins/bootstrap-datetimepicker.js')}} " type="text/javascript"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <!-- <script src=" {{ URL::to('js/material-dashboard.min.js?v=2.1.0')}} " type="text/javascript"></script> -->
    <script src=" {{ URL::to('js/material-dashboard-pro.min.js')}} " type="text/javascript"></script>
    <script src=" {{ URL::to('js/demo-pro.js')}} "></script>

    @yield('custom-scripts')
</body>
</html>