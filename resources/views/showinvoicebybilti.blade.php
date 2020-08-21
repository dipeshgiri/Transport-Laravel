@extends('layout')
@section('content')

<link rel="stylesheet" href="css/showallinvoice.css">


<!--start of the 2nd column of side bar-->
<div class="col-sm-9 col-md-10" style="background-color: white;">
	<h1 class="text-center">Om Laxmi Dhuwani Sewa</h1>
	<p class="address">Biratnagar,Opposite Of Nepal Electricity Authority</p>
	<p class="contact">Contact Number:021-535671/9802723942/9802753385</p>
	<p class="record">Invoice Records</p>
	<br><br>
	<table class="table table-lg" id="table"> 
	<thead>
		<tr>
			<th class="col">Bilti Number</th>
			<th class="col">Date</th>
			<th class="col">Consignor Name</th>
			<th class="col">Consignor Address</th>
			<th class="col">Consignor Pan Number</th>
			<th class="col">Consignee Name</th>
			<th class="col">Consignee Address</th>
			<th class="col">Consignee Pan Number</th>
			<th class="col">Consignor Bill Number</th>
			<th class="col">Consignor Bill Amount</th>
			<th class="col">Mode Of Payment</th>
			<th class="col">SN</th>
			<th class="col">Particulars</th>
			<th class="col">Item Type</th>
			<th class="col">Quantity</th>
			<th class="col">Rate</th>
			<th class="col">Amount</th>
			<th class="col">Total Amount</th>
			<th class="col">Taxable Amount</th>
			<th class="col">Vat Amount</th>
			<th class="col">Total Amount With Vat</th>
			<th class="col">Loaded On</th>
			<th class="col">Edit</th>
			<th class="col">Delete</th>
			<th class="col">PDF</th>
			
		</tr>
	</thead>
	@foreach($data as $datas)
	<tr>
		<td>{{$datas->bilti_no}}</td>
		<td>{{$datas->date}}</td>
		<td>{{$datas->consignor}}</td>
		<td>{{$datas->consignor_address}}</td>
		<td>{{$datas->consignor_pan_no}}</td>
		<td>{{$datas->consignee}}</td>
		<td>{{$datas->consignee_address}}</td>
	    <td>{{$datas->consignee_pan_no}}</td>
	    <td>{{$datas->consignor_bill_no}}</td>
	    <td>{{$datas->consignor_bill_amount}}</td>
	    <td>{{$datas->mode_of_payment}}</td>
	    <td>{{$datas->sn}}</td>
	    <td>{{$datas->particulars}}</td>
	    <td>{{$datas->item_type}}</td>
	    <td>{{$datas->quantity}}</td>
	    <td>{{$datas->rate}}</td>
	    <td>{{$datas->amount}}</td>
	    <td>{{$datas->total_amt}}</td>
	    <td>{{$datas->taxable_amt}}</td>
	    <td>{{$datas->vat}}</td>
	    <td>{{$datas->totalamtwithvat}}</td>
	    <td>{{$datas->gadi_no}}</td>
	    <td><a href="edit/{{$datas->bilti_no}}" class="btn btn-success btn-sm">Edit</a></td>
	    <td><a href="delete/{{$datas->bilti_no}}" class="btn btn-danger btn-sm">Delete</a></td>
        <td><a href="pdf/{{$datas->bilti_no}}" class="btn btn-info btn-sm" >PDF</a></td>
	</tr>
	@endforeach
	</table>
	<div>

	</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
@stop