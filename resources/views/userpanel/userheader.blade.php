
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Buyingincents">
<meta name="author" content="">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<title>UserHeader</title>
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
<li class=""><a href="/userpanel">Home</a></li>
<li class=""><a href="user_categorypanelmaster">Category</a></li>
<li class=""><a href="purchasecredit">Purchase Credit</a></li>
<li class=""><a href="/purchase/sell-product">My Items</a></li>
<li class="active"><a href="blog">Blogs</a></li>
<li class=""><a href="contact">Contact Us</a></li>
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
<a href="#" data-toggle="modal" data-target="#product-up" id="upload_product_icon">
<span class="badge blue-badge"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</span>
</a>
</li>
<li>
<a href="#" data-toggle="dropdown" class="fs18">
<span class="badge badge-notify" id="notification_count"></span>
<i class="fa fa-bell" aria-hidden="true"></i>
</a>

<ul class="dropdown-menu notify-drop" id="notifiction-box">
<div class="arrow-up"></div>
<div class="notify-drop-title">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6 top_notification_icon">Notifications</div>
<div class="col-md-6 col-sm-6 col-xs-6 " style="text-align: right">
<a href="/site/notification"><small class="gray">Show All</small></a>
</div>
</div>
</div>
<!-- end notify title -->
<!-- notify content -->
<div class="drop-content" id="notification_list">
</div>
</ul>
</li>
<li>
<a href="/product/wish-list" class="fs18">
<i class="fa fa-heart" aria-hidden="true"></i>
</a>
</li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
<img src="userpanel/images/default.png" alt="" width="28px" height="28px" class="img-circle marr5 header_profile_image"><span class="marr5 hidden">waqas</span>
<i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-user">
<li><a href="/user/view"><i class="fa fa-user fa-fw"></i> User Profile</a>
</li>
<li><a href="/user/change-password"><i class="fa fa-key fa-fw"></i> Change Password</a>
</li>

<li class="divider"></li>
<li><a href="/site/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
</li>
</ul>
</div>
</nav>
<!-- Navigation End-->

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

<style type="text/css">
.empty{
text-align: center;
}   
</style>
<!-- Product  Content --> 


  





<!-- upload product -->
<div id="product-up" class="modal fade" role="dialog">
<div class="modal-dialog" style="top:30px">
<div class="row" id="loader_footer" style="position:  absolute;top: 0;height:  100%;width: 100%;z-index: 105;left: 0;background-color:  rgba(0,0,0,0.5);display: none;">
<div class="col-lg-12 col-md-6 col-sm-6" style="position:  relative;text-align: center;top: 40%">
<img src="/web/custom_theme/img/Rolling.gif" >
</div>
</div>

<!-- upload product-->
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

<div class="form-group">
<div class="form-group field-product-price required">
<label class="control-label" for="product-price">Price</label>
<input type="text" id="product-price" class="form-control" name="Product[price]" placeholder="Price" aria-required="true">

<div class="help-block"></div>
</div>                </div>
<div class="form-group">
<div class="form-group field-product-category_id required">
<label class="control-label" for="product-category_id">Select Category</label>
<select id="product-category_id" class="form-control" name="Product[category_id]" aria-required="true">
<option value="">Please Select Category</option>
<option value="1">Fashion</option>
<option value="2">Electronic</option>
<option value="3">Appliancies</option>
<option value="7">Auto</option>
<option value="8">Books</option>
<option value="10">Travel</option>
<option value="11">Gift/Fuel Cards </option>
<option value="18">Toys &amp; Media</option>
<option value="20">Home &amp; Garden equipment</option>
</select>

<div class="help-block"></div>
</div>                </div>
<div class="form-group">
<div class="form-group field-product-sub_category_id required">
<label class="control-label" for="product-sub_category_id">Select Sub-Category</label>
<select id="product-sub_category_id" class="form-control" name="Product[sub_category_id]" aria-required="true">
<option value="">Please Select Sub-Category</option>
<option value="14">Clothing</option>
<option value="15">Small Kitchen Appliances</option>
<option value="19">Sofas &amp; Couches</option>
<option value="20">T.V. &amp; Entertainment Units</option>
<option value="21">Study Tables</option>
<option value="22">Motorbike Accessories &amp; Parts</option>
<option value="23">Car Accessories</option>
<option value="24">Fiction Books</option>
<option value="25">Editor&#039;s Corner</option>
<option value="27">Children&#039;s Books</option>
<option value="29">Cricket</option>
<option value="31">Cycling</option>
<option value="32">Overses</option>
<option value="35">Video Games, Consoles &amp; Accessories</option>
<option value="38">Mobile Phones &amp; Accessories</option>
<option value="39">Women&#039;s</option>
<option value="40">Men&#039;s</option>
<option value="41">Handbags &amp; Accessories</option>
<option value="42">Shoes</option>
<option value="43">Health &amp; Beauty</option>
<option value="44">Jewellery &amp; Watches</option>
<option value="45">Boats</option>
<option value="46">Cars</option>
<option value="47">Boats Parts &amp; Accessories</option>
<option value="48">Cars, Truck Parts &amp; Accessories</option>
<option value="49">Motorcycle Parts &amp; Accessories</option>
<option value="52">Computers &amp; Tablets</option>
<option value="53">GPS &amp; Other Electronics</option>
<option value="54">TV &amp; Home Entertainment</option>
<option value="56">Wine</option>
<option value="57">Spirits &amp; Liquers</option>
<option value="58">Health Food</option>
<option value="59">Beer &amp; Cider</option>
<option value="60">Baby Safety</option>
<option value="62">Make Up</option>
<option value="63">Prams, Strollers &amp; Accessories</option>
<option value="64">Skin Care</option>
<option value="65">Hair Care</option>
<option value="66">Nerf</option>
<option value="67">Star wars</option>
<option value="68">Marvel</option>
<option value="69">Fisher Price </option>
<option value="70">Toys &amp; Others </option>
<option value="71">Radio Control Toys </option>
<option value="72">Action Figures</option>
<option value="73">Drones</option>
<option value="74">R.C Cars/Trucks</option>
<option value="75">Audio</option>
<option value="76">Fuel cards</option>
<option value="77">Interstate</option>
<option value="78">Gift Cards</option>
<option value="80">General interest</option>
<option value="81">House Equipment</option>
<option value="82">Sprits</option>
<option value="83">Outdoor/Garage </option>
<option value="84">White Goods/ kitchen appliances</option>
</select>

<div class="help-block"></div>
</div>                </div>

<div class="form-group">
<div class="form-group field-product-expiry_date required">
<label class="control-label" for="product-expiry_date">Expiry Date</label>
&nbsp;
<span style="color: gray;font-size: 13px;">Example: How long would you like Auction For?</span>
<div class="form-group field-product-expiry_date required">

<input type="text" id="product-expiry_date" class="form-control" name="Product[expiry_date]" placeholder="Date" aria-required="true">

<div class="help-block"></div>
</div>                    <div class="help-block" id="expiry_date_error" style="color: #a94442"></div>
</div>                 
</div>


<!-- Product upload Modal -->   

<script type="text/javascript">
$(document).ready(function() { 

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


function readURL(input,imageid,event) {
if (input.files && input.files[0]) {

var file = event.target.files[0];

if(file.type.match(/image.*/)) {

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
</html>
