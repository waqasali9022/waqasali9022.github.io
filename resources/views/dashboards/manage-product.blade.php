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
<title>Manage Product</title>
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
<ol class="breadcrumb"><li class='breadcrumb-item'> <a href="/admin/">Home</a> </li><li class='breadcrumb-item active'> Manage Product </li></ol>                    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<!-- <button class="tst btn btn-info">Info Message</button> -->

<div id="approve-product" class="fade modal" role="dialog" tabindex="-1">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h5>Approve Product</h5>
</div>
<div class="modal-body">
<div id='modalContent'>Loading....</div>
</div>

</div>
</div>
</div>
<div id="reject-product" class="fade modal" role="dialog" tabindex="-1">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h5>Reject Product</h5>
</div>
<div class="modal-body">
<div id='modalContentReject'>Loading....</div>
</div>

</div>
</div>
</div><div class="product-index">

<!-- <p>
<a class="btn btn-rounded btn-outline-info"  href="">
<i class="fa fa-plus" aria-hidden="true"></i>
Add   
</a>
</p> -->
<div class="card">
<div class="card-header">
<div class="card-actions">

<!-- <a class="" data-action="collapse"><i class="ti-minus"></i></a>
<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
<a class="btn-close" data-action="collapse"><i class="ti-close"></i></a> -->
</div>
<!-- <input type="checkbox" id="md_checkbox_20" class="chk-col-black" checked />
<label for="md_checkbox_20"></label> -->
<h3 class="card-title m-b-0">Manage Product</h3>
</div>
<div class="card-body collapse show">
<div class="table-responsive">
<div id="w0" class="grid-view"><table class="table product-overview"><thead>
<tr class="thead-inverse"><th>#</th><th style="min-width: 200px">User Name</th><th style="min-width: 150px">Category</th><th style="min-width: 150px">Sub Category</th><th style="min-width: 200px">Title</th><th style="min-width: 200px">Description</th><th class="text-center" style="min-width: 220px;">Product Expiry</th><th class="text-center" style="min-width: 120px;">Product Type</th><th class="text-center" style="min-width: 120px;">Approved Status</th><th class="text-center" style="min-width: 120px;">Current Status</th><th class="text-center" style="min-width: 220px;">Created At</th><th style="min-width: 100px;">Actions</th></tr><tr id="w0-filters" class="filters"><td>&nbsp;</td><td><input type="text" id="productsearch-user_name" class="form-control" name="ProductSearch[user_name]" placeholder="Search By User Name"></td><td><select id="productsearch-category_id" class="form-control selectpicker" name="ProductSearch[category_id]">
<option value="">All</option>
<option value="1">Fashion</option>
<option value="2">Electronic</option>
<option value="3">Appliancies</option>
<option value="7">Auto</option>
<option value="8">Books</option>
<option value="10">Travel</option>
<option value="11">Gift/Fuel Cards </option>
<option value="18">Toys &amp; Media</option>
<option value="20">Home &amp; Garden equipment</option>
</select></td><td><select id="productsearch-sub_category_id" class="form-control selectpicker" name="ProductSearch[sub_category_id]">
<option value="">All</option>
</select></td><td><input type="text" id="productsearch-title" class="form-control" name="ProductSearch[title]" placeholder="Search By Title"></td><td><input type="text" id="productsearch-description" class="form-control" name="ProductSearch[description]" placeholder="Search By Description"></td><td><input type="text" id="productsearch-expiry_date" class="form-control" name="ProductSearch[expiry_date]" placeholder="Search By Product Expiry"></td><td><select id="productsearch-product_type" class="form-control selectpicker" name="ProductSearch[product_type]">
<option value="">All</option>
<option value="N">New</option>
<option value="U">Used</option>
</select></td><td><select id="productsearch-is_approved" class="form-control selectpicker" name="ProductSearch[is_approved]">
<option value="">All</option>
<option value="P">Pending</option>
<option value="Y">Approved</option>
<option value="N">Rejected</option>
</select></td><td><select id="productsearch-status" class="form-control selectpicker" name="ProductSearch[status]">
<option value="">All</option>
<option value="pending">Pending</option>
<option value="sold">Sold</option>
<option value="cancel">Canceled</option>
</select></td><td><input type="text" id="productsearch-created_at" class="form-control" name="ProductSearch[created_at]" placeholder="Search By Created At"></td><td>&nbsp;</td></tr>
</thead>
<tbody>
<tr data-key="424"><td>1</td><td>Farhana abbas </td><td>Electronic</td><td>TV & Home Entertainment</td><td>LG NANOCELL 65NANO95TNA</td><td>Brand new done miss LG NANOCELL 65NANO95TNA</td><td>2020-10-19 09:00 PM</td><td><span class='text-info'>New</span></td><td><a id="424" class="btn btn-success approve-product" href="/admin/product/approve?id=NDI0&amp;is_approved=Y"><i class="fa fa-check" aria-hidden="true"></i></a>  <a id="424" class="btn btn-danger reject-product" href="/admin/product/approve?id=NDI0&amp;is_approved=N"><i class="fa fa-window-close" aria-hidden="true"></i></a></td><td><span class='text-warning'>Pending</span></td><td>2020-10-17 06:20 PM</td><td><a class="text-inverse p-r-10" href="/admin/product/424" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/424" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/424" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="423"><td>2</td><td>Farhana abbas </td><td>Electronic</td><td>TV & Home Entertainment</td><td>LG NANOCELL 65NANO95TNA</td><td>Brand new done miss LG NANOCELL 65NANO95TNA</td><td>2020-10-19 09:00 PM</td><td><span class='text-warning'>Used</span></td><td><a id="423" class="btn btn-success approve-product" href="/admin/product/approve?id=NDIz&amp;is_approved=Y"><i class="fa fa-check" aria-hidden="true"></i></a>  <a id="423" class="btn btn-danger reject-product" href="/admin/product/approve?id=NDIz&amp;is_approved=N"><i class="fa fa-window-close" aria-hidden="true"></i></a></td><td><span class='text-warning'>Pending</span></td><td>2020-10-17 06:20 PM</td><td><a class="text-inverse p-r-10" href="/admin/product/423" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/423" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/423" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="422"><td>3</td><td>Farhana abbas </td><td>Electronic</td><td>TV & Home Entertainment</td><td>LG NANOCELL 65NANO95TNA</td><td>Brand new done miss LG NANOCELL 65NANO95TNA</td><td>2020-10-19 09:00 PM</td><td><span class='text-info'>New</span></td><td><a id="422" class="btn btn-success approve-product" href="/admin/product/approve?id=NDIy&amp;is_approved=Y"><i class="fa fa-check" aria-hidden="true"></i></a>  <a id="422" class="btn btn-danger reject-product" href="/admin/product/approve?id=NDIy&amp;is_approved=N"><i class="fa fa-window-close" aria-hidden="true"></i></a></td><td><span class='text-warning'>Pending</span></td><td>2020-10-17 06:20 PM</td><td><a class="text-inverse p-r-10" href="/admin/product/422" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/422" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/422" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="421"><td>4</td><td>B.I.C</td><td>Fashion</td><td>Men's</td><td>TRENERY  Harry Oxford</td><td>TRENERY<br />
Harry Oxford<br />
Colours<br />
TAN, BLACK, BROWN </td><td>2019-01-19 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2019-01-02 06:46 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/421" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/421" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/421" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="420"><td>5</td><td>B.I.C</td><td>Appliancies</td><td>White Goods/ kitchen appliances</td><td>Samsung 671L Family Hub</td><td>Samsung 671L Family Hub 4 Door French Door Fridge ...</td><td>2019-01-18 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 12:00 PM</td><td><a class="text-inverse p-r-10" href="/admin/product/420" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/420" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/420" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="419"><td>6</td><td>B.I.C</td><td>Appliancies</td><td>White Goods/ kitchen appliances</td><td>LG SG5I700TSL Signature 700L</td><td>LG SG5I700TSL Signature 700L French Door Fridge wi...</td><td>2019-01-17 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 11:55 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/419" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/419" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/419" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="418"><td>7</td><td>B.I.C</td><td>Electronic</td><td>GPS & Other Electronics</td><td>DJI Inspire 1 Pro Black </td><td>DJI Inspire 1 Pro Black Edition 4K Drone with ZENM...</td><td>2019-01-17 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 11:28 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/418" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/418" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/418" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="417"><td>8</td><td>B.I.C</td><td>Electronic</td><td>GPS & Other Electronics</td><td>DJI Inspire 1 RAW 4K Drone</td><td>DJI Inspire 1 RAW 4K Drone with ZENMUSE X5R Camera...</td><td>2019-01-17 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 11:24 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/417" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/417" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/417" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="416"><td>9</td><td>B.I.C</td><td>Electronic</td><td>GPS & Other Electronics</td><td>DJI Mavic 2 Pro 4K Drone</td><td>DJI Mavic 2 Pro 4K Drone<br />
<br />
Hasselblad L1D-20c Cam...</td><td>2019-01-15 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 11:18 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/416" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/416" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/416" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="415"><td>10</td><td>B.I.C</td><td>Electronic</td><td>Computers & Tablets</td><td>iPad Pro. All new.</td><td>iPad Pro. All new. All screen. All powerful.12.9-i...</td><td>2019-01-15 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 10:28 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/415" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/415" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/415" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="414"><td>11</td><td>B.I.C</td><td>Electronic</td><td>Mobile Phones & Accessories</td><td>Apple iPhone XS Max 512GB</td><td>Apple iPhone XS Max 512GB (Space Grey)<br />
6.5-inch S...</td><td>2019-01-13 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 10:22 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/414" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/414" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/414" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="413"><td>12</td><td>B.I.C</td><td>Electronic</td><td>Computers & Tablets</td><td>Apple MacBook Pro 15-inch </td><td>Apple MacBook Pro 15-inch with Touch Bar 512GB (Sp...</td><td>2019-01-13 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 10:08 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/413" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/413" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/413" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="412"><td>13</td><td>B.I.C</td><td>Electronic</td><td>Computers & Tablets</td><td>Apple iMac Pro with Retina 5K </td><td>Apple iMac Pro with Retina 5K display 27-inch 3.2G...</td><td>2019-01-12 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 10:00 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/412" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/412" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/412" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="411"><td>14</td><td>B.I.C</td><td>Electronic</td><td>Computers & Tablets</td><td>Microsoft Surface Pro 6 i7 1TB</td><td>Microsoft Surface Pro 6 i7 1TB [Platinum]<br />
<br />
Unplu...</td><td>2019-01-12 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 09:43 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/411" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/411" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/411" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="410"><td>15</td><td>B.I.C</td><td>Electronic</td><td>Computers & Tablets</td><td>Microsoft Surface Book 2 15&quot; </td><td>Microsoft Surface Book 2 15" 1TB</td><td>2019-01-11 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 09:40 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/410" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/410" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/410" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="409"><td>16</td><td>B.I.C</td><td>Electronic</td><td>Computers & Tablets</td><td>Microsoft Surface Studio</td><td>Microsoft Surface Studio 2 (2TB/GTX1070)<br />
Fuel you...</td><td>2019-01-10 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 09:34 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/409" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/409" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/409" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="408"><td>17</td><td>B.I.C</td><td>Electronic</td><td>TV & Home Entertainment</td><td>Samsung Q6 55&quot; Series 6 4K UHD</td><td>Samsung Q6 55" Series 6 4K UHD QLED TV<br />
<br />
Ambient ...</td><td>2019-01-10 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 09:30 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/408" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/408" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/408" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="407"><td>18</td><td>B.I.C</td><td>Electronic</td><td>TV & Home Entertainment</td><td>Sony X90F 65&quot; 4K UHD Android </td><td>Sony X90F 65" 4K UHD Android Smart LED TV<br />
Powerfu...</td><td>2019-01-10 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 09:18 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/407" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/407" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/407" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="406"><td>19</td><td>B.I.C</td><td>Electronic</td><td>TV & Home Entertainment</td><td>Sony HTCT800 2.1ch Soundbar </td><td>Sony HTCT800 2.1ch Soundbar with Wireless Subwoofe...</td><td>2019-01-09 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 09:16 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/406" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/406" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/406" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="405"><td>20</td><td>B.I.C</td><td>Electronic</td><td>Video Games, Consoles & Accessories</td><td>Nintendo Switch Console Neon</td><td>Nintendo Switch Console Neon<br />
<br />
The Nintendo Switc...</td><td>2019-01-09 09:00 PM</td><td><span class='text-info'>New</span></td><td><span class='text-danger'>Canceled</span></td><td><span class='text-danger'>Canceled</span></td><td>2018-12-31 09:13 AM</td><td><a class="text-inverse p-r-10" href="/admin/product/405" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/product/update/405" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/product/delete/405" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this product?." data-method="post"><i class="ti-trash"></i></a></td></tr>
</tbody></table>
<div align='center'>Showing 1 - 20 of 319 record(s)
<ul class="pagination"><li class="page-item prev page-link"><span>&laquo;</span></li>
<li class="page-item active"><a class="page-link" href="/admin/product/index?page=1" data-page="0">1</a></li>
<li class="page-item"><a class="page-link" href="/admin/product/index?page=2" data-page="1">2</a></li>
<li class="page-item"><a class="page-link" href="/admin/product/index?page=3" data-page="2">3</a></li>
<li class="page-item"><a class="page-link" href="/admin/product/index?page=4" data-page="3">4</a></li>
<li class="page-item"><a class="page-link" href="/admin/product/index?page=5" data-page="4">5</a></li>
<li class="page-item"><a class="page-link" href="/admin/product/index?page=6" data-page="5">6</a></li>
<li class="page-item"><a class="page-link" href="/admin/product/index?page=7" data-page="6">7</a></li>
<li class="page-item"><a class="page-link" href="/admin/product/index?page=8" data-page="7">8</a></li>
<li class="page-item"><a class="page-link" href="/admin/product/index?page=9" data-page="8">9</a></li>
<li class="page-item"><a class="page-link" href="/admin/product/index?page=10" data-page="9">10</a></li>
<li class="page-item next"><a class="page-link" href="/admin/product/index?page=2" data-page="1">&raquo;</a></li></ul></div></div>            </div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).on('click','.approve-product',function(e){
e.preventDefault();
$('#approve-product').modal('show');

$('#modalContent').load("/admin/product/approve?id="+$(this).attr('id'))
});
$(document).on('click','.reject-product',function(e){
e.preventDefault();
$('#reject-product').modal('show');
$('#modalContentReject').load("/admin/product/reject?id="+$(this).attr('id'))
});
$(document).on('submit','#form-reject',function(e){
e.preventDefault();
var formsend = $(this).serialize();
$('#modalContentReject').html("Sending....");
$.ajax({
type:'POST',
data:formsend,
url: "/admin/product/reject", 
async:false,
success: function(result){
$('#modalContentReject').html("Success");
window.location.reload();
}
});
});
$(document).on('submit','#form-noti',function(e){
e.preventDefault();
var formsend = $(this).serialize();
$('#modalContent').html("Sending....");
$.ajax({
type:'POST',
data:formsend,
url: "/admin/product/approve", 
async:false,
success: function(result){
$('#modalContent').html("Success");
window.location.reload();
}
});
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
<script src="js/yii.gridView.js"></script>
<script type="text/javascript">jQuery(function ($) {
jQuery('#approve-product').modal({"show":false});
jQuery('#reject-product').modal({"show":false});
jQuery('#w0').yiiGridView({"filterUrl":"\/manage-product.html","filterSelector":"#w0-filters input, #w0-filters select"});
});</script></body>
</html>