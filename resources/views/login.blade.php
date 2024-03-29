<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/login.css">
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


	<title>Login</title>
</head>
<body>
	@if(Session::get('status'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Email Or Password Is Incorrect.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="containers">
<br>

<h3>Login</h3>

<hr>
<div class="col-sm-12">
<form class="form-group" action="logincheck" method="post"> 
	@csrf
<label id="email">Email</label>
<input type="text" class="form-control" name="email" placeholder="Enter Your Email"><br>
<label id="password">Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter Your Password"><br>
<button class="btn btn-danger" id="button">Submit</button>
</form>
</div>
</div>
</body>
</html>