<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">

</head>
<body>

<div class="container-fluid ">
<div class="row">
<div class="col-sm-6 d-flex justify-content-center ">
<ul class="nav  " >
    <li class="nav-item ">
    <a href="#clients" ><i class="fa fa-fw fa-mobile"></i> Catch Mobile</a>
    </li>
    <li class="nav-item">
    <a href="#clients"><i class="fa fa-fw fa-shield"></i> Catch Insurance</a>
    <li class="nav-item">
    <a href="#clients"><i class="fa fa-fw fa-refresh"></i> Catch Trade In</a>
    </li>
    
  </ul>
</div>


<div class="col-sm-6">
<ul class="nav ">
  
    <li class="nav-item">
    <a href="#clients"><i class="fa fa-fw fa-user"></i> Careers</a>
    </li>
    <li class="nav-item">
    <a href="#clients"><i class="fa fa-fw fa-user"></i> Gift Card</a>
    </li>
    <li class="nav-item">
    <a href="#clients"><i class="fa fa-fw fa-user"></i> Help</a>
    </li>
    <li class="nav-item">
    <a href="#clients"><i class="fa fa-fw fa-user"></i> Track My Order</a>
    </li>
  </ul>
</div>
</div>

<div class="row navbar navbar-expand-lg navbar-dark bg-primary">

	
<div class="col-sm-6 ">

<ul>

<input type="text" class="searchTerm " class="form-control" placeholder="What are you looking for?">
<button type="submit" class="searchButton">
	<i class="fa fa-search"></i>
</button>
</div>


<div class="col-sm-2 ">


<ul >
<li >
<a href="login" id="lgn" >
  <i class="fa fa-fw fa-user" ></i> Hello!<br>Login </a>
  <span id="lgn">or </span> <a href="signup" id="lgn" >  Sign Up <a> 
</li>

</ul> 
</div>

<div class="col-sm-1  " id="bdr">
<ul class="text-center">
<li >
<a href="user_categorypanel"id="lgn"><i class="fa fa-fw fa-user"></i> Clients</a>
</li>
</ul>  
</div>

<div class="col-sm-1" id="bdr">

<ul class="text-center">
<li >
<a href="#clients"id="lgn" ><i class="fa fa-fw fa-user"></i> Clients</a>
</li>
</ul> 
</div>
</div>
</div>
<!--  Container end -->
 



<nav class="navbar 	 navbar-expand-lg navbar-light bg-white" >
<div class="container-fluid " style="margin-left:80px;">

<a class="navbar-brand" href="#" id="nvbr">Browse by Category</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link" href="user_categorypanelmaster">Category</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Pricing</a>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="#">Disabled</a>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="#">Disabled</a>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="#">Disabled</a>
</li>
</ul>
</div>
</div>
</nav>



</body>
</html>
