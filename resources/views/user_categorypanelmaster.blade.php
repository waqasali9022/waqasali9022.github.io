
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Buyingincents">
<meta name="author" content="">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<title>Categories</title>
<link href="{{asset('usercategory/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{asset ('usercategory/css/buyingincents.css') }} " rel="stylesheet">
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
<!-- Navigation -->
<nav class="navbar navbar-default nav-white navbar-fixed-top">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="/" class="navbar-brand">
<img src="userpanel/images/logo_header.png" style="!width: 170px;!height:46px;!margin-top: -12px">
</a>
</div>
<!-- Collection of nav links and other content for toggling -->
<div id="navbarCollapse" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class=""><a href="/">Home</a></li>
<li class="active"><a href="/category/index">Category</a></li>
<li class=""><a href="blog">Blogs</a></li>
</ul>
<ul class="nav navbar-nav navbar-right" style="margin-right: 0;">
<li class="hidden-lg hidden-md">
<form id="w0" action="/category/index" method="post">                  
  <div class="col-lg-12">
<input type="text" placeholder="Search" class="form-control" value="">
</div>
</form> 
</li>    
<li class="hidden-xs hidden-sm">
<form id="w1" class="searchbox" action="/category/index" method="post">                    <input type="search" placeholder="Search" value="" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
<input type="submit" class="searchbox-submit" value="GO">
<span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
</form>            </li>
<li>
<a href="login">
<span class="badge blue-badge">Login</span>
</a>
</li>
<li>
<a href="signup">
<span class="badge blue-badge">Sign Up</span>
</a>
</li>
</ul>
</div>
</nav>
<!-- Navigation End-->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style type="text/css">
.ui-state-default, .ui-widget-content .ui-state-default{
border-radius: 100%;
outline: 0;
}
.ui-widget-header{
background: #0085d4;
}
.md-checkbox {
position: relative;
margin: 16px 0;
}
.md-checkbox label {
cursor: pointer;
font-weight: 100;
}
.md-checkbox label:before, .md-checkbox label:after {
content: "";
position: absolute;
left: 0;
top: 0;
}
.md-checkbox label:before {
width: 20px;
height: 20px;
background: #fff;
border: 2px solid rgba(0, 0, 0, 0.54);
border-radius: 2px;
cursor: pointer;
transition: background .3s;
}
.md-checkbox input[type="checkbox"] {
outline: 0;
margin-right: 10px;
}
.md-checkbox input[type="checkbox"]:checked + label:before {
background: #337ab7;
border: none;
}
.md-checkbox input[type="checkbox"]:checked + label:after {
transform: rotate(-45deg);
top: 5px;
left: 4px;
width: 12px;
height: 6px;
border: 2px solid #fff;
border-top-style: none;
border-right-style: none;
}
</style>

<div class="container top-filters">
<div class="row">
<div class="col-lg-12 owl-carousel text-center">
<!-- <div class="item cat-active">
<a href="#tab_a" data-toggle="pill">
<img src="/web/custom_theme/img/electronic-ic.png" alt="" class="item-img">
<p><small>Electronic</small></p>
</a>
</div> -->
<div class="item cat-active">
<a href="user_categorypanelmaster" >
<!-- <img src="/web/custom_theme/img/electronic-ic.png" alt="" class="item-img"> -->
<span class="item-img"><i class="fa fa-tags fa-2x" aria-hidden="true"></i></span>
<p><small>All</small></p>
</a>
</div>
<div class="item ">
<a href="user_categorypanelmaster" >
<img src="/admin/uploads/images/category/ktihrgt8g3cranj7zw6w57t6o.png" alt="" class="item-img">
<p><small>Fashion</small></p>
</a>
</div>    
<div class="item ">
<a href="user_categorypanelmaster" >
<img src="/admin/uploads/images/category/lk3rbv6a1jpigzuoh5cv46rch.png" alt="" class="item-img">
<p><small>Appliancies</small></p>
</a>
</div>    
<div class="item ">
<a href="user_categorypanelmaster" >
<img src="/admin/uploads/images/category/qbj8mr6r9j37qpa4vy1nzd1zs.png" alt="" class="item-img">
<p><small>Auto</small></p>
</a>
</div>    
<div class="item ">
<a href="user_categorypanelmaster" >
<img src="/admin/uploads/images/category/pvre8poljhek4x4aksm7c0liy.png" alt="" class="item-img">
<p><small>Books</small></p>
</a>
</div>    
<div class="item ">
<a href="user_categorypanelmaster" >
<img src="/admin/uploads/images/category/vcq2fi35k1387a2mrj0s3qir5.png" alt="" class="item-img">
<p><small>Electronic</small></p>
</a>
</div>    
<div class="item ">
<a href="user_categorypanelmaster" >
<img src="/admin/uploads/images/category/98rdcka949gcg200ly79za0lm.png" alt="" class="item-img">
<p><small>Travel</small></p>
</a>
</div>    
<div class="item ">
<a href="user_categorypanelmaster" >
<img src="/admin/uploads/images/category/iv7y5bxbppmnosnyaj690z2mw.jpg" alt="" class="item-img">
<p><small>Gift/Fuel Cards </small></p>
</a>
</div>    
<div class="item ">
<a href="user_categorypanelmaster" >
<img src="/admin/uploads/images/category/mwui4ypkn4tolkv2h8ehtsr5p.png" alt="" class="item-img">
<p><small>Toys & Media</small></p>
</a>
</div>    
<div class="item ">
<a href="user_categorypanelmaster" >
<img src="/admin/uploads/images/category/u69i3iwoon8i6ncd59awxkmb3.jpg" alt="" class="item-img">
<p><small>Home & Garden equipment</small></p>
</a>
</div>    

</div>
</div>

</div>

<!-- Product  Content -->
<div class="container-fluid" id="category-page">
<div class="row">
<div class="col-lg-3">
<div class="panel panel-default">
<div class="panel-heading">
Quick Link <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
</div>
<div class="panel-body">
<div class="list-group">
<a href="/category/index?link=today" class="list-group-item ">Today's Deal</a>
<a href="/category/index?link=mint" class="list-group-item ">Last Minutes Bids</a>
<a href="/category/index?link=end" class="list-group-item ">Items Ending Soon</a>
</div>
</div>    
</div> 

<div class="panel panel-default">
<div class="panel-heading">Filter <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span></div>
<div class="panel-body">        
<div class="form-group">
<p>
<label for="amount">Price:</label>
<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
</p>
<div id="slider-range"></div>
</div>
<div class="form-group">
<div class="row">
<div class="col-lg-6">    
<input type="text" name="min" id="minval" class="form-control">    
</div>
<div class="col-lg-6">
<input type="text" name="" id="maxval" class="form-control">
</div>
</div>    
</div>
<hr>
<div class="form-group"> 
<label class="control-label" for="product-product_type">Product Type</label>
<select id="product-product_type" class="form-control" name="product_type" style="width:30%" aria-required="true" aria-invalid="false">
<option value="">All</option>
<option value="N" >New</option>
<option value="U" >Used</option>
</select>
</div>

<hr>
<div class="form-group">
<span class="label">Product Listed Time</span>
<ul style="padding: 0;list-style: none">
<li>
<div class="md-checkbox">
<input id="12h" type="checkbox" value="12h"  >
<label for="12h">12 Hours</label>
</div>
</li>
<li>
<div class="md-checkbox">
<input id="24h" type="checkbox" value="24h" >
<label for="24h">24 Hours</label>
</div>
</li>
<li>
<div class="md-checkbox">
<input id="7d" type="checkbox" value="7d" >
<label for="7d">7 Days</label>
</div>
</li>
<li>
<div class="md-checkbox">
<input id="30d" type="checkbox" value="30d" >
<label for="30d">30 Days</label>
</div>
</li>
<li>
<div class="md-checkbox">
<input id="all" type="checkbox" value="all" >
<label for="all">All</label>
</div>
</li>
</ul>
</div>
<div class="form-group">
<div class="row">
<div class="col-lg-6">  
<a href="javascript::void(0)" class="btn btn-block btn-info" id="apply_filter" style="background: #0083db">Apply</a>
</div>
<div class="col-lg-6">
<a href="/category/index?max=1&filter_checkbox=" class="btn btn-block btn-default">Clear</a> 
</div>
</div>    
</div>
</div>
</div> 

</div>

<div class="col-lg-8">
<div id="list-wrapper" class="row"><div class="empty">No results found.</div></div>            <!-- <div class="col-lg-2 col-lg-offset-5">
<button  class="btn btn-white btn-block">More</button>
</div> -->
</div>
</div>
</div>
<!-- /.Product  container -->

<script>
$('.owl-carousel').owlCarousel({
loop:false,
margin:10,
responsiveClass:true,
nav:true,
navText: ["<i class='fa fa-chevron-left' aria-hidden='true'></i>","<i class='fa fa-chevron-right' aria-hidden='true'></i>"],
responsive:{
0:{
items:4
},
600:{
items:3
},
1000:{
items:9
}
}

})
$(document).on('click', '.panel-heading span.clickable', function(e){
var $this = $(this);
if(!$this.hasClass('panel-collapsed')) {
$this.parents('.panel').find('.panel-body').slideUp();
$this.addClass('panel-collapsed');
$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
} else {
$this.parents('.panel').find('.panel-body').slideDown();
$this.removeClass('panel-collapsed');
$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
}
})

$(document).ready(function(){
$(".dropdown").hover(
function() { $('.dropdown-menu', this).stop().fadeIn("fast");
},
function() { $('.dropdown-menu', this).stop().fadeOut("fast");
});
});
</script>

<script>
$(document).ready(function(){
$("#sub_category_data").on('change', function(){
/*var cat = "";
var url = "";
window.location.href = url +"?cat="+cat+"&sub_cat="+$(this).val();*/
var url = "/category/index";
window.location.href = url +"&sub_cat="+$(this).val();
});
});

$(document).on('click', '#wish_list', function(e){
var p = $(this).data("product");
if(p != ''){
$(this).prop("disabled",true);
$.get("/category/wish-list", { p: p })
.done(function( data ) {
//console.log(data);
data = JSON.parse(data);
if(data.status != 0) {
if(data.status == 1){
$("#wish_list_"+data.hert_id).removeClass('fa fa-heart-o wish-list-right');
$("#wish_list_"+data.hert_id).addClass('fa fa-heart wish-list-right'); 
$("#wish_list_"+data.hert_id).css("color", "red");   
}else{
$("#wish_list_"+data.hert_id).removeClass('fa fa-heart wish-list-right');
$("#wish_list_"+data.hert_id).addClass('fa fa-heart-o wish-list-right'); 
$("#wish_list_"+data.hert_id).css("color", ""); 
}

} else {
alert(data.msg);
}    
});
$(this).prop("disabled",false);
}
});
</script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$( function() {

var max_value = "1";
//var min_value = "";
var min_value = 1;
//var req_min_value = "";
var req_min_value = "1";  
var req_max_value = "1";

$( "#slider-range" ).slider({
range: true,
min: 1,
max: max_value,
values: [ req_min_value, req_max_value ],
slide: function( event, ui ) {
$( "#minval" ).val(ui.values[ 0 ]);
$("#maxval").val(ui.values[ 1 ]);
}
});

$( "#minval" ).val($("#slider-range").slider("values", 0 ) );
$("#maxval").val($( "#slider-range" ).slider("values", 1));
});

$(document).on('click', '#apply_filter', function(e){
var checkbox = [];
$.each($("input[type='checkbox']:checked"), function(){            
checkbox.push($(this).val());
});

var url_filter = "/category/index?min=&max=&filter_checkbox=";
var newURL = updateURLParameter(url_filter, 'min', $("#minval").val());
newURL = updateURLParameter(newURL, 'max', $("#maxval").val());
newURL = updateURLParameter(newURL, 'product_type', $("#product-product_type").val());
newURL = updateURLParameter(newURL, 'filter_checkbox', checkbox.join(","));
window.location.href = newURL;
/*if (url_filter.toLowerCase().indexOf("index?") > 0){
window.location.href = url_filter +"&min="+$( "#minval" ).val()+"&max="+$( "#maxval" ).val()+"&filter_checkbox="+checkbox.join(", ");
}else{
window.location.href = url_filter +"?min="+$( "#minval" ).val()+"&max="+$( "#maxval" ).val()+"&filter_checkbox="+checkbox.join(", ");
}*/
});  

function updateURLParameter(url, param, paramVal){
var newAdditionalURL = "";
var tempArray = url.split("?");
var baseURL = tempArray[0];
var additionalURL = tempArray[1];
var temp = "";
if (additionalURL) {
tempArray = additionalURL.split("&");
for (var i=0; i<tempArray.length; i++){
if(tempArray[i].split('=')[0] != param){
newAdditionalURL += temp + tempArray[i];
temp = "&";
}
}
}
var rows_txt = temp + "" + param + "=" + paramVal;
return baseURL + "?" + newAdditionalURL + rows_txt;
}


</script>  
<!-- footer start -->  

{{View::make('footer')}}
<!-- footer end -->  


<a id="back-to-top" href="#" class="btn btn-primary btn-sm back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

</body> 
<script src="/assets/caa52146/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(function ($) {
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
// $('.xzoom2, .xzoom-gallery2').xzoom({position: '#xzoom2-id', tint: '#ffa200'});
// $('.xzoom3, .xzoom-gallery3').xzoom({position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden'});
// $('.xzoom4, .xzoom-gallery4').xzoom({tint: '#006699', Xoffset: 15});
// $('.xzoom5, .xzoom-gallery5').xzoom({tint: '#006699', Xoffset: 15});

//Integration with hammer.js
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

</html>
