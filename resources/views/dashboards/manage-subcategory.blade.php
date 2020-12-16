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
<ol class="breadcrumb"><li class='breadcrumb-item'> <a href="admin.html">Home</a> </li><li class='breadcrumb-item active'> Manage Sub Category </li></ol>                    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<!-- <button class="tst btn btn-info">Info Message</button> -->
<div class="sub-category-index">

<p>
<a class="btn btn-rounded btn-outline-info"  href="create-subcategory">
<i class="fa fa-plus" aria-hidden="true"></i>
Add   
</a>
</p>
<div class="card">
<div class="card-header">
<div class="card-actions">

<!-- <a class="" data-action="collapse"><i class="ti-minus"></i></a>
<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
<a class="btn-close" data-action="collapse"><i class="ti-close"></i></a> -->
</div>
<!-- <input type="checkbox" id="md_checkbox_20" class="chk-col-black" checked />
<label for="md_checkbox_20"></label> -->
<h3 class="card-title m-b-0">Manage Sub Category</h3>
</div>
<div class="card-body collapse show">
<div class="table-responsive">
<div id="w0" class="grid-view"><table class="table product-overview"><thead>
<tr class="thead-inverse"><th>#</th><th>Category</th><th>Name</th><th></th><th>Sequence</th><th>Current Status</th><th>Created At</th><th class="action-column">Actions</th></tr><tr id="w0-filters" class="filters"><td>&nbsp;</td><td><select id="subcategorysearch-category_id" class="form-control selectpicker" name="SubCategorySearch[category_id]">
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
</select></td><td><input type="text" id="subcategorysearch-name" class="form-control" name="SubCategorySearch[name]" placeholder="Search By Name"></td><td>&nbsp;</td><td>&nbsp;</td><td><select id="subcategorysearch-is_active" class="form-control selectpicker" name="SubCategorySearch[is_active]">
<option value="">All</option>
<option value="Y">Active</option>
<option value="N">Inactive</option>
</select></td><td>&nbsp;</td><td>&nbsp;</td></tr>
</thead>
<tbody>
<tr data-key="15"><td>1</td><td>Appliancies</td><td>Small Kitchen Appliances</td><td width="10%">
<form id='form_15' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='15' name='id'>
<input type='hidden' value='3' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='15' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MTU%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:07 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/15" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/15" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="19"><td>2</td><td>Furniture</td><td>Sofas &amp; Couches</td><td width="10%">
<form id='form_19' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='19' name='id'>
<input type='hidden' value='6' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='19' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MTk%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:11 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/19" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/19" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="22"><td>3</td><td>Auto</td><td>Motorbike Accessories &amp; Parts</td><td width="10%">
<form id='form_22' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='22' name='id'>
<input type='hidden' value='7' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='22' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MjI%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:13 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/22" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/22" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="27"><td>4</td><td>Books</td><td>Children&#039;s Books</td><td width="10%">
<form id='form_27' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='27' name='id'>
<input type='hidden' value='8' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='27' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=Mjc%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:15 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/27" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/27" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="29"><td>5</td><td>Sports</td><td>Cricket</td><td width="10%">
<form id='form_29' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='29' name='id'>
<input type='hidden' value='9' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='29' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=Mjk%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:16 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/29" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/29" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="32"><td>6</td><td>Travel</td><td>Overses</td><td width="10%">
<form id='form_32' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='32' name='id'>
<input type='hidden' value='10' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='32' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MzI%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:18 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/32" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/32" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="35"><td>7</td><td>Electronic</td><td>Video Games, Consoles &amp; Accessories</td><td width="10%">
<form id='form_35' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='35' name='id'>
<input type='hidden' value='2' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='35' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MzU%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-02-24 03:32 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/35" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/35" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="56"><td>8</td><td>Liquor & Grocery</td><td>Wine</td><td width="10%">
<form id='form_56' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='56' name='id'>
<input type='hidden' value='16' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='56' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=NTY%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-02-26 12:40 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/56" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/56" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="60"><td>9</td><td>Health, Beauty & Baby</td><td>Baby Safety</td><td width="10%">
<form id='form_60' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='60' name='id'>
<input type='hidden' value='17' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='60' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=NjA%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-02-26 12:57 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/60" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/60" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="66"><td>10</td><td>Toys & Media</td><td>Nerf</td><td width="10%">
<form id='form_66' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='66' name='id'>
<input type='hidden' value='18' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='66' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=NjY%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-02-26 01:30 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/66" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/66" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="73"><td>11</td><td>Hobbies & Collectables</td><td>Drones</td><td width="10%">
<form id='form_73' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='73' name='id'>
<input type='hidden' value='19' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='73' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=NzM%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-02-26 02:02 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/73" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/73" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="76"><td>12</td><td>Gift/Fuel Cards </td><td>Fuel cards</td><td width="10%">
<form id='form_76' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='76' name='id'>
<input type='hidden' value='11' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='76' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=NzY%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-03-11 04:42 AM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/76" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/76" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="81"><td>13</td><td>Home & Garden equipment</td><td>House Equipment</td><td width="10%">
<form id='form_81' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='81' name='id'>
<input type='hidden' value='20' name='category_id'>
<input type='hidden' value='1' name='current'>
<input type='text' value='1' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='81' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=ODE%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-04-22 03:43 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/81" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/81" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="14"><td>14</td><td>Fashion</td><td>Clothing</td><td width="10%">
<form id='form_14' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='14' name='id'>
<input type='hidden' value='1' name='category_id'>
<input type='hidden' value='2' name='current'>
<input type='text' value='2' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='14' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MTQ%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:06 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/14" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/14" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="20"><td>15</td><td>Furniture</td><td>T.V. &amp; Entertainment Units</td><td width="10%">
<form id='form_20' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='20' name='id'>
<input type='hidden' value='6' name='category_id'>
<input type='hidden' value='2' name='current'>
<input type='text' value='2' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='20' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MjA%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:11 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/20" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/20" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="23"><td>16</td><td>Auto</td><td>Car Accessories</td><td width="10%">
<form id='form_23' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='23' name='id'>
<input type='hidden' value='7' name='category_id'>
<input type='hidden' value='2' name='current'>
<input type='text' value='2' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='23' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MjM%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:13 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/23" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/23" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="24"><td>17</td><td>Books</td><td>Fiction Books</td><td width="10%">
<form id='form_24' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='24' name='id'>
<input type='hidden' value='8' name='category_id'>
<input type='hidden' value='2' name='current'>
<input type='text' value='2' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='24' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MjQ%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:14 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/24" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/24" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="31"><td>18</td><td>Sports</td><td>Cycling</td><td width="10%">
<form id='form_31' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='31' name='id'>
<input type='hidden' value='9' name='category_id'>
<input type='hidden' value='2' name='current'>
<input type='text' value='2' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='31' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=MzE%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-01-24 06:16 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/31" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/31" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="38"><td>19</td><td>Electronic</td><td>Mobile Phones &amp; Accessories</td><td width="10%">
<form id='form_38' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='38' name='id'>
<input type='hidden' value='2' name='category_id'>
<input type='hidden' value='2' name='current'>
<input type='text' value='2' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='38' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=Mzg%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-02-26 11:09 AM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/38" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/38" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="57"><td>20</td><td>Liquor & Grocery</td><td>Spirits &amp; Liquers</td><td width="10%">
<form id='form_57' action='/admin/subcategory/changeorder' method='POST' class='form-horizontal form-material'>
<input type='hidden' value='59' name='total'>
<input type='hidden' value='57' name='id'>
<input type='hidden' value='16' name='category_id'>
<input type='hidden' value='2' name='current'>
<input type='text' value='2' class='form-control' name='target'>
</form>
</td><td><a href='javascript:;' class='btn btn-info submit-order' id='57' >Change</a></td><td><a class="btn btn-success" href="/admin/subcategory/changestatus?id=NTc%253D" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td>2018-02-26 12:41 PM</td><td><a class="text-inverse p-r-10" href="/admin/subcategory/update/57" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/subcategory/delete/57" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this sub category?" data-method="post"><i class="ti-trash"></i></a></td></tr>
</tbody></table>
<div align='center'>Showing 1 - 20 of 59 record(s)
<ul class="pagination"><li class="page-item prev page-link"><span>&laquo;</span></li>
<li class="page-item active"><a class="page-link" href="subcategory index1" data-page="0">1</a></li>
<li class="page-item"><a class="page-link" href="subcategory index2.html" data-page="1">2</a></li>
<li class="page-item"><a class="page-link" href="subcategory index3.html" data-page="2">3</a></li>
<li class="page-item next"><a class="page-link" href="subcategory index2.html" data-page="1">&raquo;</a></li></ul></div></div>            </div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).on("click",'.submit-order',function(e){
$('#form_'+$(this).attr('id')).submit();
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
jQuery('#w0').yiiGridView({"filterUrl":"\/manage-subcategory.html","filterSelector":"#w0-filters input, #w0-filters select"});
});</script></body>
</html>