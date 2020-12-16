<?php


use Illuminate\Support\Facades\Route;

use App\Http\UsersController;


Route::get('/', function () {
    return view('welcom');
});



Route::post('login',[UsersController::class,'login']);
Route::view('login','userpanel.login');

Route::view('signup', 'signup');
Route::post('formSubmit', 'App\Http\Controllers\User@index'); 

Route::get('user_categorypanelmaster', 'App\Http\Controllers\User@user_categorypanel');


Route::view ('user_categorypanelmaster','user_categorypanelmaster');
Route::view ('mainhome','mainmasters');


Route::view ('city','adminpaneldasboard.city');
Route::view ('bidcost','dashboard.bidcost');

Route::view ('faq','dashboards.faq');

Route::view ('blog','userpanel.blog');
Route::view ('footer','footer');
/*
Route::view ('login','userpanel.login');
*/
Route::view ('contact','userpanel.contact');
Route::view ('userheader','userpanel.userheader');

Route::view ('purchasecredit','userpanel.purchasecredit');

/*admin panel route  */
Route::view ('admin','adminpanel.adminlogin');
Route::view ('dashboard','dashboards.dashboard');
Route::view ('inquiry','dashboards.inquiry');
Route::view ('bidcost','dashboards.bidcost');
Route::view ('changepassword','dashboards.changepassword');
Route::view ('create-bannerads','dashboards.create-bannerads');
Route::view ('create-blog','dashboards.create-blog');
Route::view ('create-creditplan','dashboards.create-creditplan');
Route::view ('create-subcategory','dashboards.create-subcategory');
Route::view ('createbidcost','dashboards.createbidcost');
Route::view ('createcity','dashboards.createcity');
Route::view ('faq','dashboards.faq');
Route::view ('user-inquiry','dashboards.user-inquiry');
Route::view ('manage-bannerads','dashboards.manage-bannerads');
Route::view ('manage-blog','dashboards.manage-blog');
Route::view ('manage-category','dashboards.manage-category');
Route::view ('addcategory','dashboards.addcategory');
Route::view ('manage-creditplan','dashboards.manage-creditplan');
Route::view ('manage-product','dashboards.manage-product');
Route::view ('manage-subcategory','dashboards.manage-subcategory');
Route::view ('manage-user','dashboards.manage-user');
Route::view ('Managecity','dashboards.Managecity');
Route::view ('managefaq','dashboards.managefaq');
Route::view ('notification','dashboards.notification');
Route::view ('payment-log','dashboards.payment-log');
Route::view ('product404','dashboards.product404');
Route::view ('generalsetting','dashboards.generalsetting');
Route::view ('updateprofile','dashboards.inquiry');
Route::view ('paypallogin','dashboards.paypallogin');























   



