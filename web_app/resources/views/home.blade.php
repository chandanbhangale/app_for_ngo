{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <a href="{{ url('/authenticate/register') }}">Register</a>
    <a href="{{ url('/authenticate/login') }}">Login</a>
</body>
</html> --}}


@extends('layouts.plane')
@section('nav-section')
    
<div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href=" {{ url('/authenticate/register') }} " class="btn btn-rose btn-round">
                Register
            </a>
        </li>
        <li class="nav-item">
            <a href=" {{ url('/authenticate/login') }} " class="nav-link">
                Login
            </a>
        </li>
    </ul>
</div>

@endsection

@section('main-section')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('images/home.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title" data-sr="wait 0.5s,enter bottom, ease-in-out 30px"># TAKE CHARGE</h1>
                <h3 data-sr="wait 1s,enter bottom ease-in-out 40px">It's not your salary that makes you rich, it's your spending habits.</h3>
                <br>
                <a href=" {{ url('/authenticate/register') }} " class="btn btn-info btn-round btn-raised btn-lg" data-sr="wait 1.5s,enter bottom ease-in-out 40px">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <h2 class="title">Why do we need to plan our Expenditures</h2>
                    <h4 class="description">Once you create your first expenditure, begin to use it and get a good feel for how it can keep your finances on track, you may want to map out your spending plan or expenditure for 6 months to a year down the road. By doing this you can easily forecast which months your finances may be tight and which ones you'll have extra money. You can then look for ways to even out the highs and lows in your finances so that things can be more manageable and pleasant.</h4>
                </div>
            </div>
            <div class="section">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <h2 class="title">How this product helps You</h2>
                        <h4 class="description">Extending your expenditure out into the future also allows you to forecast how much money you will be able to save for important things like your vacation, a new vehicle, your first home or home renovations, an emergency savings account or your retirement. Using a realistic budget to forecast your spending for the year can really help you with your long term financial planning. You can then make realistic assumptions about your annual income and expense and plan for long term financial goals like starting your own business, buying an investment or recreation property or retiring.</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <h4 class="info-title">Better savings</h4>
                            <!-- <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h4 class="info-title">Future planning</h4>
                            <!-- <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h4 class="info-title">Maintained Records</h4>
                            <!-- <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <h4 class="info-title">Illustrations</h4>
                            <!-- <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h4 class="info-title">Decentralised Managment</h4>
                            <!-- <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h4 class="info-title">Family Spendings</h4>
                            <!-- <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section text-center section-tabs">
        <div class="container">
            <h2 class="title">Here is our team</h2>
            <div class="team">
                <div class="row">
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card bmd-card-raised" data-sr="wait 0.6s and then enter left ease-in-out 50px">
                                <div class="col-md-6 ml-auto mr-auto mt-5">
                                    {{-- <img src=" {{ URL::to('images/muskan.jpg') }} " alt="Thumbnail Image" class="img-raised rounded-circle img-fluid"> --}}
                                </div>
                                <h4 class="card-title">Muskan Khatri
                                    <br>
                                    <small class="card-description text-muted">Web Designer</small>
                                </h4>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card bmd-card-raised" data-sr="wait 0.6s and then enter top ease-in-out 50px">
                                <div class="col-md-6 ml-auto mr-auto mt-5">
                                    {{-- <img src=" {{ URL::to('images/manoj.jpg') }} " alt="Thumbnail Image" class="img-raised rounded-circle img-fluid"> --}}
                                </div>
                                <h4 class="card-title">Manoj Ochaney
                                    <br>
                                    <small class="card-description text-muted">Web Developer</small>
                                </h4>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card bmd-card-raised" data-sr="wait 0.6s and then enter right ease-in-out 50px">
                                <div class="col-md-6 ml-auto mr-auto mt-5">
                                    {{-- <img src=" {{ URL::to('images/mohit.jpg') }} " alt="Thumbnail Image" class="img-raised rounded-circle img-fluid"> --}}
                                </div>
                                <h4 class="card-title">Mohit Makhija
                                    <br>
                                    <small class="card-description text-muted">Web Developer</small>
                                </h4>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section text-center">
        <a href=" {{ url('/authenticate/register') }} " class="btn btn-info btn-round btn-raised btn-lg" data-sr="wait 0.5s,enter bottom ease-in-out 40px">
            Get Started
        </a>
    </div>
</div>

@endsection