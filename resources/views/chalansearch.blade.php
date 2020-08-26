@extends('layout')
@section('content')

<link rel="stylesheet" href="css/searchinvoice.css">
<!--start of the 2nd column of side bar-->
<div class="col-sm-9 col-md-10" style="background-color: #F5F5F5;">
	<div class="row text-center mx-5">
	<div class="col-sm-4 mt-5">
	    <div class="card text-black  mb-3" id="cards">
		    <div class="card-body">
		    	<p class="text-center" id="para">Show All Chalan</p>
		    	<p id="texts">Please Click Below To Show All Chalan</p>
		    	<br>
		    	<a href="/showallchalan" class="btn btn-warning">Click Here</a>
             </div>
</div>
</div>

	<div class="col-sm-4 mt-5">
	    <div class="card text-black  mb-3" id="cards2">
		    <div class="card-body">
		    	<p class="text-center" id="para">Search Chalan By Chalan Number</p>
		    	<p id="texts">Enter The Chalan Number To Search Detail</p><br>
		    	  <div class="form-group">
		    	  	<form action="/" method="post">
		    	  		@csrf
                 <input type="name" class="form-control" name="biltinumber" placeholder="Enter Chalan Number" required/>
                 <br>
                 <button type="submit" name="submit" class="btn btn-success">Submit</button>
             </form>

  </div>

</div>
</div>
</div>

	<div class="col-sm-4 mt-5">
	    <div class="card text-black  mb-3" id="cards3" >
		    <div class="card-body">
		    	<p class="text-center" id="para">Search Chalan By Date</p>
		    		<p id="texts">Enter The Transcation Date</p><br>
		    	  <div class="form-group">
		    	  	<form action="/" method="GET">
		    	  		@csrf
                 <input type="name" class="form-control" name="date" placeholder="Enter The Transcation Date" required/>
                 <br>
                 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
