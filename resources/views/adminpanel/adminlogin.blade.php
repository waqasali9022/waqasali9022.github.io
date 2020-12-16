
<style type="text/css">
.topbar {
background: #00aeff!important;
}
.sidebar-nav > ul > li.active > a, .sidebar-nav > ul > li.active:hover > a {
color: #ffffff;
background: #3b5998 !important;
}
.sidebar-nav > ul > li > a.active {
font-weight: 400;
color: #ffffff!important;
}
.sidebar-nav ul li a {
color: #607d8b!important;
}
.sidebar-nav ul li.active .hide-menu {
color: #ffffff!important;
}
.sidebar-nav ul li a.active, .sidebar-nav ul li a.active:hover {
color: #ffffff!important;
}
/*for active sidebar sub menu*/
.sidebar-nav ul li.active a.active, .sidebar-nav ul li.active a.active:hover {
color: #607d8b!important;
}
/*for active sidebar main menu*/
.sidebar-nav > ul > li > a.active i, .sidebar-nav > ul > li > a.active:hover i {
color: #ffffff!important;
}
.sidebar-nav > ul > li > a.active i, .sidebar-nav > ul > li.avtive > a:hover i {
color: #ffffff!important;
}
.sidebar-nav > ul > li > a i {
color: #607d8b!important;
}
.sidebar-nav > ul > li.active > a i {
color: #ffffff!important;
}
/*.sidebar-nav ul li a.active, .sidebar-nav ul li a:hover {
color: #3b5998!important;
}*/
</style>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="Hx9_3BXQ88UNw2Gbi3UOQJG30gtocrN6A9BaaqcleX5GUBqwcb6blUiFB_fNBG06wc-BSQ4o1xZlowoC1nozTQ==">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="{{asset ('adminlogin/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset ('adminlogin/css/style.css')}} " rel="stylesheet">
<link href="{{asset ('adminlogin/css/blue.css') }}" rel="stylesheet">
<link href="{{asset ('adminlogin/css/chartist.min.css')}}" rel="stylesheet">
<link href="{{asset ('adminlogin/css/chartist-init.css')}} " rel="stylesheet">
<link href="{{asset ('adminlogin/css/chartist-plugin-tooltip.css')}} " rel="stylesheet">
<link href="{{asset ('adminlogin/css/css-chart.css')}} " rel="stylesheet">
<link href="{{asset ('adminlogin/css/jquery-jvectormap-2.0.2.css')}} " rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.css" rel="stylesheet">
<link href="{{asset ('adminlogin/css/jquery.toast.css')}} " rel="stylesheet">
<script src="{{asset ('adminlogin/js/jquery.js')}} "></script>
<script src="{{asset ('adminlogin/js/yii.js')}} js/yii.js"></script>
<script src="{{asset ('adminlogin/js/popper.js')}} "></script>
<script src="{{asset ('adminlogin/js/bootstrap.js')}} "></script>
<script src="{{asset ('adminlogin/js/jquery.slimscroll.js')}} "></script>
<script src="{{asset ('adminlogin/js/waves.js')}} "></script>
<script src="{{asset ('adminlogin/js/sidebarmenu.js')}} "></script>
<script src="{{asset ('adminlogin/js/sticky-kit.min.js')}} "></script>
<script src="{{asset ('adminlogin/js/jquery.sparkline.min.js')}} "></script>
<script src="{{asset ('adminlogin/js/custom.min.js')}} "></script>
<script src="{{asset ('adminlogin/js/jQuery.style.switcher.js')}} "></script>
<script src="{{asset ('adminlogin/js/chartist.min.js')}} "></script>
<script src="{{asset ('adminlogin/js/chartist-plugin-tooltip.min.js')}} "></script>
<script src="{{asset ('adminlogin/js/jquery-jvectormap-2.0.2.min.js')}} "></script>
<script src="{{asset ('adminlogin/js/jquery-jvectormap-us-aea-en.js')}} "></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.js"></script>
<script src="{{asset ('adminlogin/js/jquery.toast.js')}} "></script>

</head>
<body>
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
<section id="wrapper">
<div class="login-register" style="background-image:url(adminlogin/image/login-register.jpg);">        
<div class="login-box card">
<div class="card-body">
<!-- <form class="form-horizontal form-material" id="loginform" action="index.html"> -->
<form id="login-form" class="form-horizontal form-material" action="/admin/login" method="post">
<input type="hidden" name="_csrf" value="Hx9_3BXQ88UNw2Gbi3UOQJG30gtocrN6A9BaaqcleX5GUBqwcb6blUiFB_fNBG06wc-BSQ4o1xZlowoC1nozTQ==">                    <h3 class="box-title m-b-20">ADMIN LOGIN</h3>

<div class="form-group field-loginform-username required">

<input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" autofocus placeholder="User Name" aria-required="true">

<p class="text-danger"></p>
</div>                    <div class="form-group field-loginform-password required">

<input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" placeholder="Password" aria-required="true">

<p class="text-danger"></p>
</div>               
<div class="form-group text-center m-t-20">
<div class="col-xs-12">
<!--  <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button> -->
<button type="submit" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="login-button">Login</button>                        </div>
</div>

</form>            </div>
</div>        </div>

</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<script src="/admin/assets/9f5b8106/yii.validation.js"></script>
<script src="/admin/assets/9f5b8106/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(function ($) {
jQuery('#login-form').yiiActiveForm([{"id":"loginform-username","name":"username","container":".field-loginform-username","input":"#loginform-username","error":".text-danger","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Username cannot be blank."});}},{"id":"loginform-password","name":"password","container":".field-loginform-password","input":"#loginform-password","error":".text-danger","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Password cannot be blank."});}}], {"errorCssClass":"has-danger"});
});</script></body>
</html>
