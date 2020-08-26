<!DOCTYPE html>
<html>
<head>
    <title>Chalan PDF</title>
        <link rel="stylesheet" href="css/chalanpdf.css">
</head>
<body>
  <table id="table">
         <tr><td><p id="heading">Om Laxmi Dhuwani Sewa</p></td></tr>
         <tr><td><p id="branch">Main Branch: Biratnagar</p></td>
         <td><p id="branch2">Birtamode Branch: Birtamode</p></td></tr>
         <tr><td><p id="phoneno">Phone Number: 9802723942/9802753385/021-535671</p></td>
         <td><p id="phoneno2">Phone Number:9852023942</p></td>
         </tr>
         <tr><td><p id="chalan">Chalan</p></td></tr>
     </table>
            @foreach($chalandetails as $i)
            <p><label id="chalanno">Chalan No: {{$i->chalan_no}}</label> <label id="drivername">Driver-Name: {{$i->driver_name}}</label> <label id="date">Date: {{$i->date}}</label>  <label id="departure">Departure: {{$i->departure_location}}</label> <label id="destination">Destination: {{$i->destination_location}}</label><label id="loadingcharge">Truck-Number: {{$i->gadi_no}}</label> </p>
            @endforeach
            <hr>
            <table id="datatable">
                    <thead>
                    <tr>
                        <th id="col">Bilti</th>
                        <th id="col">Consignor</th>
                        <th id="col">Consignee</th>
                        <th id="col">Consignee-Address</th>
                        <th id="col">particulars</th>
                        <th id="col">Item-Type</th>
                        <th id="col">Quantity</th>
                        <th id="col">Rate</th>
                        <th id="col">Amount</th>

                    </tr>
                    </thead>
                    @foreach($chalandata as $j)
                    <tr>
                        <td id="tabledata">{{$j->bilti_no}}</td>

                        <td id="tabledata">{{$j->consignor}}</td>

                        <td id="tabledata">{{$j->consignee}}</td>

                        <td id="tabledata">{{$j->consignee_address}}</td>

                        <td id="tabledata">{{$j->particulars}}</td>

                        <td id="tabledata">{{$j->item_type}}</td>

                        <td id="tabledata">{{$j->quantity}}</td>

                        <td id="tabledata">{{$j->rate}}</td>
                        <td id="tabledata">{{$j->amount}}</td>
                        
                    </tr>
                    @endforeach
            </table>
            @foreach($chalandetails as $i)
            <p><label id="totalamt">Total Amount: {{$i->total_amt}}</label> <label id="vatamt"> Vat Amount: {{$i->vat_amt}}</label><label id="totalamtwithvat">  Total Amount With Vat: {{$i->totalamtwithvat}}</label></p>
            <p><label id="user">User: {{$i->user}}</label><label id="time">Created At: {{$i->created_at}}</label></p>
            @endforeach
</body>
</html>