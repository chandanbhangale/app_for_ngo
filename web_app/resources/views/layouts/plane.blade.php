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
    
    <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg bg-info" color-on-scroll="100">
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
    </nav>
    
    @yield('main-section')


    <footer class="footer footer-default">
        <div class="container">
            <div class="copyright float-center">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with
                <i class="material-icons">favorite</i>
                by
                <a>M<sup>3</sup>
                </a>
                for a better Savings.
            </div>
        </div>
    </footer>

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