

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="wlZg7bo_53Iz7XDxFX-Lw9ClUzTGFPR0i43EobkM_pCrPiaM7HK0PFCqGbV6PNitg_Y7R5B2mET-5YjI_Gav1g==">
<title>Buying in cents</title>
<link href="{{asset ('board/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{asset ('board/css/style.css')}} " rel="stylesheet">
<link href="{{asset ('board/css/blue.css')}} " rel="stylesheet">
<link href="{{asset ('board/css/chartist.min.css')}} " rel="stylesheet">
<link href="{{asset ('board/css/chartist-init.css')}} " rel="stylesheet">
<link href="{{asset ('board/css/chartist-plugin-tooltip.css')}} " rel="stylesheet">
<link href="{{asset ('board/css/css-chart.css')}} " rel="stylesheet">
<link href="{{asset ('board/css/jquery-jvectormap-2.0.2.css')}} " rel="stylesheet">
<link href="{{asset ('board/')}} css/summernote.css" rel="stylesheet">
<link href="{{asset ('board/css/jquery.fancybox.css')}} " rel="stylesheet">
<link href="{{asset ('board/css/jquery.toast.css')}} " rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="{{asset ('board/js/jquery.js')}} "></script>
<script src="{{asset ('board/js/yii.js')}} "></script>
<script src="{{asset ('board/js/popper.js')}} "></script>
<script src="{{asset ('board/js/bootstrap.js')}} "></script>
<script src="{{asset ('board/js/jquery.slimscroll.js')}} "></script>
<script src="{{asset ('board/js/waves.js')}} "></script>
<script src="{{asset ('board/js/sidebarmenu.js')}} "></script>
<script src="{{asset ('board/js/sticky-kit.min.js')}} "></script>
<script src="{{asset ('board/js/jquery.sparkline.min.js')}} "></script>
<script src="{{asset ('board/js/custom.min.js')}} "></script>
<script src="{{asset ('board/js/jQuery.style.switcher.js')}} "></script>
<script src="{{asset ('board/js/chartist.min.js')}} "></script>
<script src="{{asset ('board/js/chartist-plugin-tooltip.min.js')}} "></script>
<script src="{{asset ('board/js/jquery-jvectormap-2.0.2.min.js')}} "></script>
<script src="{{asset ('board/js/jquery-jvectormap-us-aea-en.js')}} "></script>
<script src="{{asset ('board/js/summernote.js')}} "></script>
<script src="{{asset ('board/js/jquery.fancybox.js')}} "></script>
<script src="{{asset ('board/js/jquery.toast.js')}} "></script>
</head>
<style type="text/css">
/*sidebar icon color open/close*/
/*.topbar .navbar-light .navbar-nav .nav-item > a.nav-link {
color: #046cd4!important;
}
.topbar .navbar-light .navbar-nav .nav-item > a.nav-link:hover, .topbar .navbar-light .navbar-nav .nav-item > a.nav-link:focus {
color: #046cd4!important;
}*/
.topbar .navbar-header {
background: #fff!important;
}
.topbar .top-navbar .navbar-header {
line-height: 70px!important;
}
/*top header*/
.topbar {
background: #046cd4!important;
}
.sidebar-nav > ul > li.active > a, .sidebar-nav > ul > li.active:hover > a {
color: #ffffff;
background: #046cd4 !important;
}
.sidebar-nav > ul > li > a.active {
font-weight: 400;
color: #ffffff!important;
}
.sidebar-nav ul li a {
color: #67757c!important;
}
.sidebar-nav ul li.active .hide-menu {
color: #ffffff!important;
}
.sidebar-nav ul li a.active, .sidebar-nav ul li a.active:hover {
color: #ffffff!important;
}
/*for active sidebar sub menu*/
.sidebar-nav ul li.active a.active, .sidebar-nav ul li.active a.active:hover {
color: #67757c!important;
}
/*for active sidebar main menu*/
.sidebar-nav > ul > li > a.active i, .sidebar-nav > ul > li > a.active:hover i {
color: #ffffff!important;
}
.sidebar-nav > ul > li > a.active i, .sidebar-nav > ul > li.avtive > a:hover i {
color: #ffffff!important;
}
.sidebar-nav > ul > li > a i {
color: #046cd4!important;
}
.sidebar-nav > ul > li.active > a i {
color: #ffffff!important;
}
/*.sidebar-nav ul li a.active, .sidebar-nav ul li a:hover {
color: #3b5998!important;
}*/
/*for form field error message*/
.has-error .form-control {
border-color: #fc4b6c;
}
.help-block {
color: #fc4b6c !important;
}
.jq-toast-single a{
color: #0056b3!important;
}
</style>
<body class="fix-header card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
<svg class="circular" viewBox="25 25 50 50">
<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
<nav class="navbar top-navbar navbar-expand-md navbar-light">
<!-- ============================================================== -->
<!-- Logo -->
<!-- ============================================================== -->
<div class="navbar-header">
<a class="navbar-brand" href="dashboard.html">

<span>
<!-- dark Logo text -->
<img src="userpanel/images/logo_header.png" style="!width: 170px;!height:46px;">
<!-- Light Logo text -->    
</span> 
</div>
<!-- ============================================================== -->
<!-- End Logo -->
<!-- ============================================================== -->
<div class="navbar-collapse">
<!-- ============================================================== -->
<!-- toggle and nav items -->
<!-- ============================================================== -->
<ul class="navbar-nav mr-auto mt-md-0">
<!-- This is  -->
<li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
<li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
<!-- ============================================================== -->
<!-- Search -->
<!-- ============================================================== -->
<!-- <li class="nav-item hidden-sm-down search-box">
<a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
<form class="app-search">
<input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
</li> -->
</ul>
<!-- ============================================================== -->
<!-- User profile and search -->
<!-- ============================================================== -->
<ul class="navbar-nav my-lg-0">
<!-- ============================================================== -->
<!-- Comment -->
<!-- ============================================================== -->
<li class="nav-item dropdown">
<select class="" id="change_timezone" name="timezone">

<option value="UTC" >UTC</option>

<option value="Australia/Adelaide" >Australia/Adelaide</option>
<option value="Australia/Darwin" >Australia/Darwin</option>
<option value="Australia/Lord_Howe" >Australia/Lord_Howe</option>
<option value="Australia/Brisbane" >Australia/Brisbane</option>
<option value="Australia/Eucla" >Australia/Eucla</option>

<option value="Australia/Melbourne" >Australia/Melbourne</option>
<option value="Australia/Broken_Hill" >Australia/Broken_Hill</option>
<option value="Australia/Hobart" >Australia/Hobart</option>
<option value="Australia/Perth" >Australia/Perth</option>
<option value="Australia/Currie" >Australia/Currie</option>
<option value="Australia/Lindeman" >Australia/Lindeman</option>
<option value="Australia/Sydney" >Australia/Sydney</option>
<option value="Asia/Kolkata" >India (UTC +5:30)</option>

</select>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
<div class="notify"> 
<!-- <span class="heartbit"></span>  -->
<span class="point"></span>
</div>
</a>
<div class="dropdown-menu dropdown-menu-right mailbox scale-up">
<ul>
<li>
<div class="drop-title">Notifications</div>
</li>
<li>
<div class="message-center" id="notification-list-view">
<a href="product424.html">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>Farhana abbas  added new product</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 month ago</span>
</div>
</a>
<a href="product423.html">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>Farhana abbas  added new product</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 month ago</span>
</div>
</a>
<a href="product422.html">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>Farhana abbas  added new product</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 month ago</span>
</div>
</a>
<a href="product421.html">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>TRENERY  Harry Oxford has expire and bid amount refunded to all user</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 year ago</span>
</div>
</a>
<a href="product420.html">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>Samsung 671L Family Hub has expire and bid amount refunded to all user</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 year ago</span>
</div>
</a>
<a href="product418.html">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>DJI Inspire 1 Pro Black  has expire and bid amount refunded to all user</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 year ago</span>
</div>
</a>
<a href="product419">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>LG SG5I700TSL Signature 700L has expire and bid amount refunded to all user</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 year ago</span>
</div>
</a>
<a href="product417">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>DJI Inspire 1 RAW 4K Drone has expire and bid amount refunded to all user</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 year ago</span>
</div>
</a>
<a href="product416">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>DJI Mavic 2 Pro 4K Drone has expire and bid amount refunded to all user</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 year ago</span>
</div>
</a>
<a href="product415.html">
<!-- <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div> -->
<div class="mail-contnet">
<h5>iPad Pro. All new. has expire and bid amount refunded to all user</h5>
<!-- <span class="mail-desc">Just see the my new admin!</span>  -->
<span class="time">1 year ago</span>
</div>
</a>

</div>
</li>
<li>
<a class="nav-link text-center" href="notification.html"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
</li>
</ul>
</div>
</li>
<!-- ============================================================== -->
<!-- End Comment -->
<!-- ============================================================== -->
<!-- Profile -->
<!-- ============================================================== -->
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="admin.html" alt="user" class="profile-pic" /></a>
<div class="dropdown-menu dropdown-menu-right scale-up">
<ul class="dropdown-user">
<li>
<div class="dw-user-box">
<div class="u-img"><img src="admin.html" alt="user"></div>
<div class="u-text">
<h4>buyingin</h4>
<p class="text-muted"></p><a href="updateprofile.html" class="btn btn-rounded btn-danger btn-sm">Update Profile</a></div>
</div>
</li>
<li role="separator" class="divider"></li>
<li><a href="changepassword.html"><i class="fa fa-key"></i> Change Password</a></li>
<li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
</ul>
</div>
</li>
</ul>
</div>
</nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
<!-- Sidebar scroll-->
<div class="scroll-sidebar">
<!-- User profile -->
<!-- <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
<div class="profile-img"> <img src="../assets/images/users/1.jpg" alt="user" /> </div>
<div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe <span class="caret"></span></a>
<div class="dropdown-menu animated flipInY">
<a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
<a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
<a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
<div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
<div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
</div>
</div>
</div> -->
<!-- End User profile text-->
<!-- Sidebar navigation-->
<nav class="sidebar-nav">
<ul id="sidebarnav">
<li>
<a href="dashboard" aria-expanded="false">
<i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span>
</a>
</li>  
<li class="nav-small-cap">GENERAL</li>

<li class="">
<a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">General Setting</span></a>
<ul aria-expanded="false" class="collapse">
<li ><a class="" href="Managecity">Manage City</a></li>
<li><a class="" href="generalsetting">Text Setting</a></li>
<li><a class="" href="faq">Manage FAQ</a></li>
<li><a class="" href="bidcost">Bidding Cost</a></li>
</ul>
</li>
<li class="">
<a class="" href="manage-category" aria-expanded="false">
<i class="fa fa-tag"></i><span class="hide-menu"> Manage Category</span>
</a>
</li>
<li class="">
<a class="" href="manage-subcategory" aria-expanded="false">
<i class="fa fa-tags"></i><span class="hide-menu"> Manage Sub Category</span>
</a>
</li>
<li class="">
<a class="" href="manage-creditplan" aria-expanded="false">
<i class="fa fa-money"></i><span class="hide-menu"> Manage Credit Plan</span>
</a>
</li>

<li class="">
<a class="" href="payment-log" aria-expanded="false">
<i class="fa fa-money"></i><span class="hide-menu"> Payment History</span>
</a>
</li>

<li class="">
<a class="" href="manage-bannerads" aria-expanded="false">
<i class="fa fa-newspaper-o"></i><span class="hide-menu"> Manage Banner</span>
</a>
</li>
<li class="">
<a class="" href="manage-blog" aria-expanded="false">
<i class="fa fa-rss-square"></i><span class="hide-menu"> Manage Blog</span>
</a>
</li>
<li class="">
<a class="" href="manage-product" aria-expanded="false" >
<i class="fa fa-picture-o"></i><span class="hide-menu">Manage Product</span>
</a>
</li>  
<li class="">
<a class="" href="manage-user" aria-expanded="false" >
<i class="fa fa-users"></i><span class="hide-menu">Manage User</span>
</a>
</li>  
<li class="">
<a class="" href="user-inquiry" aria-expanded="false" >
<i class="fa fa-envelope-o"></i><span class="hide-menu">User Inquiry</span>
</a>
</li>  
<!-- <li>
<a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
<ul aria-expanded="false" class="collapse">
<li><a href="javascript:void(0)">item 1.1</a></li>
<li><a href="javascript:void(0)">item 1.2</a></li>
<li>
    <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="javascript:void(0)">item 1.3.1</a></li>
        <li><a href="javascript:void(0)">item 1.3.2</a></li>
        <li><a href="javascript:void(0)">item 1.3.3</a></li>
        <li><a href="javascript:void(0)">item 1.3.4</a></li>
    </ul>
</li>
<li><a href="#">item 1.4</a></li>
</ul>
</li> -->
</ul>
</nav>
<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
<div class="col-md-5 col-8 align-self-center">
<!-- <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3> -->
<!-- <ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
</ol> -->
<ol class="breadcrumb"><li class='breadcrumb-item'> <a href="admin.html">Home</a> </li><li class='breadcrumb-item active'> Dashboard </li></ol>                    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<!-- <button class="tst btn btn-info">Info Message</button> -->
<style type="text/css">
.chart_earning .ct-series-a .ct-line, .campaign2 .ct-series-a .ct-point {
stroke: #1e88e5 !important;
stroke-width: 2px;
}
.chart_earning .ct-series-a .ct-bar, .ct-series-a .ct-line, .ct-series-a .ct-point, .ct-series-a .ct-slice-donut {
stroke: #1e88e5 !important;
}
</style>

<div class="row">
<!-- Column -->
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">General Count</h4>
<div class="row">
<div class="col-lg-3">
<div class="card card-body" style="background-color: #d3d9e1;">
<div class="row" >
<div class="col p-r-0 align-self-center" >
<h2 class="font-light m-b-0">216</h2>
<h6 class="text-muted">Total User</h6></div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="card card-body" style="background-color: #d3d9e1;">
<div class="row">
<div class="col p-r-0 align-self-center">
<h2 class="font-light m-b-0">309</h2>
<h6 class="text-muted">Total product</h6></div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="card card-body" style="background-color: #d3d9e1;">
<div class="row">
<div class="col p-r-0 align-self-center">
<h2 class="font-light m-b-0">0</h2>
<h6 class="text-muted">Total Open Product For Bid</h6></div>
</div>
</div>
</div>
<!-- Column -->
<div class="col-md-6 col-lg-3">
<div class="card card-body" style="background-color: #d3d9e1;">
<div class="row">
<div class="col p-r-0 align-self-center">
<h2 class="font-light m-b-0">6</h2>
<h6 class="text-muted">Total Sold Product</h6></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<!-- <select class="custom-select pull-right">
<option selected>January</option>
<option value="1">February</option>
<option value="2">March</option>
<option value="3">April</option>
</select> -->
<h4 class="card-title">Admin Earning Report</h4>
<hr>
<div class="row">
<div class="col-lg-3">
<div class="card" style="background-color: #d3d9e1;">
<div class="card-body">
<div class="d-flex flex-row">
<div class="m-l-10 align-self-center">
<h3 class="m-b-0 font-light">$0</h3>
<h5 class="text-muted m-b-0">Today Earning</h5></div>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="background-color: #d3d9e1;">
<div class="card-body">
<div class="d-flex flex-row">
<div class="m-l-10 align-self-center">
<h3 class="m-b-0 font-light">$0</h3>
<h5 class="text-muted m-b-0">Last 7 Days Earning</h5></div>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="background-color: #d3d9e1;">
<div class="card-body">
<div class="d-flex flex-row">
<div class="m-l-10 align-self-center">
<h3 class="m-b-0 font-light">$183</h3>
<h5 class="text-muted m-b-0">Total Earning</h5></div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Daily Earning Report</h4>
<!-- <h6 class="card-subtitle">Lorem Ipsum</h6> -->
<div class="chart_earning ct-charts" style="height: 200px;"></div>
<div class="text-center">
<ul class="list-inline">
<li>
<h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Last 30 Days</h6> </li>
<!-- <li>
<h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Recurring</h6> </li> -->
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title m-b-0">Top 10 Product By Admin Earning</h4>
</div>
<div class="card-body collapse show">
<div class="table-responsive">
<table class="table product-overview">
<thead>
<tr>
<th></th>
<th>User</th>
<th>Title</th>
<th>Admin Earning</th>
<th></th>
</tr>
</thead>
<tbody>
<tr> 
<td>
<img src="images/bic1.jpg" alt="" width="80">
</td>
<td><a href="/admin/user/18" data-toggle="tooltip" data-original-title="Click here to view user detail">B.I.C</a></td>
<td><a href="product203.html" data-toggle="tooltip" data-original-title="Click here to view product detail">Xbox one X & PS4 pro combo </a></td>
<td>$ 124.95</td>
<td>2 years ago</td>
</tr>
<tr>

<td>
<img src="images/bic2.jpg" alt="" width="80">
</td>
<td><a href="user18.html" data-toggle="tooltip" data-original-title="Click here to view user detail">B.I.C</a></td>
<td><a href="product172.html" data-toggle="tooltip" data-original-title="Click here to view product detail">Breville</a></td>
<td>$ 23.45</td>
<td>2 years ago</td>
</tr>
<tr>

<td>
<img src="images/bic3.webp" alt="" width="80">
</td>
<td><a href="user18.html" data-toggle="tooltip" data-original-title="Click here to view user detail">B.I.C</a></td>
<td><a href="product219.html" data-toggle="tooltip" data-original-title="Click here to view product detail">InFamous First light</a></td>
<td>$ 16</td>
<td>2 years ago</td>
</tr>
<tr>

<td>
<img src="images/bic4.webp" alt="" width="80">
</td>
<td><a href="user18.html" data-toggle="tooltip" data-original-title="Click here to view user detail">B.I.C</a></td>
<td><a href="product218.html" data-toggle="tooltip" data-original-title="Click here to view product detail">Dishonored 2</a></td>
<td>$ 12</td>
<td>2 years ago</td>
</tr>
<tr>

<td>
<img src="images/bic5.jpg" alt="" width="80">
</td>
<td><a href="user18.html" data-toggle="tooltip" data-original-title="Click here to view user detail">B.I.C</a></td>
<td><a href="product207.html" data-toggle="tooltip" data-original-title="Click here to view product detail">DJI Mavic Air 4K Drone</a></td>
<td>$ 6.6</td>
<td>2 years ago</td>
</tr>
<tr>

<td>
<img src="images/bic6.jpg" alt="" width="80">
</td>
<td><a href="user18.html" data-toggle="tooltip" data-original-title="Click here to view user detail">B.I.C</a></td>
<td><a href="product191.html" data-toggle="tooltip" data-original-title="Click here to view product detail">Tornado mop & Bucket </a></td>
<td>$ 0</td>
<td>2 years ago</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="card">
<div class="card-body bg-info">
<h4 class="text-white card-title">Top 10 category posted by user</h4>
<!-- <h6 class="card-subtitle text-white m-b-0 op-5">Checkout my contacts here</h6> -->
</div>
<div class="card-body">
<div class="message-box contact-box">
<div class="message-widget contact-widget slimscrollright" >
<!-- Message -->
<a href="#">
<div class="user-img"> 
<img src="images/category1.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Electronic</h5> 
<span class="mail-desc">Total Product : 193</span>
</div>
</a>
<!-- Message -->
<a href="#">
<div class="user-img"> 
<img src="images/category2.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Fashion</h5> 
<span class="mail-desc">Total Product : 37</span>
</div>
</a>
<!-- Message -->
<a href="#">
<div class="user-img"> 
<img src="images/category3.jpg" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Gift/Fuel Cards </h5> 
<span class="mail-desc">Total Product : 28</span>
</div>
</a>
<!-- Message -->
<a href="#">
<div class="user-img"> 
<img src="images/category4.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Appliancies</h5> 
<span class="mail-desc">Total Product : 14</span>
</div>
</a>
<!-- Message -->
<a href="#">
<div class="user-img"> 
<img src="images/category5.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Auto</h5> 
<span class="mail-desc">Total Product : 12</span>
</div>
</a>
<!-- Message -->
<a href="#">
<div class="user-img"> 
<img src="images/category6.jpg" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Home & Garden equipment</h5> 
<span class="mail-desc">Total Product : 10</span>
</div>
</a>
<!-- Message -->
<a href="#">
<div class="user-img"> 
<img src="images/category7.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Toys & Media</h5> 
<span class="mail-desc">Total Product : 8</span>
</div>
</a>
<!-- Message -->
<a href="#">
<div class="user-img"> 
<img src="images/category8.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Books</h5> 
<span class="mail-desc">Total Product : 5</span>
</div>
</a>
<!-- Message -->
<a href="#">
<div class="user-img"> 
<img src="images/category9.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Travel</h5> 
<span class="mail-desc">Total Product : 2</span>
</div>
</a>
<!-- Message -->
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="card">
<div class="card-body bg-info">
<h4 class="text-white card-title">Top 10 maximum bidding count</h4>
</div>
<div class="card-body">
<div class="message-box contact-box">
<div class="message-widget contact-widget">
<!-- Message -->
<a href="/admin/user/25">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Thomas James humphry </h5> 
<span class="mail-desc">Total Bid : 6271</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/37">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Jerome</h5> 
<span class="mail-desc">Total Bid : 289</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/27">
<div class="user-img"> 
<img src="images/bid.jpg" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Kathleen</h5> 
<span class="mail-desc">Total Bid : 242</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/96">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Bruce kenyon</h5> 
<span class="mail-desc">Total Bid : 150</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/107">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>STEVEN</h5> 
<span class="mail-desc">Total Bid : 131</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/133">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Lexie Webb</h5> 
<span class="mail-desc">Total Bid : 100</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/138">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Shaun Davidson</h5> 
<span class="mail-desc">Total Bid : 62</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/117">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Cathryn Ferraris</h5> 
<span class="mail-desc">Total Bid : 55</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/191">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Adisson</h5> 
<span class="mail-desc">Total Bid : 35</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/151">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Caron MacDonald</h5> 
<span class="mail-desc">Total Bid : 16</span>
</div>
</a>

</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="card">
<div class="card-body bg-info">
<h4 class="text-white card-title">Top 10 active user by no of post</h4>
</div>
<div class="card-body">
<div class="message-box contact-box">
<div class="message-widget contact-widget">
<!-- Message -->
<a href="/admin/user/18">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>B.I.C</h5> 
<span class="mail-desc">Total Product : 292</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/24">
<div class="user-img"> 
<img src="images/user1.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Nirmit Dagly</h5> 
<span class="mail-desc">Total Product : 10</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/203">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Farhana abbas </h5> 
<span class="mail-desc">Total Product : 3</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/37">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Jerome</h5> 
<span class="mail-desc">Total Product : 2</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/17">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Billy Ranasinghe </h5> 
<span class="mail-desc">Total Product : 1</span>
</div>
</a>
<!-- Message -->
<a href="/admin/user/158">
<div class="user-img"> 
<img src="images/default.png" alt="user" class="" height="35px" width="35px"> 
</div>
<div class="mail-contnet">
<h5>Trupesh</h5> 
<span class="mail-desc">Total Product : 1</span>
</div>
</a>

</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Column -->
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Last 7 Days Product Statistic</h4>
<!-- <h6 class="card-subtitle">Lorem Ipsum</h6> -->
<div class="amp-pxl" style="height: 300px;"></div>
<div class="text-center">
<ul class="list-inline">
<li>
<h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Total Added Product By User</h6> </li>
<li>
<h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Total Sold Product</h6> </li>

</ul>
</div>
</div>
</div>
</div>
<!-- Column -->
<div class="col-lg-6 col-md-12">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<!-- <select class="custom-select pull-right">
<option selected>January</option>
<option value="1">February</option>
<option value="2">March</option>
<option value="3">April</option>
</select> -->
<h4 class="card-title">Latest Registered User</h4>
<div class="table-responsive m-t-20">
<table class="table stylish-table">
<thead>
<tr>
<th ></th>
<th>Name</th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="active">
<td><span class="round"><img src="images/user2.png" alt="user" width="50" /></span></td>
<td>
<a href="user3.html">
<h6><strong>jigar murabiya</strong></h6>
</a>

<!-- <small class="text-muted">Project Manager</small> -->
</td>
<td>
<strong>3 years ago</strong>
</td>
</tr>
<tr class="active">
<td><span class="round"><img src="images/default.png" alt="user" width="50" /></span></td>
<td>
<a href="user4.html">
<h6><strong>test</strong></h6>
</a>

<!-- <small class="text-muted">Project Manager</small> -->
</td>
<td>
<strong>2 years ago</strong>
</td>
</tr>
<tr class="active">
<td><span class="round"><img src="images/user3.jpg" alt="user" width="50" /></span></td>
<td>
<a href="user5.html">
<h6><strong>Nirmal Chaudhari</strong></h6>
</a>

<!-- <small class="text-muted">Project Manager</small> -->
</td>
<td>
<strong>2 years ago</strong>
</td>
</tr>
<tr class="active">
<td><span class="round"><img src="images/default.png" alt="user" width="50" /></span></td>
<td>
<a href="user6.html">
<h6><strong>Ishita Patel</strong></h6>
</a>

<!-- <small class="text-muted">Project Manager</small> -->
</td>
<td>
<strong>2 years ago</strong>
</td>
</tr>
<tr class="active">
<td><span class="round"><img src="images/user4.jpg" alt="user" width="50" /></span></td>
<td>
<a href="user7.html">
<h6><strong>Heena patel</strong></h6>
</a>

<!-- <small class="text-muted">Project Manager</small> -->
</td>
<td>
<strong>2 years ago</strong>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Row -->
<!-- Row -->                

<script type="text/javascript">
var label_all_product = [];
var data_product_created = [];
var data_product_sold = [];
label_all_product.push("18, Nov");
data_product_created.push(0);
label_all_product.push("19, Nov");
data_product_created.push(0);
label_all_product.push("20, Nov");
data_product_created.push(0);
label_all_product.push("21, Nov");
data_product_created.push(0);
label_all_product.push("22, Nov");
data_product_created.push(0);
label_all_product.push("23, Nov");
data_product_created.push(0);
label_all_product.push("24, Nov");
data_product_created.push(0);
label_all_product.push("25, Nov");
data_product_created.push(0);
data_product_sold.push(0);
data_product_sold.push(0);
data_product_sold.push(0);
data_product_sold.push(0);
data_product_sold.push(0);
data_product_sold.push(0);
data_product_sold.push(0);
data_product_sold.push(0);
var chart2 = new Chartist.Bar('.amp-pxl', {
labels: label_all_product,
series: [
data_product_created,
data_product_sold,
//[1, 9, 6, 2, 8, 1]
]
}, {
axisX: {
// On the x-axis start means top and end means bottom
position: 'end',
showGrid: false
},
axisY: {
// On the y-axis start means left and end means right
position: 'start'
},
high:0,
low: '0',
plugins: [
Chartist.plugins.tooltip()
]
});
var label_all = [];
var data_daily_earning = [];
label_all.push("27, Oct");
data_daily_earning.push(0);
label_all.push("28, Oct");
data_daily_earning.push(0);
label_all.push("29, Oct");
data_daily_earning.push(0);
label_all.push("30, Oct");
data_daily_earning.push(0);
label_all.push("31, Oct");
data_daily_earning.push(0);
label_all.push("01, Nov");
data_daily_earning.push(0);
label_all.push("02, Nov");
data_daily_earning.push(0);
label_all.push("03, Nov");
data_daily_earning.push(0);
label_all.push("04, Nov");
data_daily_earning.push(0);
label_all.push("05, Nov");
data_daily_earning.push(0);
label_all.push("06, Nov");
data_daily_earning.push(0);
label_all.push("07, Nov");
data_daily_earning.push(0);
label_all.push("08, Nov");
data_daily_earning.push(0);
label_all.push("09, Nov");
data_daily_earning.push(0);
label_all.push("10, Nov");
data_daily_earning.push(0);
label_all.push("11, Nov");
data_daily_earning.push(0);
label_all.push("12, Nov");
data_daily_earning.push(0);
label_all.push("13, Nov");
data_daily_earning.push(0);
label_all.push("14, Nov");
data_daily_earning.push(0);
label_all.push("15, Nov");
data_daily_earning.push(0);
label_all.push("16, Nov");
data_daily_earning.push(0);
label_all.push("17, Nov");
data_daily_earning.push(0);
label_all.push("18, Nov");
data_daily_earning.push(0);
label_all.push("19, Nov");
data_daily_earning.push(0);
label_all.push("20, Nov");
data_daily_earning.push(0);
label_all.push("21, Nov");
data_daily_earning.push(0);
label_all.push("22, Nov");
data_daily_earning.push(0);
label_all.push("23, Nov");
data_daily_earning.push(0);
label_all.push("24, Nov");
data_daily_earning.push(0);
label_all.push("25, Nov");
data_daily_earning.push(0);
var chart_earning = new Chartist.Line('.chart_earning', {
labels: label_all,
series: [
data_daily_earning
//, [0, 3, 1, 2, 8, 1, 5, 1]
]}, {
low: 0,
high: 0,
//showArea: true,
fullWidth: true,
plugins: [
Chartist.plugins.tooltip()
],
axisY: {
//onlyInteger: true,
// scaleMinSpace: 40,
// offset: 20,
labelInterpolationFnc: function (value) {
return "$"+value;
}
},
});
</script>                <!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar">
<div class="slimscrollright">
<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
<div class="r-panel-body">
<ul id="themecolors" class="m-t-20">
<li><b>With Light sidebar</b></li>
<li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
<li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
<li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
<li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
<li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
<li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
<li class="d-block m-t-30"><b>With Dark sidebar</b></li>
<li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
<li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
<li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
<li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
<li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
<li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
</ul>
<ul class="m-t-20 chatonline">
<li><b>Chat option</b></li>
<li>
<a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
</li>
</ul>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
© 2017 Material Pro Admin by wrappixel.com
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<script type="text/javascript">

$(document).on("click",".tst",function(){
$.toast({
heading: 'Welcome to Monster admin',
text: 'Use the predefined ones, or specify a custom position object.',
position: 'top-right',
loaderBg:'#ff6849',
//icon: 'warning',
hideAfter: 5000, 
stack: 6
});


});
</script>
<script type="text/javascript">

$(document).ready(function(){

$('#change_timezone').selectpicker();

});

$(document).on('change','#change_timezone',function(){

$.ajax({

type:'POST',

data:{time_zone:$(this).val()},

url: "/admin/site/changetimezone", 

success: function(result){

window.location.reload();

//$( ".municipality-form" ).replaceWith(result);

}

});

});

</script>
<script>
$(document).ready(function(){
var old_count="833";  
setInterval(function()
{

$.ajax({
type:'post',
url:'/admin/site/checknotification?count='+old_count,
datatype:'html',
success:function(data)
{
var obj = $.parseJSON(data);

if(obj.new_count > old_count )
{
old_count = obj.new_count;
$.toast({
heading: obj.message,
text: 'Click <a href="'+obj.url+'">here</a> to view more detail.',
position: 'top-right',
loaderBg:'#ff6849',
//icon: 'warning',
hideAfter: 10000, 
stack: 6
});

// var sound = new Audio("/web/audio/inquisitiveness.mp3");
// sound.play();    
}  
$("#notification-list-view").html(obj.html);
}
});
}, 5000);

});
</script>
</body>
</html>