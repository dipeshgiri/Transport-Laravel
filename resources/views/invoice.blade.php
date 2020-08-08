@extends('layout')
@section('content')
<link rel="stylesheet" href="css/invoice.css">
<!--start of the 2nd column of side bar-->
<div class="col-sm-9 col-md-10" style="background-color: #F5F5F5;">
<p id="heading">Invoice</p>
  <div class="row text-center mx-5">
  <div class="col-lg-12">
      <div class="card text-black  mb-3">
        <div class="card-body">
        <p id="companyname">Om Laxmi Dhuwani Sewa <label id="invoicehead">New Invoice</label></p>
        <hr>
        <form action="/submit" method="post">
        @csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="Consignor">Consignor</label>
      <input type="name" class="form-control" id="Consignor" name="Consignor" placeholder="Consignor Name" required/>
      @error('Consignor')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group col-md-4">
      <label for="Consignor Address">Consignor Address</label>
      <input type="name" class="form-control" id="ConsignorAddress" name="ConsignorAddress" placeholder="Consignor Address" required/>
       @error('ConsignorAddress')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group col-md-4">
      <label for="Consignorpan">Consignor Pan Number</label>
      <input type="name" class="form-control" id="Consignorpan" name="Consignorpan" placeholder="Consignor Pan Number" required/>
      @error('Consignorpan')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="form-row">
     <div class="form-group col-md-4">
    <label for="Consignee">Consignee</label>
    <input type="text" class="form-control" id="Consignee" name="Consignee" placeholder="Consignee Name" required/>
    @error('Consignee')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
     <div class="form-group col-md-4">
    <label for="Consignee Address">Consignee Address </label>
    <input type="text" class="form-control" id="ConsigneeAddress" name="ConsigneeAddress" placeholder="Consignee Address" required/>
     @error('ConsigneeAddress')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
     <div class="form-group col-md-4">
    <label for="Consigneepan">Consignee Pan Number </label>
    <input type="text" class="form-control" id="Consigneepan" name="Consigneepan" placeholder="Consignee Pan Number" required/>
     @error('Consigneepan')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
  </div>
  <div class="form-row">
     <div class="form-group col-md-4">
    <label for="Consignorbillno">Consignor Bill Number</label>
    <input type="text" class="form-control" id="Consignorbillno" name="Consignorbillno" placeholder="Consignor Bill Number" required/>
     @error('Consignorbillno')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
     <div class="form-group col-md-4">
    <label for="Consignorbillamount">Consginor Bill Amount </label>
    <input type="text" class="form-control" id="Consignorbillamount" name="Consignorbillamount" placeholder="Consignor Bill Amount" required/>
      @error('Consignorbillamount')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
     <div class="form-group col-md-4">
    <label for="Date">Date </label>
    <input type="text" class="form-control" id="Date" name="Date" placeholder="Date" required/>
     @error('Date')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="payment">Mode Of Payment</label>
      <select id="pay" name="modeofpayment" class="form-control">
        <option value="To Pay">To Pay</option>
        <option value="Paid">Paid</option>
        <option value="Due">Due</option>
      </select>
    </div>
    <div class="form-group col-md-6">
    <label for="biltino">Bilti Number</label>
    <input type="text" class="form-control" id="biltino" name="Biltino" placeholder="Bilti Number" required/>
     @error('Biltino')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    </div>
        
    <div class="col-lg-12 mt-4">
      <div class="card text-black  mb-3" id="cards">
        <div class="card-body">
        <div class="form-row">
        <div class="form-group col-md-2">
        <label for="SN">SN</label>
        <input type="text" class="form-control" id="SN" name="SN" placeholder="Symbol Number" required/>
        @error('SN')
      <div class="text-danger">{{$message}}</div>
      @enderror
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars" placeholder="Item Name" required/>
        @error('Particulars')
        <div class="text-danger">{{$message}}</div>
        @enderror
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity1" name="Quantity" placeholder="Quantity" required/>
        @error('Quantity')
        <div class="text-danger">{{$message}}</div>
        @enderror
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate1" name="Rate" placeholder="Rate" required/>
        @error('Rate')
        <div class="text-danger">{{$message}}</div>
        @enderror
        </div> 
        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
         <select id="itemtype" class="form-control" name="itemtype" required/>
        <option value="Cartoon">Cartoon</option>
        <option value="Poka">Poka</option>
        <option value="Bundle">Bundle</option>
        <option Value="Bora">Bora</option>
        <option value="Vari">Vari</option>
        <option value="Pieces">Pieces</option>
        <option value="KG">KG</option>
        <option value="Balti">Balti</option>
        <option value="Drum">Drum</option>
        <option value="Jhola">Jhola</option>
        <option value="Ton">Ton</option>
        <option value="Liters">Liters</option>
        <option value="Other">Other</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="Amount">Amount</label>
        <input type="text" class="form-control" id="Amount1" name="Amount" placeholder="Amount" value=0 readonly required/>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-2">
        <label for="SN">SN</label>
        <input type="text" class="form-control" id="SN" name="SN2" placeholder="Symbol Number">
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars2" placeholder="Item Name">
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity2" name="Quantity2" placeholder="Quantity">
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate2" name="Rate2" placeholder="Rate">
        </div>

        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
        <select id="itemname" name="itemtype2" class="form-control">
        <option value="Cartoon">Cartoon</option>
        <option value="Poka">Poka</option>
        <option value="Bundle">Bundle</option>
        <option Value="Bora">Bora</option>
        <option value="Vari">Vari</option>
        <option value="Pieces">Pieces</option>
        <option value="KG">KG</option>
        <option value="Balti">Balti</option>
        <option value="Drum">Drum</option>
        <option value="Jhola">Jhola</option>
        <option value="Ton">Ton</option>
        <option value="Liters">Liters</option>
        <option value="Other">Other</option>
        </select>        </div>
        <div class="form-group col-md-2">
        <label for="Amount">Amount</label>
        <input type="text" class="form-control" id="Amount2" name="Amount2" placeholder="Amount" value=0 readonly>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-2">
        <label for="SN">SN</label>
        <input type="text" class="form-control" id="SN" name="SN3" placeholder="Symbol Number">
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars3" placeholder="Item Name">
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity3" name="Quantity3" placeholder="Quantity">
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate3" name="Rate3" placeholder="Rate">
        </div>

        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
        <select id="itemtype" name="itemtype3" class="form-control">
        <option value="Cartoon">Cartoon</option>
        <option value="Poka">Poka</option>
        <option value="Bundle">Bundle</option>
        <option Value="Bora">Bora</option>
        <option value="Vari">Vari</option>
        <option value="Pieces">Pieces</option>
        <option value="KG">KG</option>
        <option value="Balti">Balti</option>
        <option value="Drum">Drum</option>
        <option value="Jhola">Jhola</option>
        <option value="Ton">Ton</option>
        <option value="Liters">Liters</option>
        <option value="Other">Other</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="Amount">Amount</label>
        <input type="text" class="form-control" id="Amount3" name="Amount3" placeholder="Amount" value=0  readonly>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-2">
        <label for="SN">SN</label>
        <input type="text" class="form-control" id="SN" name="SN4" placeholder="Symbol Number">
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars4" placeholder="Item Name">
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity4" name="Quantity4" placeholder="Quantity">
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate4" name="Rate4" placeholder="Rate">
        </div>

        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
        <select id="itemtype" name="itemtype4" class="form-control">
        <option value="Cartoon">Cartoon</option>
        <option value="Poka">Poka</option>
        <option value="Bundle">Bundle</option>
        <option Value="Bora">Bora</option>
        <option value="Vari">Vari</option>
        <option value="Pieces">Pieces</option>
        <option value="KG">KG</option>
        <option value="Balti">Balti</option>
        <option value="Drum">Drum</option>
        <option value="Jhola">Jhola</option>
        <option value="Ton">Ton</option>
        <option value="Liters">Liters</option>
        <option value="Other">Other</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="Amount">Amount</label>
        <input type="text" class="form-control" id="Amount4" name="Amount4" placeholder="Amount" value=0  readonly>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-2">
        <label for="SN">SN</label>
        <input type="text" class="form-control" id="SN" name="SN5" placeholder="Symbol Number">
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars5" placeholder="Item Name">
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity5" name="Quantity5" placeholder="Quantity">
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate5" name="Rate5" placeholder="Rate">
        </div>

        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
        <select id="itemtype" name="itemtype5" class="form-control">
        <option value="Cartoon">Cartoon</option>
        <option value="Poka">Poka</option>
        <option value="Bundle">Bundle</option>
        <option Value="Bora">Bora</option>
        <option value="Vari">Vari</option>
        <option value="Pieces">Pieces</option>
        <option value="KG">KG</option>
        <option value="Balti">Balti</option>
        <option value="Drum">Drum</option>
        <option value="Jhola">Jhola</option>
        <option value="Ton">Ton</option>
        <option value="Liters">Liters</option>
        <option value="Other">Other</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="Amount">Amount</label>
        <input type="text" class="form-control" id="Amount5" name="Amount5" placeholder="Amount" value=0 readonly>
        </div>
        </div>
        
        </div>
        </div>
        </div>

        <br>
        <div class="form-row">
        <div class="form-group col-lg-12">
        <label for="totalamt">Total Amount Without Vat</label>
        <input type="text" class="total form-control" id="totalamt" name="TotalAmt" placeholder="Total Amount Without Vat" readonly>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-lg-12">
        <label for="taxableamt">Taxable Amount</label>
        <input type="text" class="form-control" id="taxableamt" name="taxableamt" placeholder="Taxable Amount" readonly>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-lg-12">
        <label for="vat">Vat : 13%</label>
        <input type="text" class="form-control" id="vat" name="vatamt" placeholder="Vat @13%" readonly>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-lg-12">
        <label for="totalamtwithvat">Total Amount With Vat</label>
        <input type="text" class="form-control" id="totalamtwithvat" name="totalamtwithvat" placeholder="Total Amount With Vat" readonly>
        </div>
        </div>
  <button type="submit" class="btn btn-success" id="submit">Submit</button>
</form>
  </div>
  </div>
  </div>
  <script type="text/javascript" src="js/invoice.js" ></script>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
@stop