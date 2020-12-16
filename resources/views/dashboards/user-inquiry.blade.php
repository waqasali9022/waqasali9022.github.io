<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="wlZg7bo_53Iz7XDxFX-Lw9ClUzTGFPR0i43EobkM_pCrPiaM7HK0PFCqGbV6PNitg_Y7R5B2mET-5YjI_Gav1g==">
<title>User Inquiry</title>
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

.topbar .navbar-header {
background: #fff!important;
}
.topbar .top-navbar .navbar-header {
line-height: 70px!important;
}

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

</div>

<div class="navbar-collapse">

<ul class="navbar-nav mr-auto mt-md-0">
<!-- This is  -->
<li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
<li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

</ul>

<ul class="navbar-nav my-lg-0">

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
<ol class="breadcrumb"><li class='breadcrumb-item'> <a href="admin.html">Home</a> </li><li class='breadcrumb-item active'> User Inquiry </li></ol>                    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<!-- <button class="tst btn btn-info">Info Message</button> -->
<div class="contact-us-index">

<!-- <p>
<a class="btn btn-rounded btn-outline-info"  href="/admin/faq/create">
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
<h3 class="card-title m-b-0">User Inquiry</h3>
</div>
<div class="card-body collapse show">
<div class="table-responsive">
<div id="w0" class="grid-view"><table class="table product-overview"><thead>
<tr class="thead-inverse"><th>#</th><th style="min-width: 200px">Name</th><th style="min-width: 200px">Email</th><th style="min-width: 200px">Message</th><th>Created At</th><th class="action-column">Actions</th></tr><tr id="w0-filters" class="filters"><td>&nbsp;</td><td><input type="text" id="contactussearch-name" class="form-control" name="ContactUsSearch[name]" placeholder="Search By Name"></td><td><input type="text" id="contactussearch-email" class="form-control" name="ContactUsSearch[email]" placeholder="Search By Email"></td><td><input type="text" id="contactussearch-message" class="form-control" name="ContactUsSearch[message]" placeholder="Search By Message"></td><td>&nbsp;</td><td>&nbsp;</td></tr>
</thead>
<tbody>
<tr data-key="[]"><td>1</td><td>Ashish Us</td><td>Usakjfa@gmail.com</td><td>dgfrehwsh</td><td>2018-08-31 11:41 PM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>2</td><td>Adisson</td><td>Adinoreply@hotmail.com</td><td>Hi

I sent an email last week asking for a refund and I have not received a follow up response. 

Can you please process the refund?

Thanks

Adisson</td><td>2018-07-25 08:07 AM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>3</td><td>Ad</td><td>Adinoreply@hotmail.com</td><td>Hi

I purchased $20 pack and bidded on several items. All appear to have been refunded as the reserve was not met and when I go to the buy more credit screen, it tells me that I have $47.85 worth of credit.

Can you provide some content to understand how this works and also confirm if the site is active as the blogs appear to have test content.

I would like to have my money back if the site is not active.

Thanks

Ad</td><td>2018-07-21 09:01 AM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>4</td><td>Mohammed Ayub</td><td>m.ayub7860@gmail.com</td><td>Hi l am trying to bid on Samsung Galaxy 9+ but it keeps on saying l don&#039;t have credit please contact me so l can place boss on this and other products.
Thanks Mohammed Ayub</td><td>2018-06-06 10:46 PM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>5</td><td>Mohammed Ayub</td><td>m.ayub7860@gmail.com</td><td>Hi l am trying to bid on Samsung Galaxy 9+ but it keeps on saying l don&#039;t have credit please contact me so l can place boss on this and other products.
Thanks Mohammed Ayub</td><td>2018-06-06 10:45 PM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>6</td><td>Roy hammond</td><td>Hamondroy26@gmail.com</td><td>Dear sir iff I bid and don&#039;t win the product but some body win it do I still get my money back 
Thank Roy </td><td>2018-05-28 08:55 AM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>7</td><td>Peter Corry</td><td>corry248@gmail.com</td><td>How do i get my credid refunded </td><td>2018-04-21 08:04 PM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>8</td><td>Peter Corry</td><td>corry248@gmail.com</td><td>0477170900</td><td>2018-04-02 12:18 AM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>9</td><td>Billy</td><td>billyranasinghe@hotmail.com</td><td>Hi lag</td><td>2018-02-24 11:54 AM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>10</td><td>Nirmal Chaudhari</td><td>nirmal.capermint@gmail.com</td><td>Hello buyingincents,

i have test email for contact us,please ingore this mail

thanks</td><td>2018-02-20 09:45 PM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
<tr data-key="[]"><td>11</td><td>Ishita Patel</td><td>ishita.patel@gmail.com</td><td>test</td><td>2018-02-20 02:29 PM</td><td><a class="text-inverse" href="/admin/inquiry/delete/0" data-toggle="tooltip" data-original-title="Delete" data-confirm="Are you sure to delete this inquiry?." data-method="post"><i class="ti-trash"></i></a></td></tr>
</tbody></table>
<div align='center'>Showing 1 - 11 of 11 record(s)
</div></div>            </div>
</div>
</div>
</div>
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
jQuery('#w0').yiiGridView({"filterUrl":"\/inquiry.html","filterSelector":"#w0-filters input, #w0-filters select"});
});</script></body>
</html>

