
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Buyingincents">
<meta name="author" content="">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<title>Login</title>
<link href="{{asset('usercategory/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset ('usercategory/css/buyingincents.css') }}" rel="stylesheet">
<link href="{{asset ('usercategory/css/all-ie-only.css') }}" rel="stylesheet">
<link href=" {{asset ('usercategory/css/owl.carousel.min.css') }} " rel="stylesheet">
<link href="{{asset ('usercategory/css/owl.theme.default.min.css')}} " rel="stylesheet">
<link href="{{asset ('usercategory/css/xzoom.css')}}" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.css" rel="stylesheet">
<link href="{{ asset ('css/jquery-confirm.css') }} " rel="stylesheet">
<link href="{{asset ('css/jquery.toast.css') }} " rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script src="{{asset('usercategory/js/jquery.js') }}"></script>
<script src="{{asset ('usercategory/js/yii.js') }} "></script>
<script src="{{asset ('usercategory/js/bootstrap.js')}}  "></script>
<script src="{{asset ('usercategory/js/owl.carousel.js')}}"></script>
<script src="{{asset('usercategory/js/xzoom.min.js')}} "></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.js"></script>
<script src="{{asset ('usercategory/js/jquery-confirm.js')}} "></script>
<script src="{{asset ('usercategory/js/jquery.toast.js')}} "></script>    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116411718-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-116411718-1');
</script>
<style type="text/css">
form div.required label.control-label:after {
content:" * ";
color:red;
}
.alert{
margin-top: 53px;
margin-bottom: 0;
}
#category-page{
min-height: 600px;
}
.empty{
text-align: center;
font-size: 24px; 
}
</style>
</head>
<body>

<!-- Navigation -->


{{ View::make('usernavigation')}}




<!-- Product  Content -->
<div class="container-fluid" id="login">
<div class="row">
<div class="col-lg-12 text-center">
<h3>Login</h3>
</div>
<div class="col-lg-4 col-lg-offset-4">
<div class="panel panel-default">
<div class="panel-body">

<!-- Form Start -->

<form  action="login" method="POST" id="w0">  
                 
<div class="form-group">  
@csrf  
<span class="label">Email ID</span>
<input type="text" class="form-control" name="email" value="" required>
</div>
<div class="form-group">  
<span class="label">Password</span>
<input type="password" class="form-control" name="password" value="" required>
</div>
<div class="form-group">
<span style="color: #dd4b39;">
</span>
</div>
<div class="form-group"> 
<a class="label pull-right padd-bottom" href="/site/forgot-password">Forgot Password?</a>                       
</div>
<div class="form-group">  
<button type="submit" class="btn btn-primary btn-block login-btn" name="login-button">Login</button>                       
</div>

</form> 
<!-- Form end -->

<hr class="hr-text" data-content="OR">

<!--  <button type="button" class="btn btn-primary btn-block fb-btn"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Login with Facebook</button> -->

<a id="loginBtn" class="btn btn-primary btn-block fb-btn" href="javascript:void(0)">
<i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Login with Facebook</a>
<span type="button" class="btn btn-default btn-block donthave-btn" >Don't have account yet? 
<b><a href="signup">Sign up here</a></b></span>

</div>
</div>
</div>
</div>

</div>
<!-- /.Product  container -->

{{ View::make('footer')}}

<script type="text/javascript">
function getUserData() {
FB.api('/me', function(response) {
if(response.id != ''){
var url = "/site/facebook-profile"+"?id="+response.id+"&name="+response.name;
window.location.href = url;
}else{
alert("Something went wrong");
}
});
}
window.fbAsyncInit = function() {
//SDK loaded, initialize it
FB.init({
appId      : '814331822104124',
xfbml      : true,
version    : 'v2.12'
});


};

//load the JavaScript SDK
(function(d, s, id){
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) {return;}
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.com/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

//add event listener to login button
document.getElementById('loginBtn').addEventListener('click', function() {
//do the login
FB.login(function(response) {
if (response.authResponse) {
//user just authorized your app
//document.getElementById('loginBtn').style.display = 'none';
getUserData();
}
}, {scope: 'email,public_profile', return_scopes: true});
}, false);    
</script>



<script src="/assets/caa52146/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(function ($) {
jQuery('#w0').yiiActiveForm([], []);
jQuery('#w1').yiiActiveForm([], []);
jQuery('#w2').yiiActiveForm([], []);
});</script>
<script>
$('.owl-carousel').owlCarousel({
loop:true,
margin:10,
responsiveClass:true,
items:1,
autoplay:true,
autoplaySpeed: 1500,
autoplayHoverPause:false
})

$(document).ready(function(){
var submitIcon = $('.searchbox-icon');
var inputBox = $('.searchbox-input');
var searchBox = $('.searchbox');
var isOpen = false;

var search = '';
if(search != ''){
inputBox.val(search);
searchBox.addClass('searchbox-open');
inputBox.focus();
isOpen = true;
}

submitIcon.click(function(){
if(isOpen == false){
searchBox.addClass('searchbox-open');
inputBox.focus();
isOpen = true;
} else {
searchBox.removeClass('searchbox-open');
inputBox.focusout();
isOpen = false;
}
});  
submitIcon.mouseup(function(){
return false;
});
searchBox.mouseup(function(){
return false;
});
$(document).mouseup(function(){
if(isOpen == true){
$('.searchbox-icon').css('display','block');
submitIcon.click();
}
});
});

function buttonUp(){
var inputVal = $('.searchbox-input').val();
inputVal = $.trim(inputVal).length;
if( inputVal !== 0){
$('.searchbox-icon').css('display','none');
} else {
$('.searchbox-input').val('');
$('.searchbox-icon').css('display','block');
}
}

$(document).ready(function(){
$(window).scroll(function () {
if ($(this).scrollTop() > 50) {
$('#back-to-top').fadeIn();
} else {
$('#back-to-top').fadeOut();
}
});
// scroll body to 0px on click
$('#back-to-top').click(function () {
$('#back-to-top').tooltip('hide');
$('body,html').animate({
scrollTop: 0
}, 800);
return false;
});

$('#back-to-top').tooltip('show');

});
</script>
<script type="text/javascript">
$(function () {
$("a.single_image").fancybox();
});
</script>

<script>
(function ($) {
$(document).ready(function() {
$('.xzoom, .xzoom-gallery').xzoom({position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden'});

var isTouchSupported = 'ontouchstart' in window;

if (isTouchSupported) {
//If touch device
$('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function(){
var xzoom = $(this).data('xzoom');
xzoom.eventunbind();
});

$('.xzoom, .xzoom2, .xzoom3').each(function() {
var xzoom = $(this).data('xzoom');
$(this).hammer().on("tap", function(event) {
event.pageX = event.gesture.center.pageX;
event.pageY = event.gesture.center.pageY;
var s = 1, ls;

xzoom.eventmove = function(element) {
element.hammer().on('drag', function(event) {
event.pageX = event.gesture.center.pageX;
event.pageY = event.gesture.center.pageY;
xzoom.movezoom(event);
event.gesture.preventDefault();
});
}

xzoom.eventleave = function(element) {
element.hammer().on('tap', function(event) {
xzoom.closezoom();
});
}
xzoom.openzoom(event);
});
});

$('.xzoom4').each(function() {
var xzoom = $(this).data('xzoom');
$(this).hammer().on("tap", function(event) {
event.pageX = event.gesture.center.pageX;
event.pageY = event.gesture.center.pageY;
var s = 1, ls;

xzoom.eventmove = function(element) {
element.hammer().on('drag', function(event) {
event.pageX = event.gesture.center.pageX;
event.pageY = event.gesture.center.pageY;
xzoom.movezoom(event);
event.gesture.preventDefault();
});
}

var counter = 0;
xzoom.eventclick = function(element) {
element.hammer().on('tap', function() {
counter++;
if (counter == 1) setTimeout(openfancy,300);
event.gesture.preventDefault();
});
}

function openfancy() {
if (counter == 2) {
xzoom.closezoom();
$.fancybox.open(xzoom.gallery().cgallery);
} else {
xzoom.closezoom();
}
counter = 0;
}
xzoom.openzoom(event);
});
});

$('.xzoom5').each(function() {
var xzoom = $(this).data('xzoom');
$(this).hammer().on("tap", function(event) {
event.pageX = event.gesture.center.pageX;
event.pageY = event.gesture.center.pageY;
var s = 1, ls;

xzoom.eventmove = function(element) {
element.hammer().on('drag', function(event) {
event.pageX = event.gesture.center.pageX;
event.pageY = event.gesture.center.pageY;
xzoom.movezoom(event);
event.gesture.preventDefault();
});
}

var counter = 0;
xzoom.eventclick = function(element) {
element.hammer().on('tap', function() {
counter++;
if (counter == 1) setTimeout(openmagnific,300);
event.gesture.preventDefault();
});
}

function openmagnific() {
if (counter == 2) {
xzoom.closezoom();
var gallery = xzoom.gallery().cgallery;
var i, images = new Array();
for (i in gallery) {
images[i] = {src: gallery[i]};
}
$.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
} else {
xzoom.closezoom();
}
counter = 0;
}
xzoom.openzoom(event);
});
});

} else {
//If not touch device

//Integration with fancybox plugin
$('#xzoom-fancy').bind('click', function(event) {
var xzoom = $(this).data('xzoom');
xzoom.closezoom();
$.fancybox.open(xzoom.gallery().cgallery, {padding: 0, helpers: {overlay: {locked: false}}});
event.preventDefault();
});

//Integration with magnific popup plugin
$('#xzoom-magnific').bind('click', function(event) {
var xzoom = $(this).data('xzoom');
xzoom.closezoom();
var gallery = xzoom.gallery().cgallery;
var i, images = new Array();
for (i in gallery) {
images[i] = {src: gallery[i]};
}
$.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
event.preventDefault();
});
}
});
})(jQuery);
</script>
</body> 
</html>
