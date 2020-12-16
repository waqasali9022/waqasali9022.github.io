
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
<title>Manage User</title>
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
<ol class="breadcrumb"><li class='breadcrumb-item'> <a href="/admin/">Home</a> </li><li class='breadcrumb-item active'> Manage User </li></ol>                    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<!-- <button class="tst btn btn-info">Info Message</button> -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.css">
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.js"></script>

<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />

<script src="//rawgithub.com/EugenMayer/bootstrap-dialog/bootstrap4-dev/dist/js/bootstrap-dialog.js"></script>
<div class="user-index">

<!-- <p>
<a class="btn btn-rounded btn-outline-info"  href="">
<i class="fa fa-plus" aria-hidden="true"></i>
Add   
</a>
<button class="btn btn-rounded btn-outline-danger " disabled="true" id="delete-btn-grid">
<i class="fa fa-trash-o" aria-hidden="true"></i>
Delete   
</button>
</p> -->
<p>
<div id="reportrange" class=" btn btn-secondary" style="">
<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
<span></span> <b class="caret"></b>
</div>
<button class="btn btn-outline-danger " disabled="true" id="delete-btn-grid">
<i class="fa fa-trash-o" aria-hidden="true"></i>
<span class="hidden-xs">Delete   </span>
</button> 
<div class="pull-right" style="padding: 1px;">
<form action="/admin/export/csv" method="post">
<input type="hidden" name="_csrf" value="0Gt5t7J14BZxvKI8ffgEnX4_8n1LRO-KjL2XCr88TTKEChGD5y23Xj751ksnyGzyGFaYLjsGibq62txe3moZaw=="><input type="hidden" name="model" value="app\models\UserSearch"><input type="hidden" name="queryParams" value="[]"><input type="hidden" name="getAll" value="1"><input type="hidden" name="title" value="title"><button type="submit" class="btn btn-outline-info btn-group">Export Data As CSV</button></form>    </div>
</p>
<div class="clearfix"></div>
<!-- <hr> -->
<div class="card">
<div class="card-header">
<div class="card-actions">

<!-- <a class="" data-action="collapse"><i class="ti-minus"></i></a>
<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
<a class="btn-close" data-action="collapse"><i class="ti-close"></i></a> -->
</div>
<!-- <input type="checkbox" id="md_checkbox_20" class="chk-col-black" checked />
<label for="md_checkbox_20"></label> -->
<h3 class="card-title m-b-0">Manage User</h3>
</div>
<div class="card-body collapse show">
<div class="table-responsive">
<div id="user-grid" class="grid-view"><table class="table product-overview"><thead>
<tr class="thead-inverse"><th>#</th><th><input type="checkbox" class="select-on-check-all" name="selection_all" value="1"></th><th>Profile Image</th><th>User Name</th><th>Email</th><th>Contact No</th><th>City</th><th>Current Status</th><th>Current Status</th><th>Created At</th><th style="min-width: 100px;">Actions</th></tr><tr id="user-grid-filters" class="filters"><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><input type="text" id="usersearch-user_name" class="form-control" name="UserSearch[user_name]" placeholder="Search By Name"></td><td><input type="text" id="usersearch-email" class="form-control" name="UserSearch[email]" placeholder="Search By Email"></td><td><input type="text" id="usersearch-contact_no" class="form-control" name="UserSearch[contact_no]" placeholder="Search By Number"></td><td><select id="usersearch-city_id" class="form-control selectpicker" name="UserSearch[city_id]">
<option value="">All</option>
<option value="5">VIC Melbourne </option>
<option value="7">QLD Brisbane</option>
<option value="8">TAS Hobart</option>
</select></td><td><select id="usersearch-is_approved" class="form-control selectpicker" name="UserSearch[is_approved]">
<option value="">All</option>
<option value="P">Pending</option>
<option value="Y">Approved</option>
<option value="N">Rejected</option>
</select></td><td><select id="usersearch-is_active" class="form-control selectpicker" name="UserSearch[is_active]">
<option value="">All</option>
<option value="Y">Active</option>
<option value="N">Inactive</option>
</select></td><td>&nbsp;</td><td>&nbsp;</td></tr>
</thead>
<tbody>
<tr data-key="219"><td>1</td><td><input type="checkbox" name="selection[]" value="219"></td><td><div class="avatar">
<a class="single_image" href="/images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">Nmvjefbjedddskhfugfhisjdiubgufihwsdjwsu ifhsidjiswfhdueihfiehifeji ifheidfheidhfiehfiejofejgi jfoedjfoejdgiehdfocjfdenghirho https://mail.ru/?bvncdbjdfjdfh=rhfidbvgjf</td><td>artyomsafonov1991870488l+xse@inbox.ru</td><td style="min-width: 180px">0904151334</td><td style="min-width: 150px">TAS Hobart</td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjE5" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-11-30 02:21 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/219" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/219" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/219" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="218"><td>2</td><td><input type="checkbox" name="selection[]" value="218"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">waqas</td><td>bc170402727@vu.edu.pk</td><td style="min-width: 180px">03417809022</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjE4" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-11-18 01:14 AM</td><td><a class="text-inverse p-r-10" href="/admin/user/218" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/218" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/218" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="217"><td>3</td><td><input type="checkbox" name="selection[]" value="217"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">waqas</td><td>waqasali7815@gmail.com</td><td style="min-width: 180px">3421112349</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjE3" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-11-18 01:12 AM</td><td><a class="text-inverse p-r-10" href="/admin/user/217" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/217" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/217" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="215"><td>4</td><td><input type="checkbox" name="selection[]" value="215"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">vineet </td><td>vineetword@gmail.com</td><td style="min-width: 180px">8909151099</td><td style="min-width: 150px">S.A Adelaide</td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjE1" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-11-07 02:45 AM</td><td><a class="text-inverse p-r-10" href="/admin/user/215" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/215" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/215" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="214"><td>5</td><td><input type="checkbox" name="selection[]" value="214"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">r11</td><td>r11@lucidagency.ml</td><td style="min-width: 180px">3110149176</td><td style="min-width: 150px">VIC Melbourne </td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjE0" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-10-31 04:19 AM</td><td><a class="text-inverse p-r-10" href="/admin/user/214" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/214" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/214" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="212"><td>6</td><td><input type="checkbox" name="selection[]" value="212"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">saboibr</td><td>srss532sa@gmail.com</td><td style="min-width: 180px">13564654656</td><td style="min-width: 150px">VIC Melbourne </td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjEy" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-10-28 12:22 AM</td><td><a class="text-inverse p-r-10" href="/admin/user/212" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/212" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/212" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="211"><td>7</td><td><input type="checkbox" name="selection[]" value="211"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">king</td><td>integkollad@gmail.com</td><td style="min-width: 180px">08101324113</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjEx" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-10-19 04:10 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/211" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/211" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/211" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="210"><td>8</td><td><input type="checkbox" name="selection[]" value="210"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">aead</td><td>ada@gmail.com</td><td style="min-width: 180px">546841588</td><td style="min-width: 150px">S.A Adelaide</td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjEw" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-10-19 01:47 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/210" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/210" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/210" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="209"><td>9</td><td><input type="checkbox" name="selection[]" value="209"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">William</td><td>billyranasinghe@gmail.com</td><td style="min-width: 180px">0433473595</td><td style="min-width: 150px">VIC Melbourne </td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjA5" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-10-17 06:40 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/209" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/209" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/209" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="208"><td>10</td><td><input type="checkbox" name="selection[]" value="208"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">Ravi Patel</td><td>rk.ravipatel89@gmail.com</td><td style="min-width: 180px">98989898989</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjA4" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-10-16 12:33 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/208" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/208" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/208" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="207"><td>11</td><td><input type="checkbox" name="selection[]" value="207"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">Mitul Dadhania</td><td>dadhaniamitul@gmail.com</td><td style="min-width: 180px">6351088319</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjA3" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2020-10-16 10:31 AM</td><td><a class="text-inverse p-r-10" href="/admin/user/207" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/207" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/207" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="205"><td>12</td><td><input type="checkbox" name="selection[]" value="205"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">Matt Knowles</td><td>srnolez@gmail.com</td><td style="min-width: 180px">483641111</td><td style="min-width: 150px">S.A Adelaide</td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjA1" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2019-01-11 09:16 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/205" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/205" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/205" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="204"><td>13</td><td><input type="checkbox" name="selection[]" value="204"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">ertgh</td><td>test@example.com</td><td style="min-width: 180px">98698330066</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjA0" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2018-12-22 12:22 AM</td><td><a class="text-inverse p-r-10" href="/admin/user/204" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/204" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/204" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="203"><td>14</td><td><input type="checkbox" name="selection[]" value="203"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">Farhana abbas </td><td>farhana.abbasrk@gmail.com</td><td style="min-width: 180px">0415828053</td><td style="min-width: 150px">VIC Melbourne </td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjAz" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2018-12-15 09:57 AM</td><td><a class="text-inverse p-r-10" href="/admin/user/203" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/203" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/203" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="202"><td>15</td><td><input type="checkbox" name="selection[]" value="202"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">Haidar Said</td><td>haidarsaid@hotmail.com</td><td style="min-width: 180px">33544330660</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjAy" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2018-11-23 10:23 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/202" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/202" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/202" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="201"><td>16</td><td><input type="checkbox" name="selection[]" value="201"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">RandyDaf</td><td>elkanovas@mail.ru</td><td style="min-width: 180px">354877637</td><td style="min-width: 150px">S.A Adelaide</td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjAx" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2018-10-22 10:08 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/201" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/201" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/201" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="200"><td>17</td><td><input type="checkbox" name="selection[]" value="200"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">Bharat</td><td>bharatp@200oksolutions.com</td><td style="min-width: 180px">123456789</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MjAw" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2018-09-05 04:18 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/200" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/200" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/200" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="199"><td>18</td><td><input type="checkbox" name="selection[]" value="199"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">ashidh</td><td>Usakjfa@gmail.com</td><td style="min-width: 180px">2813308004</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MTk5" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2018-08-31 11:41 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/199" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/199" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/199" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="198"><td>19</td><td><input type="checkbox" name="selection[]" value="198"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">evely</td><td>superarn@gmail.com</td><td style="min-width: 180px">16239663764</td><td style="min-width: 150px">VIC Melbourne </td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MTk4" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2018-08-16 02:24 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/198" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/198" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/198" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="197"><td>20</td><td><input type="checkbox" name="selection[]" value="197"></td><td><div class="avatar">
<a class="single_image" href="images/default.png">
<img src="images/default.png" class="img-rounded" alt="image_url" height = "45px" width="55px">    
</a>                                   
</div></td><td style="min-width: 160px">Gene</td><td>Gene.linder5311@gmail.com</td><td style="min-width: 180px">049014319</td><td style="min-width: 150px"></td><td class="text-center" style="min-width: 120px;">Approved</td><td class="text-center" style="min-width: 120px;"><a class="btn btn-success" href="/admin/user/changestatus?id=MTk3" title="Click here to inactivate" data-toggle="tooltip">Active</a></td><td class="text-center" style="min-width: 120px;">2018-07-27 08:57 PM</td><td><a class="text-inverse p-r-10" href="/admin/user/197" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a> <a class="text-inverse p-r-10" href="/admin/user/update/197" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a class="text-inverse" href="/admin/user/delete/197" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this user?." data-method="post"><i class="ti-trash"></i></a></td></tr>
</tbody></table>
<div align='center'>Showing 1 - 20 of 199 record(s)
<ul class="pagination"><li class="page-item prev page-link"><span>&laquo;</span></li>
<li class="page-item active"><a class="page-link" href="manage-user.html" data-page="0">1</a></li>
<li class="page-item"><a class="page-link" href="user index2.html" data-page="1">2</a></li>
<li class="page-item"><a class="page-link" href="user index3.html" data-page="2">3</a></li>
<li class="page-item"><a class="page-link" href="user index4.html" data-page="3">4</a></li>
<li class="page-item"><a class="page-link" href="user index5.html" data-page="4">5</a></li>
<li class="page-item"><a class="page-link" href="user index6.html" data-page="5">6</a></li>
<li class="page-item"><a class="page-link" href="user index7.html" data-page="6">7</a></li>
<li class="page-item"><a class="page-link" href="user index8.html" data-page="7">8</a></li>
<li class="page-item"><a class="page-link" href="user index9.html" data-page="8">9</a></li>
<li class="page-item"><a class="page-link" href="user index10.html" data-page="9">10</a></li>
<li class="page-item next"><a class="page-link" href="user index2.html" data-page="1">&raquo;</a></li></ul></div></div>            </div>
</div>
</div>
</div>
<script type="text/javascript">

$(document).on('change','#user-grid',function(e){
var keys = $('#user-grid').yiiGridView('getSelectedRows');

if(keys.length > 0){
$('#delete-btn-grid').removeAttr('disabled');
}else{
$('#delete-btn-grid').attr("disabled", "true");
}
});

$(document).on('click','#delete-btn-grid',function(e){
var keys = $('#user-grid').yiiGridView('getSelectedRows');
if(confirm("Are you sure you want to delete selected record(s)?")){
$.ajax({
type:'POST',
data:{log_ids:keys},
url: "/admin/user/deletemultiple", 
success: function(result){
//$( ".student-form" ).replaceWith(result);
}
});
}
});
$(function () {
//   swal({
//   title: "Are you sure?",
//   //text: "Once deleted, you will not be able to recover this imaginary file!",
//   //icon: "warning",
//   buttons: true,
//   dangerMode: true,
// })
// .then((willDelete) => {
//   if (willDelete) {
//     swal("Poof! Your imaginary file has been deleted!", {
//       icon: "success",
//     });
//   } else {
//     swal("Your imaginary file is safe!");
//   }
// });
$("a.single_image").fancybox();
});
$(document).on('click','#your-btn-id', function(){
//alert();
//BootstrapDialog.confirm('success!');
//BootstrapDialog.alert('success!');
});
</script>
<script type="text/javascript">
$(function() {
//var start = moment('').subtract(29, 'days');
var start = moment('');
var end = moment('');
var flag = 1;
flag = 0;
var start = moment();
var end = moment();
function cb(start, end) {
var dateFormat = "YYYY-MM-DD";
if(moment(start.format('YYYY-MM-DD'), dateFormat, true).isValid() && flag){
$('#reportrange span').html(start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
}else{
$('#reportrange span').html('<span class="hidden-xs">All</span>');
}
//$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
//alert(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
}
$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
// alert(picker.startDate.format('YYYY-MM-DD'));
// alert(picker.endDate.format('YYYY-MM-DD'));
var dateFormat = "YYYY-MM-DD";
if(moment(picker.startDate.format('YYYY-MM-DD'), dateFormat, true).isValid()){
window.location = "/admin/user?start_date="+picker.startDate.format('YYYY-MM-DD')+"&end_date="+picker.endDate.format('YYYY-MM-DD');
}else{
window.location = "/admin/user?start_date=0000-00-00&end_date=0000-00-00";
}

});
$('#reportrange').daterangepicker({
startDate: start,
endDate: end,
locale: { 
format: 'YYYY-MM-DD'
},
ranges: {
'All':["0000-00-00","0000-00-00"],
//'Today': [moment(), moment()],
'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
'Last 7 Days': [moment().subtract(6, 'days'), moment()],
'Last 30 Days': [moment().subtract(29, 'days'), moment()],
'This Month': [moment().startOf('month'), moment().endOf('month')],
'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
}
}, cb);

cb(start, end);

});
</script>
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
jQuery('#user-grid').yiiGridView('setSelectionColumn', {"name":"selection[]","class":null,"multiple":true,"checkAll":"selection_all"});
jQuery('#user-grid').yiiGridView({"filterUrl":"\/manage-user.html","filterSelector":"#user-grid-filters input, #user-grid-filters select"});
});</script></body>
</html>


