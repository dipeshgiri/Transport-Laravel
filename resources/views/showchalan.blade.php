@extends('layout')
@section('content')

<link rel="stylesheet" href="css/showallinvoice.css">

<!--start of the 2nd column of side bar-->
<div class="col-sm-9 col-md-10" style="background-color: white;">

@if(Session::get('update'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Chalan Data Updated Successfully.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

@if(Session::get('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Sucess!</strong> Chalan Data Deleted Successfully.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

	<h1 class="text-center">Om Laxmi Dhuwani Sewa</h1>
	<p class="address">Biratnagar,Opposite Of Nepal Electricity Authority</p>
	<p class="contact">Contact Number:021-535671/9802723942/9802753385</p>
	<p class="record">Chalan Records</p>
	<a href="/exportchalandata" class="btn btn-primary">Export As PDF</a>
	<br><br>
	<table class="table table-lg" id="table"> 
	<thead>
		<tr>
			<th class="col">Chalan Number</th>
			<th class="col">Date</th>
			<th class="col">Driver Name</th>
			<th class="col">Departure Location</th>
			<th class="col">Destination Location</th>
			<th class="col">Gadi Number</th>
			<th class="col">Loading Charge</th>
			<th class="col">Total Amount</th>
			<th class="col">Vat Amount</th>
			<th class="col">Total Amount With Vat</th>
			<th class="col">Created BY</th>
			<th class="col">View</th>
			<th class="col">Edit</th>
			<th class="col">Delete</th>
			<th class="col">PDF</th>
			
		</tr>
	</thead>
	@foreach($data as $datas)
	<tr>
		<td>{{$datas->chalan_no}}</td>
		<td>{{$datas->date}}</td>
		<td>{{$datas->driver_name}}</td>
		<td>{{$datas->departure_location}}</td>
		<td>{{$datas->destination_location}}</td>
		<td>{{$datas->gadi_no}}</td>
		<td>{{$datas->loading_charge}}</td>
	    <td>{{$datas->total_amt}}</td>
	    <td>{{$datas->vat_amt}}</td>
	    <td>{{$datas->totalamtwithvat}}</td>
	    <td>{{$datas->user}}</td>
	    <td><a href="view/{{$datas->chalan_no}}" class="btn btn-primary btn-sm">View</a></td>
	    <td><a href="edit/{{$datas->chalan_no}}" class="btn btn-success btn-sm">Edit</a></td>
	    <td><a href="delete/{{$datas->chalan_no}}" class="btn btn-danger btn-sm">Delete</a></td>
        <td><a href="chalanpdf/{{$datas->chalan_no}}" class="btn btn-info btn-sm">PDF</a></td>
	</tr>
	@endforeach
	</table>
	<div>
		<br>
		<p id="page">Page: {{$data->currentPage()}}, Showing {{$data->count()}} Records On This Page</p>
		<p id="page">Total Chalan: {{$data->total()}}</p>
		<br>
		<br>
		{{$data->links()}}
	</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
@stop