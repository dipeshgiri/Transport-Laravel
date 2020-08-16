@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/invoice.css') }}">
<!--start of the 2nd column of side bar-->
<div class="col-sm-9 col-md-10" style="background-color: #F5F5F5;">
<p id="heading">Edit Invoice</p>
  <div class="row text-center mx-5">
  <div class="col-lg-12">
      <div class="card text-black  mb-3">
        <div class="card-body">
        <p id="companyname">Om Laxmi Dhuwani Sewa <label id="invoicehead">Edit Invoice</label></p>
        <hr>
        <form action="/update" method="post">
        @csrf
  <div class="form-row">
    <div class="form-group col-md-4">
    	<input type="text" name="id" value="{{$data[0]->id}}" hidden>
      <label for="Consignor">Consignor</label>
      <input type="name" class="form-control" id="Consignor" name="Consignor" placeholder="Consignor Name" value="{{$data[0]->consignor}}" required/>
      @error('Consignor')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group col-md-4">
      <label for="Consignor Address">Consignor Address</label>
      <input type="name" class="form-control" id="ConsignorAddress" name="ConsignorAddress" placeholder="Consignor Address" value="{{$data[0]->consignor_address}}" required/>
       @error('ConsignorAddress')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group col-md-4">
      <label for="Consignorpan">Consignor Pan Number</label>
      <input type="name" class="form-control" id="Consignorpan" name="Consignorpan" placeholder="Consignor Pan Number" value="{{$data[0]->consignor_pan_no}}" required/>
      @error('Consignorpan')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="form-row">
     <div class="form-group col-md-4">
    <label for="Consignee">Consignee</label>
    <input type="text" class="form-control" id="Consignee" name="Consignee" placeholder="Consignee Name" value="{{$data[0]->consignee}}" required/>
    @error('Consignee')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
     <div class="form-group col-md-4">
    <label for="Consignee Address">Consignee Address </label>
    <input type="text" class="form-control" id="ConsigneeAddress" name="ConsigneeAddress" placeholder="Consignee Address" value="{{$data[0]->consignee_address}}"  required/>
     @error('ConsigneeAddress')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
     <div class="form-group col-md-4">
    <label for="Consigneepan">Consignee Pan Number </label>
    <input type="text" class="form-control" id="Consigneepan" name="Consigneepan" placeholder="Consignee Pan Number" value="{{$data[0]->consignee_pan_no}}" required/>
     @error('Consigneepan')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
  </div>
  <div class="form-row">
     <div class="form-group col-md-4">
    <label for="Consignorbillno">Consignor Bill Number</label>
    <input type="text" class="form-control" id="Consignorbillno" name="Consignorbillno" placeholder="Consignor Bill Number" value="{{$data[0]->consignor_bill_no}}" required/>
     @error('Consignorbillno')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
     <div class="form-group col-md-4">
    <label for="Consignorbillamount">Consginor Bill Amount </label>
    <input type="text" class="form-control" id="Consignorbillamount" name="Consignorbillamount" placeholder="Consignor Bill Amount" value="{{$data[0]->consignor_bill_amount}}" required/>
      @error('Consignorbillamount')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
     <div class="form-group col-md-4">
    <label for="Date">Date </label>
    <input type="text" class="form-control" id="Date" name="Date" placeholder="Date" value="{{$data[0]->date}}" required/>
     @error('Date')
      <div class="text-danger">{{$message}}</div>
      @enderror
  </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="payment">Mode Of Payment</label>
      <select id="pay" name="modeofpayment" value="{{$data[0]->mode_of_payment}}" class="form-control">
        <option value="To Pay">To Pay</option>
        <option value="Paid">Paid</option>
        <option value="Due">Due</option>
      </select>
    </div>
    <div class="form-group col-md-6">
    <label for="biltino">Bilti Number</label>
    <input type="text" class="form-control" id="biltino" name="Biltino" placeholder="Bilti Number" value="{{$data[0]->bilti_no}}" required/>
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
        <input type="text" class="form-control" id="SN" name="SN" placeholder="Symbol Number" value="{{$data[0]->sn}}" required/>
        @error('SN')
      <div class="text-danger">{{$message}}</div>
      @enderror
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars" placeholder="Item Name" value="{{$data[0]->particulars}}" required/>
        @error('Particulars')
        <div class="text-danger">{{$message}}</div>
        @enderror
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity1" name="Quantity" placeholder="Quantity" value="{{$data[0]->quantity}}" required/>
        @error('Quantity')
        <div class="text-danger">{{$message}}</div>
        @enderror
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate1" name="Rate" placeholder="Rate" value="{{$data[0]->rate}}" required/>
        @error('Rate')
        <div class="text-danger">{{$message}}</div>
        @enderror
        </div> 
        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
         <select id="itemtype" class="form-control" name="itemtype" value="{{$data[0]->item_type}}" required/>
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
        <input type="text" class="form-control" id="Amount1" name="Amount" placeholder="Amount" value="{{$data[0]->amount}}" readonly required/>
        </div>
        </div>

        @if(isset($data[1]))
        <input type="text" name="id1" value="{{$data[1]->id}}" hidden>
        <div class="form-row">
        <div class="form-group col-md-2">
        <label for="SN">SN</label>
        <input type="text" class="form-control" id="SN" name="SN2" placeholder="Symbol Number" value="{{$data[1]->sn}}">
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars2" placeholder="Item Name" value="{{$data[1]->particulars}}">
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity2" name="Quantity2" placeholder="Quantity" value="{{$data[1]->quantity}}">
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate2" name="Rate2" placeholder="Rate" value="{{$data[1]->rate}}">
        </div>

        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
        <select id="itemname" name="itemtype2" class="form-control" value="{{$data[1]->item_type}}">
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
        <input type="text" class="form-control" id="Amount2" name="Amount2" placeholder="Amount" value="{{$data[1]->amount}}" readonly>
        </div>
        </div>

        @if(isset($data[2]))

        <input type="text" name="id2" value="{{$data[2]->id}}" hidden>
        <div class="form-row">
        <div class="form-group col-md-2">
        <label for="SN">SN</label>
        <input type="text" class="form-control" id="SN" name="SN3" value="{{$data[2]->sn}}" placeholder="Symbol Number">
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars3" value="{{$data[2]->particulars}}" placeholder="Item Name">
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity3" name="Quantity3"value="{{$data[2]->quantity}}" placeholder="Quantity">
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate3" name="Rate3" value="{{$data[2]->rate}}"placeholder="Rate">
        </div>

        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
        <select id="itemtype" name="itemtype3" value="{{$data[2]->item_type}}" class="form-control">
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
        <input type="text" class="form-control" id="Amount3" name="Amount3" placeholder="Amount" value="{{$data[2]->amount}}"  readonly>
        </div>
        </div>

        @if(isset($data[3]))
        <input type="text" name="id3" value="{{$data[3]->id}}" hidden>
        <div class="form-row">
        <div class="form-group col-md-2">
        <label for="SN">SN</label>
        <input type="text" class="form-control" id="SN" name="SN4" value="{{$data[3]->sn}}" placeholder="Symbol Number">
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars4" value="{{$data[3]->particulars}}" placeholder="Item Name">
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity4" name="Quantity4" value="{{$data[3]->quantity}}" placeholder="Quantity">
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate4" name="Rate4" value="{{$data[3]->rate}}" placeholder="Rate">
        </div>

        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
        <select id="itemtype" name="itemtype4" value="{{$data[3]->item_type}}" class="form-control">
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
        <input type="text" class="form-control" id="Amount4" name="Amount4" placeholder="Amount" value="{{$data[3]->amount}}"  readonly>
        </div>
        </div>

        @if(isset($data[4]))
        <input type="text" name="id4" value="{{$data[4]->id}}" hidden>
        <div class="form-row">
        <div class="form-group col-md-2">
        <label for="SN">SN</label>
        <input type="text" class="form-control" id="SN" name="SN5" value="{{$data[4]->sn}}" placeholder="Symbol Number">
        </div>
        <div class="form-group col-md-2">
        <label for="particulars">Particulars</label>
        <input type="text" class="form-control" id="Particulars" name="Particulars5" value="{{$data[4]->particulars}}" placeholder="Item Name">
        </div>
        <div class="form-group col-md-2">
        <label for="Quantity">Quantity</label>
        <input type="text" class="input form-control" id="Quantity5" name="Quantity5" value="{{$data[4]->quantity}}" placeholder="Quantity">
        </div>
        <div class="form-group col-md-2">
        <label for="Rate">Rate</label>
        <input type="text" class="input form-control" id="Rate5" name="Rate5" value="{{$data[4]->rate}}" placeholder="Rate">
        </div>

        <div class="form-group col-md-2">
        <label for="itemtype">Item Type</label>
        <select id="itemtype" name="itemtype5" value="{{$data[4]->item_type}}" class="form-control">
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
        <input type="text" class="form-control" id="Amount5" name="Amount5" value="{{$data[4]->amount}}" placeholder="Amount" value=0 readonly>
        </div>
        </div>

        </div>
        </div>
        </div>

        @endif
        @endif
        @endif
        @endif

        <br>
        <div class="form-row">
        <div class="form-group col-lg-12">
        <label for="totalamt">Total Amount Without Vat</label>
        <input type="text" class="total form-control" id="totalamt" name="TotalAmt" value="{{$data2[0]->total_amt}}" placeholder="Total Amount Without Vat" readonly>
        <input type="text" name="ids" value="{{$data2[0]->id}}" hidden>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-lg-12">
        <label for="taxableamt">Taxable Amount</label>
        <input type="text" class="form-control" id="taxableamt" name="taxableamt" value="{{$data2[0]->taxable_amt}}" placeholder="Taxable Amount" readonly>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-lg-12">
        <label for="vat">Vat : 13%</label>
        <input type="text" class="form-control" id="vat" name="vatamt" value="{{$data2[0]->vat}}" placeholder="Vat @13%" readonly>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-lg-12">
        <label for="totalamtwithvat">Total Amount With Vat</label>
        <input type="text" class="form-control" id="totalamtwithvat" name="totalamtwithvat" value="{{$data2[0]->totalamtwithvat}}" placeholder="Total Amount With Vat" readonly>
        </div>
        </div>
  <button type="submit" class="btn btn-success" id="submit">Submit</button>
</form>
  </div>
  </div>
  </div>
  <script type="text/javascript" src="{{ URL::asset('js/invoice.js') }}" ></script>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
@stop