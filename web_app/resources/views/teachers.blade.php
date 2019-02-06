<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<div>
				<form method="POST" action="{{ route('teachers') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row">
						<div class="form-title">
							<span>Contact Us</span>
						</div>
					</div>
						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Name </span>
						<input type="text" data-min-length="8" id="t_name" name="t_name" placeholder="Full Name">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Email </span>
						<input type="email"  id="t_email" name="t_email" placeholder="Email">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Mobile No.</span>
						<input type="tel" id="t_mobile" name="t_mobile" placeholder="Mobile No.">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Designation </span>
						<input type="text"  id="t_designation" name="t_designation" placeholder="Designation">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Age </span>
						<input type="text"  id="t_age" name="t_age" placeholder="Age">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">City </span>
						<input type="text"  id="t_city" name="t_city" placeholder="City">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Sate </span>
						<input type="text"  id="t_state" name="t_state" placeholder="State">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Photo </span>
						 <input type="file"  id="t_photo" name="t_photo"> 
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">resume </span>
						 <input type="file"  id="t_resume" name="t_resume"> 
						</div>
						

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Why do you want to volunteer</span><br>
						<textarea rows="4" cols="50" id="t_details" name="t_details"></textarea>
						</div>

					<button type="submit">Submit</button>
				</form>
			</div>
</body>
</html>