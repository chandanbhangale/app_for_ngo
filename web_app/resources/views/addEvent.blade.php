<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<div>
				<form method="POST" action="{{ route('addEvent') }}"  enctype="multipart/form-data">
					{{ csrf_field() }}
					 @if(session('error'))
           				 <center>
             				 <p> {{session('error')}}</p>
            			</center>
           			 @endif 
					<div class="row">
						<div class="form-title">
							<span>Event</span>
						</div>
					</div>
						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Name </span>
						<input type="text"  id="e_name" name="e_name" placeholder="Full Name">
						</div>


						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Description</span>
						<textarea rows="4" cols="50" id="e_details" name="e_details"></textarea>
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Date</span>
						<input type="date"  id="e_date" name="e_date" placeholder="Date">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Amount Required for Event</span>
						<input type="text"  id="e_amount" name="e_amount" placeholder="Amount">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Event Head </span>
						<input type="text"  id="e_head" name="e_head" placeholder="Event Head">
						</div>

						
						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Address of Event</span>
						<input type="text"  id="e_addr" name="e_addr" placeholder="Address">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Photo</span><br>
						 <input type="file"  id="e_photo" name="e_photo"> 
						</div>

					<button type="submit">Submit</button>
				</form>
			</div>
</body>
</html>