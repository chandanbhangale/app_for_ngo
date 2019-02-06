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


@extends('layouts.landing')

@section('carousel-section')
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
    <div class="block-30 item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
            <h2 class="heading">Lorem ipsum dolor sit amet.</h2>
            </div>
        </div>
        </div>
    </div>

    </div>
</div>

@endsection

@section('main-section')
    <div class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <div class="media block-6">
              <div class="icon">
                <span class="flaticon-donate"></span></div>
              <div class="media-body">
                <h3 class="heading">Make Donation Now</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores esse tenetur quam suscipit sit explicabo adipisci aliquid consequatur fugit nobis.</p>
                <p>
                  <a href="#">Donate</a>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="media block-6">
              <div class="icon">
                <span class="flaticon-people"></span></div>
              <div class="media-body">
                <h3 class="heading">We Need Volunteers</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, ab. Omnis cupiditate, beatae tenetur eveniet sit expedita veritatis in totam vero at saepe velit. Id?</p>
                <p>
                  <a href="#">Volunteer</a>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- .site-section -->

    <div class="featured-donate overlay-color" style="background-image: url('images/bg_2.jpg');">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-2 mb-3 mb-lg-0">
            <img src="images/bg_2.jpg" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-lg-4 pr-lg-5">
            <span class="featured-text mb-3 d-block">Featured</span>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, repellat. Autem est error deserunt beatae blanditiis odit aliquam, cupiditate tempore!</p>
            <div class="progress custom-progress">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <span class="fund-raised d-block mb-5">$8,100 raised of $30,000</span>
          </div>

        </div>
      </div>

    </div>
    <!-- .featured-donate -->

    <div class="site-section fund-raisers">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2>Latest Donations</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 mb-5">
            <div class="person-donate text-center bg-light pt-4">
              <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid">
              <div class="donate-info">
                <h2>Jean Smith</h2>
                <span class="time d-block mb-3">Donated 3 hours ago</span>

                <div class="donate-amount d-flex">
                  <div class="label">Donated</div>
                  <div class="amount">$1,150</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5">
            <div class="person-donate text-center bg-light pt-4">
              <img src="images/person_2.jpg" alt="Image placeholder" class="img-fluid">
              <div class="donate-info">
                <h2>Christine Charles</h2>
                <span class="time d-block mb-3">Donated 3 hours ago</span>

                <div class="donate-amount d-flex">
                  <div class="label">Donated</div>
                  <div class="amount">$150</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5">
            <div class="person-donate text-center bg-light pt-4">
              <img src="images/person_3.jpg" alt="Image placeholder" class="img-fluid">
              <div class="donate-info">
                <h2>Albert Sluyter</h2>
                <span class="time d-block mb-3">Donated 3 hours ago</span>

                <div class="donate-amount d-flex">
                  <div class="label">Donated</div>
                  <div class="amount">$534</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5">
            <div class="person-donate text-center bg-light pt-4">
              <img src="images/person_4.jpg" alt="Image placeholder" class="img-fluid">
              <div class="donate-info">
                <h2>Andrew Holloway</h2>
                <span class="time d-block mb-3">Donated 3 hours ago</span>

                <div class="donate-amount d-flex">
                  <div class="label">Donated</div>
                  <div class="amount">$2,500</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2>Latest Events</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="post-entry">
              <a href="#" class="mb-3 img-wrap">
                <img src="images/img_4.jpg" alt="Image placeholder" class="img-fluid">
                <span class="date">July 26, 2018</span>
              </a>
              <h3>
                <a href="#">Be A Volunteer Today</a>
              </h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <p>
                <a href="#">Read More</a>
              </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="post-entry">
              <a href="#" class="mb-3 img-wrap">
                <img src="images/img_5.jpg" alt="Image placeholder" class="img-fluid">
                <span class="date">July 26, 2018</span>
              </a>
              <h3>
                <a href="#">You May Save The Life of A Child</a>
              </h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <p>
                <a href="#">Read More</a>
              </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="post-entry">
              <a href="#" class="mb-3 img-wrap">
                <img src="images/img_6.jpg" alt="Image placeholder" class="img-fluid">
                <span class="date">July 26, 2018</span>
              </a>
              <h3>
                <a href="#">Children That Needs Care</a>
              </h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <p>
                <a href="#">Read More</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .section -->
@endsection