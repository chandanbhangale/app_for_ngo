{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="{{ url('/logout') }}">Logout</a>
</body>
</html> --}}


@extends('layouts.dash')

@section('page_heading')
    Dashboard    
@endsection

@section('section')
 
<div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
		<div class="card-header card-header-warning card-header-icon">
			<div class="card-icon">
			<i class="material-icons"></i>
			</div>
			<p class="card-category">User engagements</p>
			<h3 class="card-title">184</h3>
		</div>
		<div class="card-footer">
		</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
		<div class="card-header card-header-rose card-header-icon">
			<div class="card-icon">
			<i class="material-icons"></i>
			</div>
			<p class="card-category">Number of Donors</p>
			<h3 class="card-title">721</h3>
		</div>
		<div class="card-footer">
		</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
		<div class="card-header card-header-success card-header-icon">
			<div class="card-icon">
			<i class="material-icons"></i>
			</div>
			<p class="card-category">Funds Raised</p>
			<h3 class="card-title">34,245 &#8377;</h3>
		</div>
		<div class="card-footer">
		</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
		<div class="card-header card-header-info card-header-icon">
			<div class="card-icon">
			<i class="material-icons"></i>
			</div>
			<p class="card-category">Number of events</p>
			<h3 class="card-title">245</h3>
		</div>
		<div class="card-footer">
		</div>
		</div>
	</div>
	</div>

<div class="row">
	<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-icon card-header-info">
		<div class="card-icon">
			<i class="material-icons">timeline</i>
		</div>
		<h4 class="card-title">Sales Summary</h4>
		</div>
		<div class="card-body">
			<canvas id="barChart"></canvas>
		</div>
	</div>
	</div>
	<div class="col-md-6">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
		<div class="card-icon">
			<i class="material-icons">insert_chart</i>
		</div>
		<h4 class="card-title">Multiple Bars Chart
			<small>- Bar Chart</small>
		</h4>
		</div>
		<div class="card-body">
		
		</div>
	</div>
	</div>
</div>
<div class="col-md-12 ml-auto mr-auto">
        <div class="card">
            <canvas id="barChart"></canvas>
        </div>
    </div>
@endsection

@section('custom-scripts')

<script>
    $("#dashboard").addClass("active");
    $('#exampleMdal').modal('show');
</script>

<script>
		var barchart = document.getElementById("barChart");
		var myChart = new Chart(barChart, {
		    type: 'bar',
		    data: {
		        labels: ['Jan','Feb','Mar','Apr','June','July','Aug','Sep','Oct','Nov','Dec'],
		        datasets: [{
		            label: 'Paintings',
		            stack: 'Stack 0',
		            data: Array.from({length: 40}, () => Math.floor(Math.random() * 4000)),
		            backgroundColor: 'rgba(60, 180, 75, 0.5)',
		            borderColor: 'rgba(60, 180, 75,1)',
		            borderWidth: 1
		        },{
		            label: 'Crafts',
		            stack: 'Stack 0',
		            data: Array.from({length: 40}, () => Math.floor(Math.random() * 4000)),
		            backgroundColor: 'rgba(230, 25, 75, 0.5)',
		            borderColor: 'rgba(230, 25, 75,1)',
		            borderWidth: 1
		        },{
		            label: 'Artifacts',
		            stack: 'Stack 0',
		            data: Array.from({length: 40}, () => Math.floor(Math.random() * 4000)),
		            backgroundColor: 'rgba(255, 225, 25, 0.5)',
		            borderColor: 'rgba(255, 225, 25, 1)',
		            borderWidth: 1
		        },{
		            label: 'Clothwear',
		            stack: 'Stack 0',
		            data: Array.from({length: 40}, () => Math.floor(Math.random() * 4000)),
		            backgroundColor: 'rgba(0, 130, 200, 0.5)',
		            borderColor: 'rgba(0, 130, 200, 1)',
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                scaleLabel: {
					        display: true,
					        labelString: 'Sale'
					    },
		                ticks: {
		                    beginAtZero:true,
		                    callback: function(value, index, values) {
                        		return '₹' + value;
                    		}
		                }
		            }],
		            xAxes: [{
		            	scaleLabel: {
					        display: true,
					        labelString: 'Month'
					    }
		            }]
		        },
		        title: {
		    		display: false,
		    		text: 'Summary',
		    		fontSize: 20
		    	}
		    }
		});

		

	</script>

@endsection