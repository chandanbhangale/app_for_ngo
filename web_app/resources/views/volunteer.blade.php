<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<div>
	<form method="POST" action="{{ route('volunteer') }}">
		{{ csrf_field() }}
		<div class="row">
			<div class="form-title">
				<span>Contact Us</span>
			</div>
		</div>
			<div class="row">
			<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Name </span>
			<input type="text" data-min-length="8" id="v_name" name="v_name" placeholder="Full Name">
			</div>

			<div class="row">
			<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Email </span>
			<input type="email"  id="v_email" name="v_email" placeholder="Email">
			</div>

			<div class="row">
			<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Mobile No.</span>
			<input type="tel" id="v_mobile" name="v_mobile" placeholder="Mobile No.">
			</div>

			<div class="row">
			<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Designation </span>
			<input type="text"  id="v_designation" name="v_designation" placeholder="Designation">
			</div>

			<div class="row">
			<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Age </span>
			<input type="text"  id="v_age" name="v_age" placeholder="Age">
			</div>

			<div class="row">
			<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">City </span>
			<input type="text"  id="v_city" name="v_city" placeholder="City">
			</div>

			<div class="row">
			<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Sate </span>
			<input type="text"  id="v_state" name="v_state" placeholder="State">
			</div>

			<div class="row">
			<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Why do you want to volunteer</span><br>
			<textarea rows="4" cols="50" id="v_details" name="v_details"></textarea>
			</div>

		<button type="submit">Submit</button>
	</form>
			</div>
</body>
</html>