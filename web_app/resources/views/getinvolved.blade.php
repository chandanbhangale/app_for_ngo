@extends('layouts.landing')

@section('carousel-section')
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">Get In Touch</h2>
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
      <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <h1>To Volunteer</h1>
          <form action=" {{ url('/volunteer') }} " method="POST">
              {{ csrf_field() }}
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="v_name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control px-3 py-3" name="v_email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="v_mobile" placeholder="Mobile No.">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="v_designation" placeholder="Designation">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="v_age" placeholder="Age">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="v_city" placeholder="City">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="v_state" placeholder="State">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control px-3 py-3" name="v_details" placeholder="Why do you want to volunteer"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>
      {{-- </div>
    </div>
    <br>
    <div class="container">
      <div class="row block-9"> --}}
          <div class="col-md-6 pr-md-5">
            <h1>To Teach</h1>
          <form action=" {{ url('/teachers') }} " method="POST">
              {{ csrf_field() }}
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="t_name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control px-3 py-3" name="t_email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="t_mobile" placeholder="Mobile No.">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="t_designation" placeholder="Designation">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="t_age" placeholder="Age">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="t_city" placeholder="City">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="t_state" placeholder="State">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control px-3 py-3" name="t_details" placeholder="Why do you want to teach"></textarea>
            </div>
            <div class="form-group">
              <h5>Photo</h5>
              <input type="file" class="form-control px-3 py-3" name="t_photo">
            </div>
            <div class="form-group">
              <h5>Resume</h5>
              <input type="file" class="form-control px-3 py-3" name="t_resume">
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>
      </div>
    </div>
  </div>
    
@endsection