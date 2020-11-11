@extends('layout')
@section('content')
<link rel="stylesheet" href="css/home.css">
<!--start of the 2nd column of side bar-->
<div class="col-sm-9 col-md-10" style="background-color: #F5F5F5;">
	<div class="row text-center mx-5">
	<div class="col-sm-4 mt-5">
	    <div class="card text-black  mb-3" id="cards">
		    <div class="card-body">
				<p>Total Invoices</p>
				<p>50987</p>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'No Of Invoices'],
          ['1st May',  1000],
          ['2nd May',  1170],
          ['3rd May',  500],
          ['5th May',  2000],
          ['10th May',2],
          ['15th May',300]
        ]);

        var options = {
          title: 'Invoices',
          hAxis: {title: 'Daily',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('invoice_div'));
        chart.draw(data, options);
      }
      </script>
    <div id="invoice_div"></div>
			</div>
		</div>
	</div>

    <div class="col-sm-4 mt-5">
         <div class="card text-black  mb-3"  id="cards">
		    <div class="card-body">
			 <p>Total Chalan</p>
			 <p>1200</p>
			  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Daily', 'Chalan'],
          ['1st May',  1000],
          ['2nd May',  1170],
          ['3rd May',  500],
          ['5th May',  2000],
          ['10th May',2],
          ['15th May',300]
        ]);

        var options = {
          title: 'Chalan',
          hAxis: {title: 'Daily',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chalan_div'));
        chart.draw(data, options);
      }
      </script>
    <div id="chalan_div"></div>
    </div>
	</div>
	</div>

	<div class="col-sm-4 mt-5">
	<div class="card text-black mb-3" id="cards">
	     <div class="card-body">
			<p>Total Loaded Truck</p>
			<p>250</p>

			  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Daily', 'Chalan'],
          ['1st May',  1000],
          ['2nd May',  1170],
          ['3rd May',  500],
          ['5th May',  2000],
          ['10th May',2],
          ['15th May',300]
        ]);

        var options = {
          title: 'Chalan',
          hAxis: {title: 'Daily',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}	
  }
  
        

        var chart = new google.visualization.AreaChart(document.getElementById('truck_div'));
        chart.draw(data, options);
      }
      </script>
    <div id="truck_div"></div>
	   </div> 
	 </div>
  </div>
</div>

<div class="row text-center mx-5">

    <div class="col-sm-6 mt-5">
      <div class="card text-black mb-3" id="seccard">
        <div class="card-body">
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Truck', 'No of Loads'],
          ['Na 3 Kha 335', {{$data335}}],
          ['Na 3 Kha 3983',{{$data3983}}],
          ['Ba 3 Kha 294', {{$data294}}]
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart"></div>
  </div>
  </div>
  </div>
  <div class="col-sm-6 mt-5">
        <div class="table">
        <h3>Staff Details</h3>
<table class="table table-sm table-bordered">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Truck Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Dipesh Giri</td>
      <td>Office </td>
      <td>None</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jiwan Giri</td>
      <td>Office</td>
      <td>None</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Santosh Hamal</td>
      <td>Driver</td>
      <td>Na 3 Kha 335</td>
    </tr>
    
    <tr>
      <th scope="row">4</th>
      <td>Akash Shrestha</td>
      <td>Driver</td>
      <td>Ba 3 Kha 294</td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Ganesh Bista</td>
      <td>Driver</td>
      <td>Na 3 Kha 3983</td>
    </tr>
  </tbody>
</table>
</div>
    </div>
    </div>
    

</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
@stop

