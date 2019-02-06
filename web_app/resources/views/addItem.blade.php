<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<div>
				<form method="POST" action="{{ route('addItem') }}"  enctype="multipart/form-data">
					{{ csrf_field() }}
					 @if(session('error'))
           				 <center>
             				 <p> {{session('error')}}</p>
            			</center>
           			 @endif 
					<div class="row">
						<div class="form-title">
							<span>Items</span>
						</div>
					</div>
						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Name</span>
						<input type="text"  id="i_name" name="i_name" placeholder="Item Name">
						</div>


						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Description</span>
						<textarea rows="4" cols="50" id="i_details" name="i_details"></textarea>
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">No. of Items</span>
						<input type="number"  id="i_count" name="i_count" placeholder="No. of Items">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Amount(per unit)</span>
						<input type="text"  id="i_amount" name="i_amount" placeholder="Amount">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Item Type</span>
						<input type="text"  id="i_type" name="i_type" placeholder="item Type">
						</div>

						<div class="row">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name.">Item Photo</span><br>
						 <input type="file"  id="i_photo" name="i_photo"> 
						</div>

					<button type="submit">Submit</button>
				</form>
			</div>
</body>
</html>