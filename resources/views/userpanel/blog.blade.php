
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Buyingincents">
<meta name="author" content="">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<title>Blogs</title>
<link href="{{asset('userpanel/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset ('userpanel/css/buyingincents.css') }}" rel="stylesheet">
<link href="{{asset ('userpanel/css/all-ie-only.css') }}" rel="stylesheet">
<link href=" {{asset ('userpanel/css/owl.carousel.min.css') }} " rel="stylesheet">
<link href="{{asset ('userpanel/css/owl.theme.default.min.css')}} " rel="stylesheet">
<link href="{{asset ('userpanel/css/xzoom.css')}}" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.css" rel="stylesheet">
<link href="{{ asset ('css/jquery-confirm.css') }} " rel="stylesheet">
<link href="{{asset ('css/jquery.toast.css') }} " rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script src="{{asset('userpanel/js/jquery.js') }}"></script>
<script src="{{asset ('userpanel/js/yii.js') }} "></script>
<script src="{{asset ('userpanel/js/bootstrap.js')}}  "></script>
<script src="{{asset ('userpanel/js/owl.carousel.js')}}"></script>
<script src="{{asset('userpanel/js/xzoom.min.js')}} "></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.js"></script>
<script src="{{asset ('userpanel/js/jquery-confirm.js')}} "></script>
<script src="{{asset ('userpanel/js/jquery.toast.js')}} "></script>    <!-- Global site tag (gtag.js) - Google Analytics -->
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
<!-- Navigation start-->

<!-- Navigation End-->



<!-- Product  Content --> 
@yeild('content')
<div>
<section  id="product-details-page" class="blog">
<div class="container">
<div class="row">
<div class="col-md-12" style="margin-top: 100px;">

<div id="list-wrapper"><div class="col-lg-6 blog-card-main">
<div class="col-lg-12 blog-card">
<div class="container-blog">
<a href="/site/blog-details?blog=Nw%253D%253D">
<img src="userpanel/images/1.jpeg" alt="" class="blog-img"> 
<div class="overlay">
<div class="text">Read More</div>
</div>
</a>
</div>

<div class="blog-data" >
<h3>Test </h3>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable Eng</p>
<i class="pull-right text-muted">21 Feb 2018 05:39 AM</i>
</div>
</div>
</div>
<div class="col-lg-6 blog-card-main">
<div class="col-lg-12 blog-card">
<div class="container-blog">
<a href="/site/blog-details?blog=Mw%253D%253D">
<img src="userpanel/images/2.jpeg" alt="" class="blog-img"> 
<div class="overlay">
<div class="text">Read More</div>
</div>
</a>
</div>

<div class="blog-data" >
<h3>Why do we use it? </h3>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable Eng</p>
<i class="pull-right text-muted">16 Jan 2018 11:36 AM</i>
</div>
</div>
</div>
<div class='col-lg-12' align='center'></div></div> 
</div>
</div>
</div>
</section>
</div>
<!-- /footer -->


{{ View::make('footer')}}
{{ View::make('userpanel.userheader')}}




<!-- /footer End -->
  



<a id="back-to-top" href="#" class="btn btn-primary btn-sm back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<!-- Product upload Modal -->
<div id="product-up" class="modal fade" role="dialog">
<div class="modal-dialog" style="top:30px">
<div class="row" id="loader_footer" style="position:  absolute;top: 0;height:  100%;width: 100%;z-index: 105;left: 0;background-color:  rgba(0,0,0,0.5);display: none;">
<div class="col-lg-12 col-md-6 col-sm-6" style="position:  relative;text-align: center;top: 40%">
<img src="/web/custom_theme/img/Rolling.gif" >
</div>
</div>

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title text-center">Upload Product</h4>
</div>
<form id="product-form" action="/product/create" method="post" enctype="multipart/form-data">        <div class="modal-body">
<div class="form-group"> 
<div class="form-group field-product-product_type required">
<label class="control-label" for="product-product_type">Product Type</label>
<select id="product-product_type" class="form-control" name="Product[product_type]" style="width:25%" aria-required="true">
<option value="">Please Type</option>
<option value="N">New</option>
<option value="U">Used</option>
</select>

<div class="help-block"></div>
</div>                </div>
<div class="form-group">
<label>Upload Images</label>
<div class="row">
<div class="col-lg-3 col-xs-6">
<div class="thumb" style="height: 129px;">
<img src="/web/custom_theme/img/placeholder.png" class="img-responsive userImgPreviewNew1" id="product_image_1" style="height: 129px;">
<div class="file-upload btn pro_pic">
<input type="hidden" name="Product[photo][0]" value="" id="product_image_1_photo">
<input type="file" class="upload error" name="Product[photo][0]" data-validation="mime size required" data-validation-allowing="jpg, png" data-validation-error-msg-required="No image selected" id="userImgPreviewNew1" style="border-color: rgb(185, 74, 72);" accept="image/*;capture=camera"> 
</div>  
<img id='img-upload' class="img-responsive userImgPreviewNew1"/> 
</div>
</div>
<div class="col-lg-3 col-xs-6">
<div class="thumb">
<img src="/web/custom_theme/img/placeholder.png" class="img-responsive userImgPreviewNew1" id="product_image_2" style="height: 129px;">
<div class="file-upload btn pro_pic">
<input type="hidden" name="Product[photo][1]" value="" id="product_image_2_photo">
<input type="file" class="upload error" name="Product[photo][1]" data-validation="mime size required" data-validation-allowing="jpg, png" data-validation-error-msg-required="No image selected" id="userImgPreviewNew2" style="border-color: rgb(185, 74, 72);" accept="image/*;capture=camera"> 
</div>   
</div>             
</div>
<div class="col-lg-3 col-xs-6">
<div class="thumb">
<img src="/web/custom_theme/img/placeholder.png" class="img-responsive userImgPreviewNew1" id="product_image_3" style="height: 129px;">
<div class="file-upload btn pro_pic">
<input type="hidden" name="Product[photo][2]" value="" id="product_image_3_photo">
<input type="file" class="upload error" name="Product[photo][2]" data-validation="mime size required" data-validation-allowing="jpg, png" data-validation-error-msg-required="No image selected" id="userImgPreviewNew3" style="border-color: rgb(185, 74, 72);" accept="image/*;capture=camera"> 
</div>   
</div>       
</div>
<div class="col-lg-3 col-xs-6">
<div class="thumb">
<img src="/web/custom_theme/img/placeholder.png" class="img-responsive userImgPreviewNew1" id="product_image_4" style="height: 129px;">
<div class="file-upload btn pro_pic">
<input type="hidden" name="Product[photo][3]" value="" id="product_image_4_photo">
<input type="file" class="upload error" name="Product[photo][3]" data-validation="mime size required" data-validation-allowing="jpg, png" data-validation-error-msg-required="No image selected" id="userImgPreviewNew4" style="border-color: rgb(185, 74, 72);" accept="image/*;capture=camera"> 
</div>   
</div>       
</div>
</div>
<div class="row">
<div class="help-block" id="photo_error" style="margin-left: 16px;color:#a94442"></div>
</div>
</div>
<div class="form-group"> 
<div class="form-group field-product-title required">
<label class="control-label" for="product-title">Title</label>
<input type="text" id="product-title" class="form-control" name="Product[title]" maxlength="30" placeholder="Title" aria-required="true">

<div class="help-block"></div>
</div>                </div>
<div class="form-group">
<div class="form-group field-product-description required">
<label class="control-label" for="product-description">Description</label>
<textarea id="product-description" class="form-control" name="Product[description]" placeholder="Description" aria-required="true"></textarea>

<div class="help-block"></div>
</div>                </div>


<!-- Product upload Modal -->   

<script type="text/javascript">
$(document).ready(function() { 
/*var $form = $("#product-form");
$form.on('submit', function(e) {
return $form.yiiActiveForm('submitForm');
}); 

$("#product-form-submit").on('click', function() { 
$form.submit();
});*/
$('#product-form').on('beforeSubmit', function(e) {
var form = $(this);
var formData = form.serialize();
//console.log(formData);
$("#photo_error").empty();
$("#max_price_error").empty();
$("#product-form-submit").prop("disabled",true);
$("#loader_footer").show();
$.ajax({
url: form.attr("action"),
type: form.attr("method"),
data: formData,
//dataType: 'text',
success: function (data) {
$("#loader_footer").hide();
data = JSON.parse(data);

//console.log(data.error.max_price)
if(data.status == 1) {
$.alert({
title: false,
content: 'Product added successfully',
buttons: {
ok: function () {
//location.reload();
window.location.href = "/purchase/sell-product";
},
}
});

} else {
$("#product-form-submit").prop("disabled",false);
if(data.error.photo){
$("#photo_error").empty();
$("#photo_error").html(data.error.photo[0]);
$("#photo_error").focus();
}else if(data.error.expiry_date){
$("#expiry_date_error").empty();
$("#expiry_date_error").html(data.error.expiry_date[0]);
$("#expiry_date_error").focus();
}else{
$.alert('Something went wrong');
}
}
},
error: function () {
$("#loader_footer").hide();
$("#product-form-submit").prop("disabled",false);
$.alert('Something went wrong');
}
});
}).on('submit', function(e){
e.preventDefault();
});
})    
</script>
<script>
$(document).ready(function(){
var date_input = $('input[name="Product[expiry_date]"]'); //our date input has the name "date"
var container = $('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
var options={
//format: 'yyyy-mm-dd',
format: 'dd-mm-yyyy',
container: container,
todayHighlight: true,
autoclose: true,
};
date_input.datepicker(options);

$("#product-category_id").on('change', function(){
$.get("/category/subcategory-lists", { cid: $(this).val() })
.done(function( data ) {
$( "select#product-sub_category_id" ).html( data ); 
//$('select#product-sub_category_id').selectpicker('refresh'); 
} );
});
});
</script>
<script type="text/javascript">
  

$(document).ready( function() {

/* Utility function to convert a canvas to a BLOB */
var dataURLToBlob = function(dataURL) {
var BASE64_MARKER = ';base64,';
if (dataURL.indexOf(BASE64_MARKER) == -1) {
var parts = dataURL.split(',');
var contentType = parts[0].split(':')[1];
var raw = parts[1];

return new Blob([raw], {type: contentType});
}

var parts = dataURL.split(BASE64_MARKER);
var contentType = parts[0].split(':')[1];
var raw = window.atob(parts[1]);
var rawLength = raw.length;

var uInt8Array = new Uint8Array(rawLength);

for (var i = 0; i < rawLength; ++i) {
uInt8Array[i] = raw.charCodeAt(i);
}

return new Blob([uInt8Array], {type: contentType});
}
/* End Utility function to convert a canvas to a BLOB      */

function readURL(input,imageid,event) {
if (input.files && input.files[0]) {
// Read in file
var file = event.target.files[0];
// Ensure it's an image
if(file.type.match(/image.*/)) {
//console.log('An image has been loaded');
// Load the image
var reader = new FileReader();
reader.onload = function (readerEvent) {
var image = new Image();
image.onload = function (imageEvent) {
// Resize the image
var canvas = document.createElement('canvas'),
max_size = 1024,// TODO : pull max size from a site config
width = image.width,
height = image.height;
if (width > height) {
if (width > max_size) {
height *= max_size / width;
width = max_size;
}
} else {
if (height > max_size) {
width *= max_size / height;
height = max_size;
}
}
canvas.width = width;
canvas.height = height;
canvas.getContext('2d').drawImage(image, 0, 0, width, height);
var dataUrl = canvas.toDataURL('image/jpeg');
$('#'+imageid).attr('src', dataUrl);
$("#loader_footer").show();
$.post("/product/image-upload", { image : dataUrl })
.done(function( data ) {
//$("#loader").hide();
$("#loader_footer").hide();
data = JSON.parse(data);
if(data.status != 0) {
$('#'+imageid+'_photo').val(data.image_value); 
}    
});

/*var resizedImage = dataURLToBlob(dataUrl);
console.log(resizedImage);
$.event.trigger({
type: "imageResized",
blob: resizedImage,
url: dataUrl
});*/
}
image.src = readerEvent.target.result;
}
reader.readAsDataURL(file);
}
}
}

$("#userImgPreviewNew1").change(function(event){
readURL(this,"product_image_1",event);
});  

$("#userImgPreviewNew2").change(function(event){
readURL(this,"product_image_2",event);
});

$("#userImgPreviewNew3").change(function(event){
readURL(this,"product_image_3",event);
});

$("#userImgPreviewNew4").change(function(event){
readURL(this,"product_image_4",event);
});   
});  
</script>
<script src="/assets/caa52146/yii.activeForm.js"></script>
<script src="/assets/caa52146/yii.validation.js"></script>
<script type="text/javascript">jQuery(function ($) {
jQuery('#w0').yiiActiveForm([], []);
jQuery('#w1').yiiActiveForm([], []);
jQuery('#product-form').yiiActiveForm([{"id":"product-product_type","name":"product_type","container":".field-product-product_type","input":"#product-product_type","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Product Type cannot be blank."});}},{"id":"product-title","name":"title","container":".field-product-title","input":"#product-title","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Title cannot be blank."});yii.validation.string(value, messages, {"message":"Title must be a string.","max":30,"tooLong":"Title should contain at most 30 characters.","skipOnEmpty":1});}},{"id":"product-description","name":"description","container":".field-product-description","input":"#product-description","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Description cannot be blank."});yii.validation.string(value, messages, {"message":"Description must be a string.","skipOnEmpty":1});}},{"id":"product-min_price","name":"min_price","container":".field-product-min_price","input":"#product-min_price","validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Min Price must be an integer.","skipOnEmpty":1});}},{"id":"product-max_price","name":"max_price","container":".field-product-max_price","input":"#product-max_price","validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Max Price must be an integer.","skipOnEmpty":1});}},{"id":"product-price","name":"price","container":".field-product-price","input":"#product-price","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Price cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?\s*$/,"message":"Price must be a number.","skipOnEmpty":1});}},{"id":"product-category_id","name":"category_id","container":".field-product-category_id","input":"#product-category_id","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Category cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Category must be an integer.","skipOnEmpty":1});}},{"id":"product-sub_category_id","name":"sub_category_id","container":".field-product-sub_category_id","input":"#product-sub_category_id","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Sub Category cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Sub Category must be an integer.","skipOnEmpty":1});}},{"id":"product-expiry_date","name":"expiry_date","container":".field-product-expiry_date","input":"#product-expiry_date","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Expiry Date cannot be blank."});}},{"id":"product-shipping_via","name":"shipping_via","container":".field-product-shipping_via","input":"#product-shipping_via","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Shipping Via cannot be blank."});}}], []);
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

<script>
$(document).ready(function(){
var old_count = "0";  
var notification_url = "/site/notification";
setInterval(function()
{
$.ajax({
type:'post',
url:'/site/checknotification?count='+old_count,
datatype:'html',
success:function(data)
{
var obj = $.parseJSON(data);
//console.log(obj);
if(obj.new_count > old_count)
{
old_count = obj.new_count;
$.toast({
heading: obj.message,
text: 'Click <a href="'+notification_url+'">here</a> to view more detail.',
position: 'top-right',
loaderBg:'#ff6849',
icon: 'success',
hideAfter: 10000, 
stack: 6
});  
}
$("#notification_count").empty();
if(obj.new_count > 0){
$("#notification_count").html(obj.new_count);
}
$("#notification_list").html(obj.html);
}
});
}, 5000);

});
</script>
</html>
