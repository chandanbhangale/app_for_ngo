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
		            label: 'Income',
		            stack: 'Stack 0',
		            data: [2121,1123,13213,15,151,51565,651,11535,651,651,1551,561],
		            backgroundColor: 'rgba(60, 180, 75, 0.5)',
		            borderColor: 'rgba(60, 180, 75,1)',
		            borderWidth: 1
		        },{
		            label: 'Savings',
		            stack: 'Stack 1',
		            data: [2121,113231,13213,15,151,51565,651,11535,651,651,1551,561],
		            backgroundColor: 'rgba(230, 25, 75, 0.5)',
		            borderColor: 'rgba(230, 25, 75,1)',
		            borderWidth: 1
		        },{
		            label: 'Home',
		            stack: 'Stack 1',
		            data: [2121,11113,132213,15,151,51565,651,11535,651,651,1551,561],
		            backgroundColor: 'rgba(255, 225, 25, 0.5)',
		            borderColor: 'rgba(255, 225, 25, 1)',
		            borderWidth: 1
		        },{
		            label: 'Health',
		            stack: 'Stack 1',
		            data: [2121,111313,13213,15,151,51565,651,11535,651,651,1551,561],
		            backgroundColor: 'rgba(0, 130, 200, 0.5)',
		            borderColor: 'rgba(0, 130, 200, 1)',
		            borderWidth: 1
		        },{
		            label: 'Transportation',
		            stack: 'Stack 1',
		            data: [2121,113,13213,15,151,51565,651,11535,651,651,1551,561],
		            backgroundColor: 'rgba(240, 50, 230, 0.5)',
		            borderColor: 'rgba(240, 50, 230, 1)',
		            borderWidth: 1
		        },{
		            label: 'Entertainment',
		            stack: 'Stack 1',
		            data: [2121,113,13213,15,151,51565,651,11535,651,651,1551,561],
		            backgroundColor: 'rgba(0, 128, 128, 0.5)',
		            borderColor: 'rgba(0, 128, 128, 1)',
		            borderWidth: 1
		        },{
		            label: 'Daily-living',
		            stack: 'Stack 1',
		            data: [2121,113,13213,15,151,51565,651,11535,651,651,1551,561],
		            backgroundColor: 'rgba(128, 0, 0, 0.5)',
		            borderColor: 'rgba(128, 0, 0,1)',
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                scaleLabel: {
					        display: true,
					        labelString: 'Price'
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
		    		display: true,
		    		text: 'Summary',
		    		fontSize: 20
		    	}
		    }
		});

		

	</script>

@endsection