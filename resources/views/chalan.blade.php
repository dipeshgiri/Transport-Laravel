@extends('layout')
@section('content')
<link rel="stylesheet" href="css/chalan.css">
<!--start of the 2nd column of side bar-->
<div class="col-sm-9 col-md-10" style="background-color: #F5F5F5;">
<p id="heading">Chalan</p>
  <div class="row text-center mx-5">
  <div class="col-lg-12">
      <div class="card text-black  mb-3">
        <div class="card-body">
        <p id="companyname">Om Laxmi Dhuwani Sewa <label id="chalanhead">New Chalan</label></p>
        <hr>
        <form action="/chalansubmit" method="post">
        @csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="Consignor">Driver-Name</label>
      <input type="name" class="form-control" name="driver_name" placeholder="Driver Name" required/>
      @error('driver_name')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
     <div class="form-group col-md-4">
      <label for="Consignor">Truck-Number</label>
      <input type="name" class="form-control" name="truck_number" placeholder="Truck Number" required/>
    </div>
     <div class="form-group col-md-4">
      <label for="Consignor">Date</label>
      <input type="name" class="form-control" name="date" placeholder="Date" required/>
      @error('date')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
</div>
<div class="form-row">
     <div class="form-group col-md-4">
      <label for="Consignor">Loading-Charge</label>
      <input type="name" class="form-control" name="loading_charge" placeholder="Loading Charge" required/>
      @error('loading_charge')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
     <div class="form-group col-md-4">
      <label for="Consignor">Departure Location</label>
      <input type="name" class="form-control" name="departure_location" placeholder="Departure Location" required/>
      @error('departure_location')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
     <div class="form-group col-md-4">
      <label for="Consignor">Destination Location</label>
      <input type="name" class="form-control"  name="destination_location" placeholder="Destination Location" required/>
      @error('destination_location')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
</div>
   <div class="col-lg-12 mt-4">
      <div class="card text-black  mb-3" id="cards">
        <div class="card-body">
        	<table class="table table-lg">
        		<thead>
        			<tr>
        				<th id="col">Select</th>
        				<th id="col">Bilti No</th>
        				<th id="col">Date</th>
        				<th id="col">Consignor</th>
        				<th id="col">Consignee</th>
        				<th id="col">Particulars</th>
        				<th id="col">Item Type</th>
        				<th id="col">Quantity</th>
        				<th id="col">Amount</th>
        			</tr>
        		</thead>
        		@foreach($data as $i)
        		<tr>
        			<td id="data"><input type="checkbox" name="records[]" value="{{$i->bilti_no}}"></td>
        			<td id="data">{{$i->bilti_no}}</td>
        			<td id="data">{{$i->date}}</td>
        			<td id="data">{{$i->consignor}}</td>
        			<td id="data">{{$i->consignee}}</td>
        			<td id="data">{{$i->particulars}}</td>
        			<td id="data">{{$i->item_type}}</td>
        			<td id="data">{{$i->quantity}}</td>
        			<td id="data">{{$i->amount}}</td>
        		</tr>
        		@endforeach
        	</table>
 </div>
 </div>
</div>
<button class="btn btn-success">Submit</button>
</div>
</form>
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