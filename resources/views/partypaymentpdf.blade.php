<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/vatpdf.css">
	<title>Vat Details</title>
</head>
<body>
	<h1>Om Laxmi Dhuwani Sewa</h1>
	<p class="address">Biratnagar,Opposite Of Nepal Electricity Authority</p>
	<p class="contact">Contact Number:021-535671/9802723942/9802753385</p>
	<p class="record">Party Payment Details</p>
   <p class="partyname">PartyName: {{$partyname}}</p>
   <p class="Date">From: {{$start}} To: {{$end}} <label id="mof">Mode Of Payment: {{$mof}}</label></p>
         <table>
         	<thead>
         		<tr>
         			<th >Bilti</th>
         			<th >Date</th>
         			<th >Party Name</th>
                  <th>Pan Number</th>
          			<th >Taxable-Amount</th>
         			<th >Vat-Amount</th>
         			<th >Total-Amount</th>
         		</tr>
         		</thead>
         		@foreach($data as $i)
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
            <tr id="total">
               <td></td>
               <td></td>
               <td></td>
               <td>Total</td>
               <td>{{$totalsum}}</td>
               <td>{{$vat}}</td>
               <td>{{$totalamt}}</td>
            </tr>
         </table>
         <br>
         <p><label id="createdby">Created By: {{session('data')}}</label><label id="createdat">Created At: {{date("h:i:sa")}}</label></p>
</body>
</html>