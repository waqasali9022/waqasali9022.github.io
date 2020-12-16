
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
<!-- Logo icon -->
<b>
<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
<!-- Dark Logo icon -->
<img src="images/logo-icon.png" alt="homepage" class="dark-logo" />
<!-- Light Logo icon -->
<img src="images/logo-light-icon.png" alt="homepage" class="light-logo" />
</b>
<!--End Logo icon -->
<!-- Logo text -->
<span>
<!-- dark Logo text -->
<img src="images/logo-text.png" alt="homepage" class="dark-logo" />
<!-- Light Logo text -->    
<img src="images/logo-light-text.png" alt="homepage"  class="light-logo" alt="homepage" height="30px" width="148px" /></span> </a>
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
<ol class="breadcrumb"><li class='breadcrumb-item'> <a href="/admin/">Home</a> </li><li class='breadcrumb-item'> <a href="/admin/product/index">Products</a> </li><li class='breadcrumb-item active'> Dyson V6 Cord-Free Handstick  </li></ol>                    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<!-- <button class="tst btn btn-info">Info Message</button> -->
<!-- Row -->
<div class="row">
<!-- Column -->
<div class="col-lg-4 col-xlg-3 col-md-5">
<div class="card">
<div class="card-body">
<center class="m-t-30"> 

<div class="col-lg-12">

<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators2" data-slide-to="1" class=""></li>
<li data-target="#carouselExampleIndicators2" data-slide-to="2" class=""></li>
<!-- <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li> -->
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img class="img-responsive" src="images/product60.jpg" alt="First slide">
</div>
<div class="carousel-item ">
<img class="img-responsive" src="images/product61.jpg" alt="First slide">
</div>
<div class="carousel-item ">
<img class="img-responsive" src="images/product62.jpg" alt="First slide">
</div>
<!-- <div class="carousel-item">
<img class="img-responsive" src="/admin/web/theme/assets/images/big/img3.jpg" alt="First slide">
</div>
<div class="carousel-item active">
<img class="img-responsive" src="/admin/web/theme/assets/images/big/img4.jpg" alt="Second slide">
</div>
<div class="carousel-item">
<img class="img-responsive" src="/admin/web/theme/assets/images/big/img5.jpg" alt="Third slide">
</div> -->
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<h4 class="card-title">Dyson V6 Cord-Free Handstick </h4>
<h6 class="card-subtitle" style="text-align: left;">Dyson V6 Cord-Free Handstick Vacuum<br />
Motorised head cleans all floor typesConverts for handheld cleaningPowered by the Dyson digital motor V6.</h6>
</div>
<div class="row" align="left">
<div class="col-lg-12">
<!-- <i class="fa fa-tag"></i>  -->
<font class="font-medium">Category : </font>
Home & Garden equipment                                        </div>
<div class="col-lg-12">
<!-- <i class="fa fa-tags"></i>  -->
<font class="font-medium">Sub Category : </font>
House Equipment                                        </div>
<div class="col-lg-12">
<font class="font-medium">Current Status : </font>
<span class='text-danger'>Canceled</span>                                        </div>

<div class="col-lg-12">
<!-- <i class="fa fa-usd"></i>  -->
<font class="font-medium">Price : </font>
$ 290                                        </div>
<div class="col-lg-12">
<!-- <i class="fa fa-usd"></i>  -->
<font class="font-medium">Product Type : </font>
<span class='text-info'>New</span>                                        </div>
<div class="col-lg-12">
<font class="font-medium">Admin Margin : </font>
0 %
</div>
<div class="col-lg-12">
<font class="font-medium">Admin Commission : </font>
$  
</div>
<div class="col-lg-12">
<font class="font-medium">Admin Other Earning : </font>
$  
</div>
<div class="col-lg-12">
<font class="font-medium">Admin Total Earning : </font>
$  
</div>
<div class="col-lg-12">
<font class="font-medium">User Earning : </font>
$  
</div>
<div class="col-lg-12">
<font class="font-medium">Total Earning From Bidding : </font>
$  
</div>
</div>
<!-- <div class="row text-center justify-content-md-center">
<div class="col-6">
<i class="fa fa-usd"></i> 
Min Price :<font class="font-medium">254</font>
</div>
<div class="col-6">
<i class="fa fa-usd"></i> 
Max Price :<font class="font-medium">54</font>
</div>
</div> -->
</center>
</div>
<div>
</div>

</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-8 col-xlg-9 col-md-7">
<div class="card">
<!-- Nav tabs -->
<ul class="nav nav-tabs profile-tab" role="tablist">
<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Bidding History</a> </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane active" id="home" role="tabpanel">
<div class="card-body">
<div class="table-responsive">
<div id="w0" class="grid-view"><table class="table product-overview"><thead>
<tr class="thead-inverse"><th>#</th><th style="min-width: 200px">User Name</th><th style="min-width: 200px">Bid Amount</th><th class="text-center" style="min-width: 220px;">Created At</th></tr><tr id="w0-filters" class="filters"><td>&nbsp;</td><td><input type="text" id="productbiddinglogsearch-user_name" class="form-control" name="ProductBiddingLogSearch[user_name]" placeholder="Search By User Name"></td><td><input type="text" id="productbiddinglogsearch-bid_amount" class="form-control" name="ProductBiddingLogSearch[bid_amount]" placeholder="Search By Bid Amount"></td><td><input type="text" id="productbiddinglogsearch-created_at" class="form-control" name="ProductBiddingLogSearch[created_at]" placeholder="Search By Created At"></td></tr>
</thead>
<tbody>
<tr><td colspan="4"><div class="empty">No record(s) found.</div></td></tr>
</tbody></table>
<div align='center'>
</div></div>                                        </div>
</div>
</div>
</div>
</div>
</div>
<!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
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
url:'admin.html'+old_count,
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
