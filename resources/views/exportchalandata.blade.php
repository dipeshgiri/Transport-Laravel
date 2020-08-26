<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/allchalanpdf.css">

	<title>Chalan Data</title>
</head>
<body>
	<h1>Om Laxmi Dhuwani Sewa</h1>
	<p class="address">Biratnagar,Opposite Of Nepal Electricity Authority</p>
	<p class="contact">Contact Number:021-535671/9802723942/9802753385</p>
	<p class="record">Chalan Records</p>
         <table>
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
      </tr>
         		</thead>
         		@foreach($chalandetails as $datas)
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
         	    </tr>
         	    @endforeach
              <tr id="total">
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td>Total</td>
               <td>{{$totalsum}}</td>
               <td>{{$vat}}</td>
               <td>{{$totalamtwithvat}}</td>
               <td></td>
            </tr>
         </table>
         <br>
         <p>Created By: {{session('data')}}</p>
         <p id="date">Created At: {{date("h:i:sa")}}</p>
       
</body>
</html>