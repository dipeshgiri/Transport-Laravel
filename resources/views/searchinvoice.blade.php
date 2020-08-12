@extends('layout')
@section('content')

<link rel="stylesheet" href="css/searchinvoice.css">
<!--start of the 2nd column of side bar-->
<div class="col-sm-9 col-md-10" style="background-color: #F5F5F5;">
	<div class="row text-center mx-5">
	<div class="col-sm-4 mt-5">
	    <div class="card text-black  mb-3" id="cards">
		    <div class="card-body">
		    	<p class="text-center" id="para">Show All Invoices</p>
		    	<p id="texts">Please Click Below To Show All Invoices</p>
		    	<br>
		    	<a href="showallinvoice" class="btn btn-warning">Click Here</a>
             </div>
</div>
</div>

	<div class="col-sm-4 mt-5">
	    <div class="card text-black  mb-3" id="cards2">
		    <div class="card-body">
		    	<p class="text-center" id="para">Search Invoice By Bilti Number</p>
		    	<p id="texts">Enter The Bilti Number To Search Detail</p><br>
		    	  <div class="form-group">
		    	  	<form action="" method="post">
                 <input type="name" class="form-control" name="biltinumber" placeholder="Enter Bilti Number" required/>
                 <br>
                 <button type="submit" name="submit" class="btn btn-success">Submit</button>

  </div>

</div>
</div>
</div>

	<div class="col-sm-4 mt-5">
	    <div class="card text-black  mb-3" id="cards3" >
		    <div class="card-body">
		    	<p class="text-center" id="para">Search Invoice By Date</p>
		    		<p id="texts">Enter The Transcation Date</p><br>
		    	  <div class="form-group">
		    	  	<form action="" method="post">
                 <input type="name" class="form-control" name="date" placeholder="Enter The Transcation Date" required/>
                 <br>
                 <button type="submit" name="submit" class="btn btn-primary">Submit</button>

  </div>
</div>
</div>
</div>
</div>

<div class="row text-center mx-5">
	<div class="col-lg-6 mt-5">
	    <div class="card text-black  mb-3" id="cards4">
		    <div class="card-body">
		    	<p class="text-center" id="para">Search Invoice By Consignor Name</p>
		    	<p class="texts">Enter The Consignor Name</p><br>
		    	<div class="form-group">
		    		<form action="" method="post">
                 <input type="name" class="form-control" name="date" placeholder="Enter The Consignor Name" required/>
                 <br>
                 <button type="submit" name="submit" class="btn btn-danger">Submit</button>
		    		</form>
		    	</div>
	</div>
</div>
</div>

<div class="col-lg-6 mt-5">
	    <div class="card text-black  mb-3" id="cards5">
		    <div class="card-body">
		    	<p class="text-center" id="para">Search Invoice By Consignee Name</p>
		    	<p class="texts">Enter The Consignee Name</p><br>
		    	<div class="form-group">
		    		<form action="" method="post">
                 <input type="name" class="form-control" name="date" placeholder="Enter The Consignee Name" required/>
                 <br>
                 <button type="submit" name="submit" class="btn btn-info">Submit</button>
		    		</form>
		    	</div>
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
