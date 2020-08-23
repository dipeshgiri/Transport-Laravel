@extends('layout')
@section('content')

<link rel="stylesheet" href="css/vat.css">
<!--start of the 2nd column of side bar-->

<div class="col-sm-9 col-md-10">

@if(Session::get('update'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Party Payment Data Updated Successfully.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

@if(!isset($record))
<p id="head">Party Payment</p>
<p id="headbelow">Party Payment Details</p>
<div class="row">
	<div class="col-sm-12">
	    <div class="card text-black  mb-3" id="cards">
		    <div class="card-body">
		    	<p id="para">Search Party Details</p>
                 <form action="/partypayment" method="GET">
                 	@csrf
                     <div class="form-row">
                     <div class="col">
                     <input type="text" name="partyname" class="form-control" placeholder="Enter Party Name" required/>
                      </div>
                     <div class="col">
                     <select class="form-control" name="modeofpayment" required/>
        			 <option value="Due">Due</option>
        			 <option value="To Pay">To Pay</option>
        			 <option value="Paid">Paid</option>
        			 </select>
                     </div>
                     <div class="col">
                     <input type="text" name="start" class="form-control" placeholder="Starting Date" required/>
                     </div>
                     <div class="col">
                     <input type="text" name="end" class="form-control" placeholder="Ending Date" required/>
                     </div>
                     </div>
                     <button type="submit" class="btn btn-primary" id="btn">Submit</button>
                 </form>                 
             </div>
        </div>
    </div>
</div>
@endif

@if(isset($record))
<br>

	<h1 class="text-center">Om Laxmi Dhuwani Sewa</h1>
	<p class="address">Biratnagar,Opposite Of Nepal Electricity Authority</p>
	<p class="contact">Contact Number:021-535671/9802723942/9802753385</p>
	<p class="record">Party Payment Details</p>
	<a href="/partypaymentpdf/{{$consignor}}/{{$startdate}}/{{$enddate}}/{{$mof}}" class="btn btn-primary">Export As PDF</a>
	<br><br>
	<p class="consignor">Party Name: <label>{{$consignor}}</label> <label class="mof">Mode Of Payment: {{$mof}}</label><label class="partydate">From: {{$startdate}}</label><label class="partydate">To: {{$enddate}}</label></p>
	<table class="table" id="table"> 
	<thead>
		<tr>
			<th class="col" id="biltino">Bilti Number</th>
			<th class="col" id="date">Date</th>
			<th class="col" id="partyname">Party Name</th>
			<th class="col" id="pan">Pan Number</th>
			<th class="col" id="taxamt">Taxable-Amount</th>
			<th class="col" id="vatamt">Vat-Amount</th>
			<th class="col" id="totalamt">Total-Amount</th>
		</tr>
	</thead>

	@foreach($record as $i)
	<tr>
		<td>{{$i->bilti_no}}</td>
		<td>{{$i->date}}</td>
		@if($i->mode_of_payment=='To Pay')
		<td>{{$i->consignor}}</td>
		<td>{{$i->consignor_pan_no}}</td>
		@elseif($i->mode_of_payment=='Due' || $i->mode_of_payment=='Paid')
		<td>{{$i->consignee}}</td>
		<td>{{$i->consignee_pan_no}}</td>
		@endif
		<td>{{$i->total_amt}}</td>
		<td>{{$i->vat}}</td>
		<td>{{$i->totalamtwithvat}}</td>
	</tr>
	@endforeach
</table>
	<div>
	<div>
		<table class="table" id="table">
		<thead>
			<tr>
		<th><label class="partytotal">Total</label><label class="partytotalsum">{{$totalsum}}</label><label class="partyvat">{{$vat}}</label><label class="partytotalamt">{{$totalamt}}</label></th>
		</tr>
		</thead>
		</table>

		<p id="page">Page: {{$record->currentPage()}}, Showing {{$record->count()}} Records On This Page</p>
		<p id="page">Total Record: {{$record->total()}}</p>
		<br>
		<br>
		{{$record->appends(['partyname'=>$consignor,'modeofpayment'=>$mof,'start' => $startdate,'end'=>$enddate])->render()}}
	</div>
	</div>
	@if($mof=='Due')
	<a href="/partypaymentpaid/{{$consignor}}/{{$startdate}}/{{$enddate}}" class="btn btn-success">Paid</a>
	@endif
	@endif
</div>

</div>
</div>
</div>
</body>
</html>
@stop