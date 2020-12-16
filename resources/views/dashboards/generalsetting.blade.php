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
<title>Update General Setting: 1</title>
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
<ol class="breadcrumb"><li class='breadcrumb-item'> <a href="admin.html">Home</a> </li><li class='breadcrumb-item active'> Update Text Setting </li></ol>                    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<!-- <button class="tst btn btn-info">Info Message</button> -->
<div class="general-setting-update">


<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Update Setting </h4>
<hr>
<form id="form" class="form-horizontal form-material" action="generalsetting.html" method="post">
<input type="hidden" name="_csrf" value="YBADHgYGQeWSMLjvtexNtI-QOklRC7XwmC3mHBu63oAEYmdvY0h1jNl2i7CDqn7Mwf5fADBo5afUeZFxaOCwww==">             <div class="form-group field-summernote required">
<label class="control-label" for="summernote">Terms</label>
<textarea id="summernote" class="form-control" name="GeneralSetting[terms]" rows="6" aria-required="true">&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;b style=&quot;background-color: rgb(0, 0, 255);&quot;&gt;﻿&lt;/b&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU;mso-bidi-font-weight:bold&quot;&gt;These
Terms and Conditions&lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;
color:#333333;mso-fareast-language:EN-AU&quot;&gt;&amp;nbsp;&lt;span style=&quot;mso-bidi-font-weight:
bold&quot;&gt;outline the rules and regulations Buying in Cents Pty Ltd and the use of its
website (www.buyingincents.com.au).&lt;/span&gt;&amp;nbsp;&amp;nbsp;&lt;br&gt;
&lt;span style=&quot;mso-bidi-font-weight:bold&quot;&gt;Buying in Cents is located in
Melbourne, Australia.&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-size:13.5pt;font-family:
Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;
color:#333333;mso-fareast-language:EN-AU;mso-bidi-font-weight:bold&qquot;&gt; &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;Postal Address:&amp;nbsp;&lt;br&gt;
PO BOX 576&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;PORT MELBOURNE VIC 3207&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;AUSTRALIA&lt;br&gt;
&amp;nbsp;&lt;br&gt;
By registering with this website you are accepting the Terms and Conditions in
full. Do not continue to use the &lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;Buying
in Cents&lt;/i&gt; website if you do not accept all of the &lt;/span&gt;&lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;&lt;span style=&quot;font-size:11.5pt;font-family:
Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;
color:black;mso-fareast-language:EN-AU&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/i&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;&lt;span style=&quot;font-size:11.5pt;font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:Arial;color:black;mso-fareast-language:EN-AU&quot;&gt;Buying in
Cents&lt;/span&gt;&lt;/i&gt;&lt;span style=&quot;font-size:11.5pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:black;mso-fareast-language:
EN-AU&quot;&gt; reserves the right, at its&amp;nbsp;sole discretion, to change or modify
its Terms and Conditions at any time with, or without, notice. Changes will be
affected immediately when posted on the website. Your continued use of the
website following the posting of any changes will constitute your acceptance of
those changes. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;b style=&quot;mso-bidi-font-weight:normal&quot;&gt;&lt;u&gt;&lt;span style=&quot;font-size:12.0pt;
font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:
Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;Terminology&lt;/span&gt;&lt;/u&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;&lt;br&gt;
The following terminology applies to these Terms and Conditions, Privacy Policy
and Disclaimer Notice and any, or all, Agreements: &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;“Client”, “You” and “Your” refers to you, the person accessing this
website&lt;br&gt;
and accepting the Company’s terms and conditions. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;“The Company”, “Ourselves”, “We”, “Our” and “Us”, “&lt;i style=&quot;mso-bidi-font-style:
normal&quot;&gt;Buying in Cents&lt;/i&gt;” refers&lt;br&gt;
to Buying in Cents Pty Ltd. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;“the website” refers to Buying in Cents website www.buyingincents.com.au&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;“Party”, “Parties”, or “Us”, refers to both the Client and ourselves, or
either the Client or ourselves.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;All terms refer to the offer, acceptance and consideration of payment
necessary to undertake the process of our assistance to the Client in the most
appropriate manner, whether by formal meetings of a fixed duration, or any
other means, for the express purpose of meeting the Client’s needs in respect of
provision of the Company’s stated services/products, in accordance with and
subject to, prevailing law of Australia. Any use of the above terminology or
other words in the singular, plural, capitalisation and/or he/she or they, are
taken as interchangeable and therefore as referring to same. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;b style=&quot;mso-bidi-font-weight:normal&quot;&gt;&lt;u&gt;&lt;span style=&quot;font-size:12.0pt;
font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:
Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;Cookies&lt;/span&gt;&lt;/u&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;&lt;br&gt;
We employ the use of cookies. By using &lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;Buying
in Cents&lt;/i&gt; website, you consent to the use of cookies&amp;nbsp;in accordance with&lt;i style=&quotquot;mso-bidi-font-style:normal&quot;&gt; Buying in Cents&lt;/i&gt; Privacy Policy. Most of
the modern day interactive web sites use cookies to enable us to retrieve user
details for each visit. Cookies are used in some areas of our site to enable
the functionality of this area and ease of use for those people visiting. Some
of our&amp;nbsp;affiliate / advertising partners may also use cookies. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;b style=&quot;mso-bidi-font-weight:normal&quot;&gt;&lt;u&gt;&lt;span style=&quot;font-size:12.0pt;
font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:
Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;Intellectual Property Rights&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/u&gt;&lt;/b&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;License Unless otherwise stated, &lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;Buying
in Cents&lt;/i&gt; and/or it’s licensors own the intellectual property rights for all
material on Buying in Cents. All intellectual property rights are reserved. You
may view and/or print&lt;br&gt;
pages from&amp;nbsp;&lt;a href=&quot;http://www.buyingincents.com.au/&quot;&gt;&lt;span style=&quot;color:#337AB7;text-decoration:none;text-underline:none&quot;&gt;http://www.buyingincents.com.au&lt;/span&gt;&lt;/a&gt;&amp;nbsp;for
your own personal use subject to restrictions set in these terms and conditions.&lt;br&gt;
You must not:&lt;br&gt;
&amp;nbsp;&lt;br&gt;
Republish material from&amp;nbsp;&lt;a href=&quot;http://www.buyingincents.com.au/&quot;&gt;&lt;span style=&quot;color:#337AB7;text-decoration:none;text-underline:none&quot;&gt;http://www.buyingincents.com.au&lt;/span&gt;&lt;/a&gt;&lt;br&gt;
Sell, rent or sub-license material from&amp;nbsp;&lt;a href=&quot;http://www.buyingincents.com.au/&quot;&gt;&lt;span style=&quot;color:#337AB7;text-decoration:
none;text-underline:none&quot;&gt;http://www.buyingincents.com.au&lt;/span&gt;&lt;/a&gt;&lt;br&gt;
Reproduce, duplicate or copy material from&amp;nbsp;&lt;a href=&quot;http://www.buyingincents.com.au/&quot;&gt;&lt;span style=&quot;color:#337AB7;text-decoration:
none;text-underline:none&quot;&gt;http://www.buyingincents.com.au&lt;/span&gt;&lt;/a&gt;&lt;br&gt;
&lt;br&gt;
Redistribute content from &lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;Buying in Cents&lt;/i&gt;
(unless content is specifically made for redistribution).&lt;br style=&quot;mso-special-character:
line-break&quot;&gt;
&lt;!--[if !supportLineBreakNewLine]--&gt;&lt;br style=&quot;mso-special-character:line-break&quot;&gt;
&lt;!--[endif]--&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;b style=&quot;mso-bidi-font-weight:normal&quot;&gt;&lt;u&gt;&lt;span style=&quot;font-size:12.0pt;
font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:
Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;Comments&lt;/span&gt;&lt;/u&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;&lt;br&gt;
Certain parts of&lt;/span&gt; &lt;span style=&quot;font-size:12.0pt;font-family:Arial;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;
color:#333333;mso-fareast-language:EN-AU&quot;&gt;terms on &lt;a href=&quot;http://www.buyingincents.com.au&quot;&gt;www.buyingincents.com.au&lt;/a&gt; &lt;span style=&quot;mso-spacerun:yes&quot;&gt;&amp;nbsp;&lt;/span&gt;this website offer the opportunity for users
to post and exchange opinions, information, material and data (&#039;Comments&#039;) in
areas of the website. &lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;Buying in Cents&lt;/i&gt;
does not screen, edit, publish or review Comments prior to their appearance on
the website and Comments do not reflect the views or opinions of Buying in Cents,
its agents or affiliates. Comments reflect the view and opinion of the person
who posts such view or opinion. To the extent permitted by applicable laws &lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;Buying in Cents&lt;/i&gt; shall \not be
responsible or liable for the Comments or for any loss cost, liability, damages
or expenses caused and or suffered as a result of any use of and/or posting of
and/or appearance of the Comments on this website.&lt;br&gt;
&lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;Buying in Cents&lt;/i&gt; reserves the right to
monitor all Comments and to remove any Comments which it considers in its
absolute discretion to be inappropriate, offensive or otherwise in breach of
these Terms and Conditions.&lt;br&gt;
You warrant and represent that:&lt;br&gt;
You are entitled to post the Comments on our website and have all necessary
licenses and consents to do so if:&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoListParagraphCxSpFirst&quot; style=&quot;margin-bottom:7.5pt;mso-add-space:
auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;background:
white&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;color:#333333;
mso-fareast-language:EN-AU&quot;&gt;&lt;span style=&quot;mso-list:Ignore&quot;&gt;·&lt;span style=&quot;font:7.0pt &amp;quot;Times New Roman&amp;quot;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;The
Comments do not infringe any intellectual property right, including without
limitation copyright, patent or trademark, or other proprietary right of any
third party;&lt;u&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/u&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot; style=&quot;margin-bottom:7.5pt;mso-add-space:
auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;background:
white&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;color:#333333;
mso-fareast-language:EN-AU&quot;&gt;&lt;span style=&quot;mso-list:Ignore&quot;&gt;·&lt;span style=&quot;font:7.0pt &amp;quot;Times New Roman&amp;quot;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;The
Comments do not contain any defamatory, libellous, offensive, indecent or
otherwise unlawful material or material which is an invasion of privacy;&lt;br&gt;
The Comments will not be used to solicit or promote business or custom or
present commercial activities or unlawful activity;.&lt;u&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/u&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoListParagraphCxSpLast&quot; style=&quot;margin-bottom:7.5pt;mso-add-space:
auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;background:
white&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;color:#333333;
mso-fareast-language:EN-AU&quot;&gt;&lt;span style=&quot;mso-list:Ignore&quot;&gt;·&lt;span style=&quot;font:7.0pt &amp;quot;Times New Roman&amp;quot;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt;You hereby
grant to Buying in Cents a non-exclusive royalty-free license to use,
reproduce, edit and authorise others to use, reproduce and edit any of your
Comments in any and all forms, formats or media.&lt;br&gt;
&lt;br&gt;
&amp;nbsp;&lt;br&gt;
&lt;b style=&quot;mso-bidi-font-weight:normal&quot;&gt;&lt;u&gt;Linking to Buying in Cents&lt;/u&gt;&lt;/b&gt;&lt;u&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/u&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;&lt;br&gt;
The following organisations may link to our &lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;
font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:
Arial;color:black;mso-fareast-language:EN-AU;mso-bidi-font-weight:bold&quot;&gt;website&lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:EN-AU&quot;&gt; without
prior written approval:&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;Government agencies;&lt;br&gt;
Search engines;&lt;br&gt;
News organisations;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;&lt;br&gt;
&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;br&gt;
These organisations may link to our home page, to publications or to other Web
site information so long as the link: (a) is not in any way misleading; (b)
does not falsely imply sponsorship, endorsement or&lt;br&gt;
approval of the linking party and its products or services; and (c) fits within
the context of the linking&lt;br&gt;
party&#039;s site.&lt;br&gt;
&lt;br&gt;
&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;br&gt;
We will approve link requests from these organisations if we determine that:
(a) the link would not reflect&lt;br&gt;
unfavourably on us or our accredited businesses (for example, trade
associations or other organizations&lt;br&gt;
representing inherently suspect types of business, such as work-at-home
opportunities, shall not be allowed&lt;br&gt;
to link); (b)the organization does not have an unsatisfactory record with us;
(c) the benefit to us from the visibility associated with the hyperlink
outweighs the absence of ; and (d) where the&lt;br&gt;
link is in the context of general resource information or is otherwise
consistent with editorial content in a newsletter or similar product furthering
the mission of the organisation.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom:7.5pt;line-height:normal;background:
white&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;&lt;br&gt;
By use of our corporate name; or&lt;br&gt;
By use of the uniform resource locator (Web address) being linked to; or&lt;br&gt;
By use of any other description of our Web site or material being linked to
that makes sense within the&lt;br&gt;
context and format of content on the linking party&#039;s site.&lt;br&gt;
&amp;nbsp;&lt;br&gt;
No use of &lt;i style=&quot;mso-bidi-font-style:normal&quot;&gt;Buying in Cents&lt;/i&gt; logo or
other artwork will be allowed for linking absent a trademark license&lt;br&gt;
agreement.&lt;br&gt;
&lt;br&gt;
&lt;b style=&quot;mso-bidi-font-weight:normal&quot;&gt;Reservation of Rights&lt;/b&gt;&lt;br&gt;
We reserve the right at any time and in its sole discretion to request that you
remove all links or any particular link to our website. You agree to
immediately remove all links to our website upon such request. We also reserve
the right to amend these terms and conditions and its linking policy at any
time. By continuing to link to our website, you agree to be bound to and abide
by these linking terms and conditions.&lt;br&gt;
&lt;b style=&quot;mso-bidi-font-weight:normal&quot;&gt;Removal of links from our website&lt;/b&gt;&lt;br&gt;
If you find any link on our website or any linked website objectionable for any
reason, you may contact&lt;br&gt;
us about this. We will consider requests to remove links but will have no
obligation to do so or to respond&lt;br&gt;
directly to you.&lt;br&gt;
Whilst we endeavour to ensure that the information on this website is correct,
we do not warrant its completeness or accuracy; nor do we commit to ensuring
that the website remains available or that the material on the website is kept
up to date.&lt;br&gt;
&lt;b style=&quot;mso-bidi-font-weight:normal&quot;&gt;Content Liability&lt;/b&gt;&lt;br&gt;
We shall have no responsibility or liability for any content appearing on your website.
You agree to indemnify and defend us against all claims arising out of or based
upon your website. No link(s) may appear on any page on your website or within
any context containing content or materials that may be interpreted as
libellous, obscene or criminal, or which infringes, otherwise violates, or
advocates the infringement or&lt;br&gt;
other violation of, any third party rights.&lt;br&gt;
D&lt;b style=&quot;mso-bidi-font-weight:normal&quot;&gt;isclaimer&lt;/b&gt;&lt;br&gt;
To the maximum extent permitted by applicable law, we exclude all
representations, warranties and conditions relating to our website and the use
of this website (including, without limitation, any warranties implied by law
in respect of satisfactory quality, fitness for purpose and/or the use of
reasonable care and skill). Nothing in this disclaimer will:&lt;br&gt;
&amp;nbsp;&lt;br&gt;
limit or exclude our or your liability for death or personal injury resulting
from negligence;&lt;br&gt;
limit or exclude our or your liability for fraud or fraudulent misrepresentation;&lt;br&gt;
limit any of our or your liabilities in any way that is not permitted under
applicable law; or&lt;br&gt;
exclude any of our or your liabilities that may not be excluded under
applicable law.&lt;br&gt;
&amp;nbsp;&lt;br&gt;
The limitations and exclusions of liability set out in this Section and
elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and
(b) govern all liabilities arising under the disclaimer or in relation to the
subject matter of this disclaimer, including liabilities arising in contract,
in tort (including negligence) and for breach of statutory duty.&lt;br&gt;
To the extent that the website and the information and services on the website
are provided free of charge,&lt;br&gt;
we will not be liable for any loss or damage of any nature.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;line-height:115%;font-family:
Arial;mso-bidi-font-family:Arial&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;tab-stops: 35.45pt;&quot;&gt;






&lt;!--[if gte mso 9]&gt;&lt;xml&gt;
&lt;o:OfficeDocumentSettings&gt;
&lt;o:AllowPNG&gt;&lt;/o:AllowPNG&gt;
&lt;/o:OfficeDocumentSettings&gt;
&lt;/xml&gt;&lt;![endif]--&gt;

&lt;!--[if gte mso 9]&gt;&lt;xml&gt;
&lt;w:WordDocument&gt;
&lt;w:View&gt;Normal&lt;/w:View&gt;
&lt;w:Zoom&gt;0&lt;/w:Zoom&gt;
&lt;w:TrackMoves&gt;&lt;/w:TrackMoves&gt;
&lt;w:TrackFormatting&gt;&lt;/w:TrackFormatting&gt;
&lt;w:PunctuationKerning&gt;&lt;/w:PunctuationKerning&gt;
&lt;w:ValidateAgainstSchemas&gt;&lt;/w:ValidateAgainstSchemas&gt;
&lt;w:SaveIfXMLInvalid&gt;false&lt;/w:SaveIfXMLInvalid&gt;
&lt;w:IgnoreMixedContent&gt;false&lt;/w:IgnoreMixedContent&gt;
&lt;w:AlwaysShowPlaceholderText&gt;false&lt;/w:AlwaysShowPlaceholderText&gt;
&lt;w:DoNotPromoteQF&gt;&lt;/w:DoNotPromoteQF&gt;
&lt;w:LidThemeOther&gt;EN-AU&lt;/w:LidThemeOther&gt;
&lt;w:LidThemeAsian&gt;JA&lt;/w:LidThemeAsian&gt;
&lt;w:LidThemeComplexScript&gt;X-NONE&lt;/w:LidThemeComplexScript&gt;
&lt;w:Compatibility&gt;
&lt;w:BreakWrappedTables&gt;&lt;/w:BreakWrappedTables&gt;
&lt;w:SnapToGridInCell&gt;&lt;/w:SnapToGridInCell&gt;
&lt;w:WrapTextWithPunct&gt;&lt;/w:WrapTextWithPunct&gt;
&lt;w:UseAsianBreakRules&gt;&lt;/w:UseAsianBreakRules&gt;
&lt;w:DontGrowAutofit&gt;&lt;/w:DontGrowAutofit&gt;
&lt;w:SplitPgBreakAndParaMark&gt;&lt;/w:SplitPgBreakAndParaMark&gt;
&lt;w:EnableOpenTypeKerning&gt;&lt;/w:EnableOpenTypeKerning&gt;
&lt;w:DontFlipMirrorIndents&gt;&lt;/w:DontFlipMirrorIndents&gt;
&lt;w:OverrideTableStyleHps&gt;&lt;/w:OverrideTableStyleHps&gt;
&lt;/w:Compatibility&gt;
&lt;m:mathPr&gt;
&lt;m:mathFont m:val=&quot;Cambria Math&quot;&gt;&lt;/m:mathFont&gt;
&lt;m:brkBin m:val=&quot;before&quot;&gt;&lt;/m:brkBin&gt;
&lt;m:brkBinSub m:val=&quot;&amp;#45;-&quot;&gt;&lt;/m:brkBinSub&gt;
&lt;m:smallFrac m:val=&quot;off&quot;&gt;&lt;/m:smallFrac&gt;
&lt;m:dispDef&gt;&lt;/m:dispDef&gt;
&lt;m:lMargin m:val=&quot;0&quot;&gt;&lt;/m:lMargin&gt;
&lt;m:rMargin m:val=&quot;0&quot;&gt;&lt;/m:rMargin&gt;
&lt;m:defJc m:val=&quot;centerGroup&quot;&gt;&lt;/m:defJc&gt;
&lt;m:wrapIndent m:val=&quot;1440&quot;&gt;&lt;/m:wrapIndent&gt;
&lt;m:intLim m:val=&quot;subSup&quot;&gt;&lt;/m:intLim&gt;
&lt;m:naryLim m:val=&quot;undOvr&quot;&gt;&lt;/m:naryLim&gt;
&lt;/m:mathPr&gt;&lt;/w:WordDocument&gt;
&lt;/xml&gt;&lt;![endif]--&gt;&lt;!--[if gte mso 9]&gt;&lt;xml&gt;
&lt;w:LatentStyles DefLockedState=&quot;false&quot; DefUnhideWhenUsed=&quot;true&quot;
DefSemiHidden=&quot;true&quot; DefQFormat=&quot;false&quot; DefPriority=&quot;99&quot;
LatentStyleCount=&quot;276&quot;&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;0&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Normal&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;heading 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; QFormat=&quot;true&quot; Name=&quot;heading 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; QFormat=&quot;true&quot; Name=&quot;heading 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; QFormat=&quot;true&quot; Name=&quot;heading 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; QFormat=&quot;true&quot; Name=&quot;heading 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; QFormat=&quot;true&quot; Name=&quot;heading 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; QFormat=&quot;true&quot; Name=&quot;heading 7&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; QFormat=&quot;true&quot; Name=&quot;heading 8&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;9&quot; QFormat=&quot;true&quot; Name=&quot;heading 9&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;toc 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;toc 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;toc 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;toc 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;toc 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;toc 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;toc 7&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;toc 8&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; Name=&quot;toc 9&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;35&quot; QFormat=&quot;true&quot; Name=&quot;caption&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;quot;false&quot; Priority=&quot;10&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Title&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;1&quot; Name=&quot;Default Paragraph Font&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;11&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Subtitle&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;22&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Strong&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;20&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Emphasis&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;59&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Table Grid&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; UnhideWhenUsed=&quot;false&quot; Name=&quot;Placeholder Text&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;1&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;No Spacing&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Shading&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light List&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Grid&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Dark List&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Shading&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful List&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Grid&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Shading Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light List Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Grid Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 1 Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 2 Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 1 Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; UnhideWhenUsed=&quot;false&quot; Name=&quot;Revision&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;34&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;List Paragraph&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;29&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Quote&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;30&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Intense Quote&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 2 Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 1 Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 2 Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 3 Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Dark List Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Shading Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful List Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Grid Accent 1&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Shading Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light List Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Grid Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 1 Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 2 Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 1 Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 2 Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 1 Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 2 Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 3 Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Dark List Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Shading Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful List Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Grid Accent 2&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Shading Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light List Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Grid Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 1 Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 2 Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 1 Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 2 Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 1 Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 2 Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 3 Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Dark List Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Shading Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful List Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Grid Accent 3&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Shading Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light List Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Grid Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 1 Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 2 Accent 4&quot;&gt;&llt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 1 Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 2 Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 1 Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 2 Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 3 Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Dark List Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Shading Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful List Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Grid Accent 4&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Shading Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light List Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Grid Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 1 Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 2 Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;quot;false&quot; Priority=&quot;65&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 1 Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 2 Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 1 Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 2 Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 3 Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Dark List Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Shading Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful List Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Grid Accent 5&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;60&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Shading Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;61&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light List Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;62&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Light Grid Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;63&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 1 Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;64&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Shading 2 Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;65&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 1 Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;66&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium List 2 Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;67&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 1 Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;68&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 2 Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;69&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Medium Grid 3 Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;70&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Dark List Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;71&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Shading Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;72&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful List Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;73&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; Name=&quot;Colorful Grid Accent 6&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;19&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Subtle Emphasis&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;21&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Intense Emphasis&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;31&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Subtle Reference&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;32&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Intense Reference&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;33&quot; SemiHidden=&quot;false&quot;
UnhideWhenUsed=&quot;false&quot; QFormat=&quot;true&quot; Name=&quot;Book Title&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;37&quoquot; Name=&quot;Bibliography&quot;&gt;&lt;/w:LsdException&gt;
&lt;w:LsdException Locked=&quot;false&quot; Priority=&quot;39&quot; QFormat=&quot;true&quot; Name=&quot;TOC Heading&quot;&gt;&lt;/w:LsdException&gt;
&lt;/w:LatentStyles&gt;
&lt;/xml&gt;&lt;![endif]--&gt;

&lt;!--[if gte mso 10]&gt;
&lt;style&gt;
/* Style Definitions */
table.MsoNormalTable
{mso-style-name:&quot;Table Normal&quot;;
mso-tstyle-rowband-size:0;
mso-tstyle-colband-size:0;
mso-style-noshow:yes;
mso-style-priority:99;
mso-style-parent:&quot;&quot;;
mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
mso-para-margin-top:0cm;
mso-para-margin-right:0cm;
mso-para-margin-bottom:10.0pt;
mso-para-margin-left:0cm;
line-height:115%;
mso-pagination:widow-orphan;
font-size:11.0pt;
font-family:Calibri;
mso-ascii-font-family:Calibri;
mso-ascii-theme-font:minor-latin;
mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;}
&lt;/style&gt;
&lt;![endif]--&gt;



&lt;!--StartFragment--&gt;



















































&lt;!--EndFragment--&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;line-height:115%;font-family:
Arial;mso-bidi-font-family:Arial&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;</textarea>

<div class="help-block"></div>
</div>
<div class="form-group field-summernote1 required">
<label class="control-label" for="summernote1">Privacy</label>
<textarea id="summernote1" class="form-control" name="GeneralSetting[privacy]" rows="6" aria-required="true">&lt;p class=&quot;MsoNormal&quot;&gt;&lt;br&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;span style=&quot;font-family: &amp;quot;Times New Roman&amp;quot;; font-size: 16pt;&quot;&gt;&lt;u&gt;Your privacy is important to us!&lt;/u&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Arial;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:Arial;color:#333333;mso-fareast-language:
EN-AU&quot;&gt;&lt;br&gt;
&lt;!--[if !supportLineBreakNewLine]--&gt;&lt;br&gt;
&lt;!--[endif]--&gt;&lt;lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;This is the privacy policy (&quot;Privacy Policy&quot;) of &lt;i&gt;Buying in Cents Pty Ltd &lt;/i&gt;&lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;The Privacy Policy outlines what information may be collected as a
result of you accessing and &amp;nbsp;registering with
&lt;i&gt;Buying in Cents&lt;/i&gt;&amp;nbsp; and how this information may be used. &lt;br&gt;
This Privacy Policy, together with the Terms and Conditions posted on our&amp;nbsp;website,
set out the general rules and policies governing &lt;i&gt;Buying in Cents&lt;/i&gt;. Depending on your activities when visiting our website,
you may be required to agree to additional terms and conditions.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Terminology&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;

&lt;p class=&quot;MsoListParagraphCxSpFirst&quot; style=&quot;margin-bottom: 7.5pt; text-indent: -18pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quoquot;font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;mso-fareast-language:
EN-AU&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;“registered users” – refers to &amp;nbsp;people signing up to &lt;a href=&quot;http://www.buyingingcents.com.au&quot;&gt;www.buyingingcents.com.au&lt;/a&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot; style=&quot;margin-bottom: 7.5pt; text-indent: -18pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;mso-fareast-language:
EN-AU&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;“client”, “you” and “your”-refers to you, the
person accessing &lt;a href=&quot;http://www.buyingingcents.com.au&quot;&gt;www.buyingingcents.com.au&lt;/a&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot; style=&quot;margin-bottom: 7.5pt; text-indent: -18pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;mso-fareast-language:
EN-AU&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;i&gt;“Buying &lt;/i&gt;&lt;i&gt;&lt;span style=&quot;font-size:12.0pt;font-family:
&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:EN-AU&quot;&gt;in Cents&lt;/span&gt;&lt;/i&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;”, “we” “the website” “&lt;/span&gt;&lt;a href=&quot;http://www.buyinginCents.com.au&quot;&gt;www.buyinginCents.com.au&lt;/a&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;&quot; “our website” – refers to Buying in Cents Pty Ltd.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoListParagraphCxSpLast&quot; style=&quot;margin-bottom: 7.5pt; text-indent: -18pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;mso-fareast-language:
EN-AU&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;Personal Information&amp;nbsp; - Personally-identifying information you
provide to &lt;i&gt;Buying in Cents&lt;o:p&gt;&lt;/o:p&gt;&lt;/i&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Website use&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;By registering and using our website you agree to be bound by the terms
of this Privacy Policy. &lt;i&gt;Buying in Cents&lt;/i&gt;
reserves the right, at its&amp;nbsp;sole discretion, to change or modify its
Privacy Policy at any time with, or without, notice. Changes will be effected
immediately when posted on the website. Your continued use of the website
following the posting of any changes will constitute your acceptance of those
changes. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;This Privacy Policy will not apply to websites which are linked to the
website and in which &lt;i&gt;Buying in Cents&lt;/i&gt;
has no control. &lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Personal Information&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Certain clients of &lt;i&gt;Buying in Cents&lt;/i&gt;
website choose to interact with &lt;i&gt;Buying in
Cents&lt;/i&gt; in ways that require us to gather personally-identifying information.
The amount and type of information that &lt;i&gt;Buying
in Cents&lt;/i&gt; gathers depends on the nature of the interaction.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;The kinds of personal Information that &lt;i&gt;Buying in Cents &lt;/i&gt;generally collects from registered users includes:&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Name&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Personally submitted preferences&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Bank account and credit card
information&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Financial information&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Email address&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&ltlt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Other Identity verification information
(phone numbers)&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Postal address&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Internet Protocol (IP) addresses for
logged in users and for users leaving&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Collection of &amp;nbsp;non-personally-identifying information&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;Like most website operators, Buying in Cents collects
non-personally-identifying information of the sort that web browsers and
servers typically make available, such as the browser type, language
preference, referring site, and the date , time and purpose of each visit.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;&amp;nbsp;Collection purposes&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;i&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Buying in
Cents&lt;/span&gt;&lt;/i&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt; will only collect your Personal Information to ensure the operation of
its business for the following purposes:&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;to process your application to become a
registered user of &lt;i&gt;Buying in Cents&lt;/i&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;to identify and provide services to you
as a registered user&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;to maintain your registration with &lt;i&gt;Buying in Cents&lt;/i&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;quality improvement purposes, to
upgrade and enhance your experience with our website &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;to enable communication for questions
or queries &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;to manage complaints resolution
processes&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;to tell you about our products or
services that we think may be of interest to you by communicating with you via
email, SMS or telephone&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;to ship/deliver items won at auction&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;to create aggregate data about clients
through demographic profiling, statistical analysis of the database to provide
to potential and existing stakeholders, and to allow for more efficient
operation of &lt;i&gt;Buying in Cents&lt;/i&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;&amp;nbsp;to tell you about
new features, solicit your feedback, or keep you up to date with latest
development of &lt;i&gt;Buying in Cents&lt;/i&gt; and
our products&lt;/span&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:15.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level1 lfo2;
tab-stops:list 36.0pt&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-size: 10pt; font-family: Symbol;&quot;&gt;·&lt;span style=&quot;font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;to establish, exercise or defend any
legal claims.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoListParagraph&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;mso-add-space:auto;line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;
font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:EN-AU&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;If you send us a request (for example via a support
email or via one of our feedback mechanisms), we reserve the right to publish
it in order to help us clarify or respond to your request or to help us support
other users.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;From time to time, Buying in Cents may release
non-personally-identifying information in the aggregate, for example by
publishing a report on trends in the usage of our website.&lt;br&gt;
&lt;!--[if !supportLineBreakNewLine]--&gt;&lt;br&gt;
&lt;!--[endif]--&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;Buying in Cents may collect statistics about the
behaviour of visitors to its website. Buying in Cents may display this
information publicly or provide it to others.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;Some of &lt;i&gt;Buying
in Cents&lt;/i&gt; employees, contractors and affiliated organisations may be located
outside of Australia. By registering with &lt;i&gt;Buying
in Cents&lt;/i&gt;, you consent to the transfer of required Personal Information to these
people. &lt;i&gt;Buying in Cents&lt;/i&gt; will not rent
or sell potentially personally-identifying and personally-identifying
information to anyone, &lt;i&gt;Buying in Cents&lt;/i&gt;
discloses potentially personally-identifying and personally-identifying
information only in response to a subpoena, court order or other governmental
request, or when &lt;i&gt;Buying in Cents&lt;/i&gt; believes
in good faith that disclosure is reasonably necessary to protect the property
or rights of &lt;i&gt;Buying in Cents&lt;/i&gt; clients,
third parties or the public at large.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;&lt;br&gt;
&lt;i&gt;Buying in Cents&lt;/i&gt; does not disclose
personally-identifying information unless required for legal purposes or with
consent.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;By&lt;/span&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt; becoming a registered user or choosing
to provide &lt;i&gt;Buying in Cents&lt;/i&gt; with
Personal Information you consent for &lt;i&gt;Buying
in Cents&lt;/i&gt; to collect and use your Personal Information&amp;nbsp; for the above purpose.&lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Security&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt; &lt;/span&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;

&lt;p&gt;You acknowledge that no data transmission over the Internet is totally
secure. Accordingly, &lt;i&gt;Buying in Cents&lt;/i&gt; does
not warrant the security of any information which you transmit to it. Any
information which you transmit to www.buyingincents.com.au is transmitted at
your own risk. However, once we receive your transmission, we will take
reasonable steps to protect your Personal Information from misuse, loss and
unauthorised access, modification and disclosure. &lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;

&lt;p&gt;&lt;i&gt;Buying in Cents&lt;/i&gt; employees, agents
and contractors are required to maintain the confidentiality of registered
users Personal Information.&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;

&lt;p&gt;Information posted on bulletin boards, &amp;nbsp;blogs or communicated within a social media
environment (for example, Facebook, Twitter, Chat Rooms) &amp;nbsp;becomes public information. &lt;i&gt;Buying in Cents&lt;/i&gt; cannot guarantee the
security of this type of disclosed information. &lt;i&gt;Buying in Cen&lt;/i&gt;ts does not accept any responsibility for information
you choose to share via posted bulletin boards, blogs or communicated within a
social media environment affiliated or linked to &lt;i&gt;Buying in Cents.&lt;/i&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;

&lt;p&gt;Remember to always log out of your account when you have completed your time
on the website. You are responsible for the security of and access to your own
computer, mobile device or any other handset used to access the website.&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;

&lt;p&gt;Ultimately, you are solely responsible for maintaining the secrecy of your
username, password and any account information. Please be careful whenever
using the Internet and our website.&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Cookies&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;&lt;br&gt;
To enrich and perfect your online experience, &lt;i&gt;Buying in Cents&lt;/i&gt; uses &quot;Cookies&quot;, similar technologies and
services provided by others to display personalized content, appropriate
advertising and store your preferences on your computer.&lt;br&gt;
A cookie is a string of information that a website stores on a visitor’s
computer, and that the visitor’s browser provides to the website each time the
visitor returns. &lt;i&gt;Buying in Cents&lt;/i&gt; uses
cookies to help &lt;i&gt;Buying in Cents&lt;/i&gt;
identify and track visitors, their usage of&amp;nbsp;&lt;a href=&quot;http://www.buyingincents.com.au/&quot;&gt;&lt;span style=&quot;color: rgb(51, 122, 183);&quot;&gt;http://www.buyinginCents.com.au&lt;/span&gt;&lt;/a&gt;, and their
website access preferences. &lt;i&gt;Buying in
Cents &lt;/i&gt;visitors who do not wish to have cookies placed on their computers
should set their browsers to refuse cookies before using &lt;i&gt;Buying in Cents&lt;/i&gt; website, with the drawback that certain features of
&lt;i&gt;Buying in Cents&lt;/i&gt; website may not
function properly without the aid of cookies.&lt;br&gt;
By continuing to navigate our website without changing your cookie settings,
you hereby acknowledge and agree to &lt;i&gt;Buying
in Cents&lt;/i&gt; use of cookies.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Advertisement&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;&lt;br&gt;
Advertisements (ad) appearing on www.buyingincents.com.au may be delivered to you
by advertising partners, who may set cookies. These cookies allow the ad server
to recognise your computer each time they send you an online advertisement to
compile information about you or others who use your computer. This information
allows ad networks to, among other things, deliver targeted advertisements that
they believe will be of most interest to you. This Privacy Policy covers the
use of cookies by &lt;i&gt;Buying in Cents &lt;/i&gt;and
does not cover the use of cookies by any advertisers.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Links To External Sites&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;
font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:EN-AU&quot;&gt;&lt;br&gt;
www.buyingincents.com.au &amp;nbsp;may contain
links to external sites that are not operated by us. If you click on a third
party link, you will be directed to that third party&#039;s site. We strongly advise
you to review the Privacy Policy and&amp;nbsp;Terms&amp;nbsp;and Conditions of every
site you visit.&lt;br&gt;
We have no control over, and assume no responsibility for the content, privacy
policies or practices of any third party sites, products or services.&lt;/span&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Affiliate Disclosure&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:
&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:EN-AU&quot;&gt;&lt;br&gt;
This site uses affiliate links and does earn a commission from certain links.
This does not affect your purchases or the price you may pay.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;&amp;nbsp;E-commerce&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;&lt;br&gt;
Those who engage in transactions with Buying in Cents – by purchasing &lt;i&gt;Buying in Cents&lt;/i&gt; services or products,
are asked to provide additional information, including as necessary the
personal and financial information required to process those transactions. In
each case, Buying in Cents collects such information only insofar as is
necessary or appropriate to fulfill the purpose of the visitor’s interaction
with Buying in Cents. Buying in Cents does not disclose personally-identifying
information other than as described above. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Business Transfers&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:
&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:EN-AU&quot;&gt;&lt;br&gt;
If &lt;i&gt;Buying in Cents&lt;/i&gt;, or substantially
all of its assets, were acquired, or in the unlikely event that &lt;i&gt;Buying in Cents&lt;/i&gt; goes out of business or
enters bankruptcy, Personal Information would be one of the assets that is
transferred or acquired by a third party. You acknowledge that such transfers
may occur, and that any acquirer of &lt;i&gt;Buying
in Cents&lt;/i&gt; may continue to use your personal information as set forth in this
policy.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;

&lt;p&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal&quot;&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 7.5pt; line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Further Information&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;font-family:
&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:EN-AU&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;If you have any questions regarding the Privacy Policy, please contact
us. at:&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-font-family:
&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;mso-fareast-language:
EN-AU&quot;&gt;admin@buyingincents.com.au&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot; style=&quot;line-height: normal; background-position: initial initial; background-repeat: initial initial;&quot;&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;Further Information about privacy concerns or complaints in
Australia can be found on the Office of the Australian Privacy Commissioner&#039;s website
at&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.oaic.gov.au/&quot;&gt;&lt;span style=&quot;font-size:11.5pt;
font-family:Arial;mso-bidi-font-family:Arial;color:#00549E&quot;&gt;www.oaic.gov.au&lt;/span&gt;&lt;/a&gt;&lt;span style=&quot;font-size: 11.5pt; font-family: Arial;&quot;&gt;.&lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;mso-bidi-font-family:&amp;quot;Times New Roman&amp;quot;;
mso-fareast-language:EN-AU&quot;&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;

&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;

&lt;!--EndFragment--&gt;</textarea>

<div class="help-block"></div>
</div>
<div class="form-group field-summernote2 required">
<label class="control-label" for="summernote2">About</label>
<textarea id="summernote2" class="form-control" name="GeneralSetting[about]" rows="6" aria-required="true">&lt;p align=&quot;center&quot;&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;

&lt;/font&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;
&lt;/font&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;&lt;font color=&quot;#000000&quot;&gt;&lt;font face=&quot;Calibri&quot;&gt;&lt;strong&gt;&lt;span style=&quot;line-height: 115%; font-size: 14.5pt; font-weight: normal; mso-bidi-font-weight: bold; mso-bidi-font-family: &amp;quot;Segoe UI&amp;quot;;&quot;&gt;Buying
in Cents is a Melbourne based company. We thrive on being
transparent to all our customers&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span lang=&quot;EN-US&quot; style=&quot;line-height: 115%; font-size: 14.5pt; font-weight: normal; mso-bidi-font-weight: bold; mso-bidi-font-family: &amp;quot;Segoe UI&amp;quot;; mso-ansi-language: EN-US;&quot;&gt;. &lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;line-height: 115%; font-size: 14.5pt; font-weight: normal; mso-bidi-font-weight: bold; mso-bidi-font-family: &amp;quot;Segoe UI&amp;quot;;&quot;&gt;Our company is dedicated to give
everyone an opportunity to buy products for a fraction of the retail price&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span lang=&quot;EN-US&quot; style=&quot;line-height: 115%; font-size: 14.5pt; font-weight: normal; mso-bidi-font-weight: bold; mso-bidi-font-family: &amp;quot;Segoe UI&amp;quot;; mso-ansi-language: EN-US;&quot;&gt;. &lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;line-height: 115%; font-size: 14.5pt; font-weight: normal; mso-bidi-font-weight: bold; mso-bidi-font-family: &amp;quot;Segoe UI&amp;quot;;&quot;&gt;When was the last time you bought
something in cents?&lt;/span&gt;&lt;/strong&gt;&lt;/font&gt;&lt;span lang=&quot;EN-US&quot; style=&quot;line-height: 115%; font-family: &amp;quot;Times New Roman&amp;quot;,&amp;quot;serif&amp;quot;; font-size: 14.5pt; mso-ansi-language: EN-US;&quot;&gt;﻿&lt;span style=&quot;font-size: 12pt;&quot;&gt;&lt;span lang=&quot;EN-AU&quot; style=&quot;font-size: 18px;&quot;&gt;&lt;font face=&quot;Calibri&quot;&gt;&lt;font face=&quot;Calibri&quot;&gt;&lt;span style=&quot;color: rgb(103, 117, 124); mso-bidi-font-family: &amp;quot;Segoe UI&amp;quot;; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin;&quot;&gt;&lt;span style=&quot;font-size: 12pt;&quot;&gt;&lt;span lang=&quot;EN-AU&quot; style=&quot;font-size: 18px;&quot;&gt;&lt;font face=&quot;Calibri&quot;&gt;&lt;br&gt;&lt;br&gt;&lt;/font&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/font&gt;&lt;/font&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/font&gt;&lt;/font&gt;&lt;/p&gt;</textarea>

<div class="help-block"></div>
</div>
<div class="form-group field-generalsetting-fb_url required">
<label class="control-label" for="generalsetting-fb_url">Facebook URL</label>
<input type="text" id="generalsetting-fb_url" class="form-control" name="GeneralSetting[fb_url]" value="https://www.facebook.com/Buying-in-Cents-1804314326533544/" placeholder="Enter Facebook URL" aria-required="true">

<div class="help-block"></div>
</div>                <div class="form-group field-generalsetting-google_url required">
<label class="control-label" for="generalsetting-google_url">Google URL</label>
<input type="text" id="generalsetting-google_url" class="form-control" name="GeneralSetting[google_url]" value="https://www.google.com.au" placeholder="Enter Google URL" aria-required="true">

<div class="help-block"></div>
</div>                <div class="form-group field-generalsetting-twitter_url required">
<label class="control-label" for="generalsetting-twitter_url">Twitter URL</label>
<input type="text" id="generalsetting-twitter_url" class="form-control" name="GeneralSetting[twitter_url]" value="https://twitter.com/?request_context=signup" placeholder="Enter Twitter URL" aria-required="true">

<div class="help-block"></div>
</div>
<div class="form-group field-generalsetting-item_ending_soon_percentage required">
<label class="control-label" for="generalsetting-item_ending_soon_percentage">Percentage for ending soon item</label>
<input type="text" id="generalsetting-item_ending_soon_percentage" class="form-control" name="GeneralSetting[item_ending_soon_percentage]" value="95" placeholder="Enter Percentage for ending soon item" aria-required="true">

<div class="help-block"></div>
</div>                <div class="form-group field-generalsetting-top_user required">
<label class="control-label" for="generalsetting-top_user">Send Notification To No Of Top Bidder</label>
<input type="number" id="generalsetting-top_user" class="form-control" name="GeneralSetting[top_user]" value="10" placeholder="" aria-required="true">

<div class="help-block"></div>
</div>                <div class="form-group field-summernote3 required">
<label class="control-label" for="summernote3">Frontend Footer Description</label>
<textarea id="summernote3" class="form-control" name="GeneralSetting[footer_discription]" rows="6" aria-required="true">&lt;br&gt;</textarea>

<div class="help-block"></div>
</div>                                               <div class="form-group">
<button type="submit" class="btn btn-info btn-block">Save</button>              </div>

</form>         </div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
$('#summernote').summernote({
toolbar: [
['style', ['bold', 'italic', 'underline', 'clear']],
['fontsize', ['fontsize']],
['color', ['color']],
['para', ['ul', 'ol', 'paragraph']],
// ['height', ['height']],
//["table", ["table"]],
//["insert", ["link", "picture", "video"]],
["insert", ["link"]],
["view", ["fullscreen", "codeview", "help"]]
],
height: 100,
});
$('#summernote1').summernote({
toolbar: [
['style', ['bold', 'italic', 'underline', 'clear']],
['fontsize', ['fontsize']],
['color', ['color']],
['para', ['ul', 'ol', 'paragraph']],
// ['height', ['height']],
//["table", ["table"]],
//["insert", ["link", "picture", "video"]],
["insert", ["link"]],
["view", ["fullscreen", "codeview", "help"]]
],
height: 100,
});
$('#summernote2').summernote({
toolbar: [
['style', ['bold', 'italic', 'underline', 'clear']],
['fontsize', ['fontsize']],
['color', ['color']],
['para', ['ul', 'ol', 'paragraph']],
// ['height', ['height']],
//["table", ["table"]],
//["insert", ["link", "picture", "video"]],
["insert", ["link"]],
["view", ["fullscreen", "codeview", "help"]]
],
height: 100,
});
$('#summernote3').summernote({
toolbar: [
['style', ['bold', 'italic', 'underline', 'clear']],
['fontsize', ['fontsize']],
['color', ['color']],
['para', ['ul', 'ol', 'paragraph']],
// ['height', ['height']],
//["table", ["table"]],
//["insert", ["link", "picture", "video"]],
["insert", ["link"]],
["view", ["fullscreen", "codeview", "help"]]
],
height: 100,
});
});
</script>
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
<script src="js/yii.validation.js"></script>
<script src="js/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(function ($) {
jQuery('#form').yiiActiveForm([{"id":"generalsetting-terms","name":"terms","container":".field-summernote","input":"#summernote","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Terms cannot be blank."});yii.validation.string(value, messages, {"message":"Terms must be a string.","skipOnEmpty":1});}},{"id":"generalsetting-privacy","name":"privacy","container":".field-summernote1","input":"#summernote1","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Privacy cannot be blank."});yii.validation.string(value, messages, {"message":"Privacy must be a string.","skipOnEmpty":1});}},{"id":"generalsetting-about","name":"about","container":".field-summernote2","input":"#summernote2","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"About cannot be blank."});yii.validation.string(value, messages, {"message":"About must be a string.","skipOnEmpty":1});}},{"id":"generalsetting-fb_url","name":"fb_url","container":".field-generalsetting-fb_url","input":"#generalsetting-fb_url","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Facebook URL cannot be blank."});yii.validation.url(value, messages, {"pattern":/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(?::\d{1,5})?(?:$|[?\/#])/i,"message":"Facebook URL is not a valid URL.","enableIDN":false,"skipOnEmpty":1});}},{"id":"generalsetting-google_url","name":"google_url","container":".field-generalsetting-google_url","input":"#generalsetting-google_url","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Google URL cannot be blank."});yii.validation.url(value, messages, {"pattern":/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(?::\d{1,5})?(?:$|[?\/#])/i,"message":"Google URL is not a valid URL.","enableIDN":false,"skipOnEmpty":1});}},{"id":"generalsetting-twitter_url","name":"twitter_url","container":".field-generalsetting-twitter_url","input":"#generalsetting-twitter_url","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Twitter URL cannot be blank."});yii.validation.url(value, messages, {"pattern":/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(?::\d{1,5})?(?:$|[?\/#])/i,"message":"Twitter URL is not a valid URL.","enableIDN":false,"skipOnEmpty":1});}},{"id":"generalsetting-item_ending_soon_percentage","name":"item_ending_soon_percentage","container":".field-generalsetting-item_ending_soon_percentage","input":"#generalsetting-item_ending_soon_percentage","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Item Ending Soon Percentage cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?\s*$/,"message":"Item Ending Soon Percentage must be a number.","skipOnEmpty":1});}},{"id":"generalsetting-top_user","name":"top_user","container":".field-generalsetting-top_user","input":"#generalsetting-top_user","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Top User cannot be blank."});}},{"id":"generalsetting-footer_discription","name":"footer_discription","container":".field-summernote3","input":"#summernote3","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Footer Discription cannot be blank."});}}], []);
});</script></body>
</html>