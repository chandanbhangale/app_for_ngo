@extends('layouts.landing')

@section('carousel-section')
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
    <div class="block-30 item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
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

        </div>
      </div>
    </div>
    <!-- .section -->

    <div class="featured-section overlay-color-2" style="background-image: url('images/bg_3.jpg');">

      <div class="container">
        <div class="row">

          <div class="col-md-12 pl-md-5">
              <h1>To Donate</h1>
              <form action=" {{ url('/donate') }} " method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" class="form-control px-3 py-3" name="d_name" placeholder="Your Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control px-3 py-3" name="d_email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control px-3 py-3" name="d_mobile" placeholder="Mobile No.">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control px-3 py-3" name="d_amount" placeholder="Amount">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control px-3 py-3" name="d_pan" placeholder="PAN No.">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control px-3 py-3" name="d_city" placeholder="City">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control px-3 py-3" name="d_state" placeholder="State">
                </div>
                <div class="form-group">
                  <h5>Are you Organization or Individual</h5>
                  <select id="donar_type" name="donar_type" class="form-control">
 								    <option value="organization">Organization</option>
  								  <option value="individual">Individual</option>
                  </select>
                </div>
                <div class="form-group">
                  <h5>Do you want to pay for NGO or Particular Event</h5>
                  <select id="donation-type" name="donation_type" class="form-control">
 								    <option value="NGO">NGO</option>
  								  <option value="Event">Event</option>
                  </select>
                </div>
                <div class="form-group">
                  <h5>Select Event</h5>
                    <select id="event" name="event" class="form-control">
                      @foreach($events as $key=>$events)
                      <option value="{{$events->e_id}}" selected>{{$events->e_name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <h5>Photo</h5>
                  <input type="file" class="form-control px-3 py-3" id="d_photo" name="d_photo"> 
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-success py-3 px-5">
                </div>
              </form>
          </div>

        </div>
      </div>

    </div>
    <!-- .featured-donate -->

@endsection

@section('custom-scripts')
    
<script>
  $(document).ready(function() {
    
    $('#event').parent().hide();
    $('#donation-type').on('change',function() {
      // console.log($(this).val());
      if($(this).val() == 'NGO') {
        $('#event').parent().hide();
      }
      else if($(this).val() == 'Event') {
        $('#event').parent().show();
      }
    });
  });
  </script>

@endsection