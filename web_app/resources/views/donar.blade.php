<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<div>
				<form method="POST" action="{{ route('donate') }}"  enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row">
						<div class="form-title">
							<span>Donate</span>
						</div>
					</div>
						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Name </span>
						<input type="text"  id="d_name" name="d_name" placeholder="Full Name">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Email </span>
						<input type="email"  id="d_email" name="d_email" placeholder="Email">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Mobile No.</span>
						<input type="tel" id="d_mobile" name="d_mobile" placeholder="Mobile No.">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Amount</span>
						<input type="text"  id="d_amount" name="d_amount" placeholder="Designation">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">PAN NO. </span>
						<input type="text"  id="d_pan" name="d_pan" placeholder="Age">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Are you Organization or Individual</span>
							<select id="donar_type" name="donar_type">
 								 <option value="organization">Organization</option>
  								 <option value="individual">Individual</option>
                              </select>
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">do you want to pay for NGO or Particular Event</span>
							<select id="donation_type" name="donation_type">
 								 <option value="NGO">NGO</option>
  								 <option value="Event">Event</option>
                              </select>
						</div>
						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Upcoming Event</span>
							<select id="event" name="event">
          						@foreach($events as $key=>$events)
 								 <option value="{{$events->e_id}}" selected>{{$events->e_name}}</option>
  								@endforeach
                              </select>
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">City </span>
						<input type="text"  id="d_city" name="d_city" placeholder="City">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Sate </span>
						<input type="text"  id="d_state" name="d_state" placeholder="State">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Photo</span><br>
						 <input type="file"  id="d_photo" name="d_photo"> 
						</div>

					<button type="submit">Submit</button>
				</form>
			</div>
</body>
</html>