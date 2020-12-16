[<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Buyingincents">
<meta name="author" content="">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<title>SignUp</title>
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

{{ View::make('usernavigation')}}


<!-- Product  Content -->
<div class="container-fluid" id="login">
<div class="row">
<div class="col-lg-12 text-center">
<h3>Signup</h3>
<h5>Signup here for <b>Free</b></h5>
</div>
<div class="col-lg-4 col-lg-offset-4">
<div class="panel panel-default">
<div class="panel-body">
<form id="form-signsup" action="/site/signup" method="post">
<div class="form-group field-user-user_name required">
<label class="control-label" for="user-user_name">Full Name</label>
<input type="text" id="user-user_name" class="form-control" name="User[user_name]" maxlength="255" placeholder="Full Name" aria-required="true">

<div class="help-block"></div>
</div>
<div class="form-group field-user-contact_no required">
<label class="control-label" for="user-contact_no">Phone Number</label>
<input type="text" id="user-contact_no" class="form-control" name="User[contact_no]" maxlength="11" placeholder="Phone Number" aria-required="true">

<div class="help-block"></div>
</div>
<div class="form-group field-user-city_id required">
<label class="control-label" for="user-city_id">City</label>
<select id="user-city_id" class="form-control" name="User[city_id]" data-live-search="true" data-width="100%" aria-required="true">
<option value="">Please Select City</option>
<option value="3">NSW Sydney</option>
<option value="4">W.A Perth</option>
<option value="5">VIC Melbourne </option>
<option value="6">S.A Adelaide</option>
<option value="7">QLD Brisbane</option>
<option value="8">TAS Hobart</option>
<option value="9">NT Dawrin</option>
</select>

<div class="help-block"></div>
</div>
<div class="form-group field-user-email required">
<label class="control-label" for="user-email">Email</label>
<input type="text" id="user-email" class="form-control" name="User[email]" maxlength="255" placeholder="Email" aria-required="true">

<div class="help-block"></div>
</div>
<div class="form-group field-user-password required">
<label class="control-label" for="user-password">Password</label>
<input type="password" id="user-password" class="form-control" name="User[password]" maxlength="255" placeholder="Password" aria-required="true">

<div class="help-block"></div>
</div>
<div class="form-group field-user-password_repeat required">
<label class="control-label" for="user-password_repeat">Confirm Password</label>
<input type="password" id="user-password_repeat" class="form-control" name="User[password_repeat]" placeholder="Confirm Password" aria-required="true">

<div class="help-block"></div>
</div>
<div class="form-group">
<button type="submit" class="btn btn-success">Signup</button>                    </div>

</form><span class="btn btn-default btn-block donthave-btn" >Have an account? <b>
    <a href="login">Login here</a></b></span>
</div>
</div>
</div>
</div>
</div>
<!-- /.Product  container -->  
{{ View::make('footer')}}



<script src="/assets/caa52146/yii.validation.js"></script>
<script src="/assets/caa52146/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(function ($) {
jQuery('#form-signsup').yiiActiveForm([{"id":"user-user_name","name":"user_name","container":".field-user-user_name","input":"#user-user_name","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Full Name cannot be blank."});yii.validation.string(value, messages, {"message":"Full Name must be a string.","max":255,"tooLong":"Full Name should contain at most 255 characters.","skipOnEmpty":1});}},{"id":"user-contact_no","name":"contact_no","container":".field-user-contact_no","input":"#user-contact_no","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Phone Number cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Phone number should be numeric","skipOnEmpty":1});yii.validation.string(value, messages, {"message":"Phone Number must be a string.","min":9,"tooShort":"Phone number must be greater than 8 digit.","max":11,"tooLong":"Phone number must be less than 12 digit.","skipOnEmpty":1});}},{"id":"user-city_id","name":"city_id","container":".field-user-city_id","input":"#user-city_id","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"City cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"City must be an integer.","skipOnEmpty":1});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Phone number should be numeric","skipOnEmpty":1});}},{"id":"user-email","name":"email","container":".field-user-email","input":"#user-email","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Email cannot be blank."});yii.validation.string(value, messages, {"message":"Email must be a string.","max":255,"tooLong":"Email should contain at most 255 characters.","skipOnEmpty":1});yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Email is not a valid email address.","enableIDN":false,"skipOnEmpty":1});}},{"id":"user-password","name":"password","container":".field-user-password","input":"#user-password","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Password must be a string.","max":255,"tooLong":"Password should contain at most 255 characters.","skipOnEmpty":1});yii.validation.required(value, messages, {"message":"Password cannot be blank."});yii.validation.string(value, messages, {"message":"Password must be a string.","min":6,"tooShort":"Password should contain at least 6 characters.","skipOnEmpty":1});}},{"id":"user-password_repeat","name":"password_repeat","container":".field-user-password_repeat","input":"#user-password_repeat","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Confirm Password cannot be blank."});yii.validation.compare(value, messages, {"operator":"==","type":"string","compareAttribute":"user-password","skipOnEmpty":1,"message":"Password don't match"});}}], []);
jQuery('#w0').yiiActiveForm([], []);
jQuery('#w1').yiiActiveForm([], []);
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
