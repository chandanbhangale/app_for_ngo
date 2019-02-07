<!DOCTYPE html>

<html>

<head>

	<title>Load PDF</title>

	<style type="text/css">

		table{

			width: 100%;

			border:1px solid black;

		}

		td, th{

			border:1px solid black;

		}

	</style>

</head>

<body>

<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Donation</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b>{{ $users['name'] }}</b></span><br/><br/>
       <span style="font-size:30px">as Contributed {{ $users['amount']}} Amount</span> <br/><br/>
       <span style="font-size:25px"><i>dated</i></span><br>
      <span style="font-size:30px">{{$users['date']}}</span>
</div>
</div>
</body>

</html>