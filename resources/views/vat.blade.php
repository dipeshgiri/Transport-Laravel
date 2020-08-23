@extends('layout')
@section('content')

<link rel="stylesheet" href="css/vat.css">
<!--start of the 2nd column of side bar-->
<div class="col-sm-9 col-md-10">
@if(!isset($record))
<p id="head">Vat History</p>
<p id="headbelow">View Vat Details</p>
<div class="row">
	<div class="col-sm-12">
	    <div class="card text-black  mb-3" id="cards">
		    <div class="card-body">
		    	<p id="para">Search Vat Details</p>
                 <form action="/vattranscation" method="GET">
                 	@csrf
                     <div class="form-row">
                     <div class="col">
                     <input type="text" name="start" class="form-control" placeholder="Starting Date" required/>
                      </div>
                     <div class="col">
                     <input type="text" name="end" class="form-control" placeholder="Ending Date" required/>
                     </div>
                     </div>
                     <button type="submit" class="btn btn-info" id="btn">Submit</button>
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
	<p class="record">Vat Details</p>
	<a href="/vatpdf/{{$start}}/{{$end}}" class="btn btn-primary">Export As PDF</a>
	<br><br>
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
		<td>{{$i->consignee}}</td>
		<td>{{$i->consignee_pan_no}}</td>
		@elseif($i->mode_of_payment=='Due' || $i->mode_of_payment=='Paid')
		<td>{{$i->consignor}}</td>
		<td>{{$i->consignor_pan_no}}</td>
		@endif
		<td>{{$i->total_amt}}</td>
		<td>{{$i->vat}}</td>
		<td>{{$i->totalamtwithvat}}</td>
	</tr>
	@endforeach
</table>
		<div>
		<table class="table" id="table">
		<thead>
			<tr>
		<th><label class="total">Total</label><label class="totalsum">{{$totalsum}}</label><label class="vat">{{$vat}}</label><label class="totalamt">{{$totalamt}}</label></th>
		</tr>
		</thead>
		</table>

		<p id="page">Page: {{$record->currentPage()}}, Showing {{$record->count()}} Records On This Page</p>
		<p id="page">Total Record: {{$record->total()}}</p>
		<br>
		<br>
		{{$record->appends(['start' => $start,'end'=>$end])->render()}}
	</div>
	@endif
</div>

</div>
</div>
</div>
</body>
</html>
@stop