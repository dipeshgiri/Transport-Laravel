<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/allinvoicepdf.css">

	<title>Invoice Data By Dates</title>
</head>
<body>
	<h1>Om Laxmi Dhuwani Sewa</h1>
	<p class="address">Biratnagar,Opposite Of Nepal Electricity Authority</p>
	<p class="contact">Contact Number:021-535671/9802723942/9802753385</p>
	<p class="record">Invoice Records</p>
         <table>
         	<thead>
         		<tr>
         			<th >Bilti</th>
         			<th >Date</th>
         			<th >Consignor</th>
         			<th >Addr</th>
         			<th >Consignee</th>
         			<th >Addr</th>
         			<th >Mop</th>
         			<th>Sn</th>
         			<th >Particulars</th>
         			<th >It</th>
         			<th >Quantity</th>
         			<th >Rate</th>
         			<th >Amt</th>
          			<th >Total-Amt</th>
         			<th >Vat</th>
         			<th >Gadi</th>
                  <th>Created-By</th>
         		</tr>
         		</thead>
         		@foreach($data as $i)
         		<tr>
         			<td>{{$i->bilti_no}}</td>
         			<td>{{$i->date}}</td>
         			<td>{{$i->consignor}}</td>
         	        <td>{{$i->consignor_address}}</td>
         	        <td>{{$i->consignee}}</td>
         	        <td>{{$i->consignee_address}}</td>
         	        <td>{{$i->mode_of_payment}}</td>
         	        <td>{{$i->sn}}</td>
         	        <td>{{$i->particulars}}</td>
         	        <td>{{$i->item_type}}</td>
         	        <td>{{$i->quantity}}</td>
         	        <td>{{$i->rate}}</td>
         	        <td>{{$i->amount}}</td>
         	        <td>{{$i->total_amt}}</td>
         	        <td>{{$i->vat}}</td>
         	        <td>{{$i->gadi_no}}</td>
                    <td>{{$i->user}}</td>
         	    </tr>
         	    @endforeach
         </table>
         <br>
         <p>Created By: {{session('data')}}</p>
         <p id="date">Created At: {{date("h:i:sa")}}</p>       
</body>
</html>