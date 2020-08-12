<!DOCTYPE html>
<html>
<head>
	<title>Om Laxmi Dhuwani Sewa</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="wrapper">
  <!--sidebar-->
  <div class="contanier-fluid">
    <div class="row">
      <nav class="col-sm-2 bg-light sidebar py-5" style="background: linear-gradient(#373b44,#4286f4);"><!--start sidebar first column-->
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
          <h2 style="color:white; font-style: sans-serif; font-size: 20px; margin-left:5px;">Om Laxmi Transport</h2>
          <p style="color:white; font-style:sans-serif; font-size:18px; margin-left: 30px; margin-top:10px;">Welcome Dipesh</p>
            <li class="nav-item"><a class="nav-link" href="home" style="color:white; margin-top:30px;"><i class="fa fa-home"></i> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="invoice" style="color:white;"><i class="fa fa-address-card-o"></i> Invoice</a></li>
            <li class="nav-item"><a class="nav-link " href="chalan" style="color:white;"><i class="fa fa-address-card"></i> Chalan</a></li>
            <li class="nav-item"><a class="nav-link " href="searchinvoice" style="color:white;"><i class="fa fa-search-plus"></i> Search Invoice</a></li>
            <li class="nav-item"><a class="nav-link " href="searchchalan" style="color:white;"><i class="fa fa-search"></i> Search Chalan</a></li>
             <li class="nav-item"><a class="nav-link " href="PartyPaymentDetails" style="color:white;"><i class="fa fa-money"></i> Party Payment Details</a></li>
            <li class="nav-item"><a class="nav-link " href="vat" style="color:white;"><i class="fa fa-file"></i> Vat </a></li>
            <li class="nav-item"><a class="nav-link " href="blockuser" style="color:white;"><i class="fa fa-ban"></i> Log Out</a></li>
            </ul>
          </div>
           </nav> <!--end of the 1st column side bar-->
@yield('content')

