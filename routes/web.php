<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//gọi các trang trong admin
Route::get('ViewContent_Admin',
	['as'=>'ViewContentAdmin',
	'uses'=>'Admin_Controller@ViewContent_Admin']);
Route::get('ViewProduct_Admin',
	['as'=>'ViewProductAdmin',
	'uses'=>'Admin_Controller@Select_Product']);
Route::get('ViewProductByType_Admin/{id}',
	['as'=>'ViewProductByType_Admin',
	'uses'=>'Admin_Controller@FindProductByType']);
Route::get('DeleteProductById_Admin/{id}',
	['as'=>'DeleteProductById_Admin',
	'uses'=>'Admin_Controller@Delete_Product']);
Route::get('ChartById_Admin/{id}/{created_at_from}/{created_at_to}',
	['as'=>'ChartById_Admin',
	'uses'=>'Admin_Controller@ChartById_Admin']);
//sản phẩm

Route::get('viewPDF',
	['as'=>'viewPDF',
	'uses'=>'Admin_Controller@downloadPDF']);
Route::get('Edit_Product/{id}/{name}/{desc}/{unit_price}/{pro_price}/{image}/{unit}',
	['as'=>'Edit_Product',
	 'uses'=>'Admin_Controller@Edit_Product']);
Route::post('Insert_Product',
	['as'=>'Insert_Product',
	 'uses'=>'Admin_Controller@Insert_Product']);
Route::get('Delete_Product/{id}',
	['as'=>'Delete_Product',
	 'uses'=>'Admin_Controller@Delete_Product']);
//Loại sản phẩm admin


Route::get('Delete_TypeProduct/{id}',
	['as'=>'Delete_TypeProduct',
	 'uses'=>'Admin_Controller@Delete_TypeProduct']);
Route::get('ViewType_Product',
	['as'=>'ViewType_Product', 
	'uses'=>'Admin_Controller@View_TypeProduct']);


//user admin

Route::get('user_Admin',
	['as'=>'user_Admin',
	 'uses'=>'Admin_Controller@Select_User']);
Route::get('Edit_User/{id}/{group}',
	['as'=>'Edit_User',
	 'uses'=>'Admin_Controller@Edit_User']);
Route::get('Insert_User/{name}/{email}/{group}',
	['as'=>'Insert_User',
	 'uses'=>'Admin_Controller@Insert_User']);
Route::get('Delete_User/{id}',
	['as'=>'Delete_User',
	 'uses'=>'Admin_Controller@Delete_User']);

Route::get('convert',
	['as'=>'convert',
	'uses'=>'Admin_Controller@convert_vi_to_en']);



 Route::get('/','Home_Controller@getIndex');
//trang bán hàng
Route::get('home',[
	'as'=>'home',
	'uses'=>'Home_Controller@getIndex']);
Route::get('detail/{id}',[
	'as'=>'detail',
	'uses'=>'Product_Controller@ShowDetail']);
Route::get('Login',[
	'as'=>'Login',
	'uses'=>'LoginLogoutRegister_Controller@Login']);
Route::post('login',[
	'as'=>'login',
	'uses'=>'LoginLogoutRegister_Controller@postLogin']);
Route::get('register',[
	'as'=>'register',
	'uses'=>'LoginLogoutRegister_Controller@Register']);
Route::post('register',[
	'as'=>'register',
	'uses'=>'LoginLogoutRegister_Controller@postRegister']);
Route::get('logout',[
	'as'=>'logout',
	'uses'=>'LoginLogoutRegister_Controller@getLogout'
]);
Route::get('Info',
	['as'=>'info',
	 'uses'=>'Home_Controller@info']);
Route::get('news',
	['as'=>'news',
	 'uses'=>'Home_Controller@news']);
Route::get('contact',
	['as'=>'contact',
	 'uses'=>'Home_Controller@contact']);
Route::get('allPro',
	['as'=>'allPro',
	 'uses'=>'Product_Controller@allProducts']);
Route::get('type/{id}',
	['as'=>'type',
	 'uses'=>'Type_Product_Controller@showType']);
Route::get('detail/{id}',
	['as'=>'detail',
	 'uses'=>'Detail_Controller@getDetail']);
Route::get('giohang',[
	'as'=>'giohang',
	'uses'=>'Home_Controller@getGiohang']);
Route::get('myPage',[
	'as'=>'myPage',
	'uses'=>'LoginLogoutRegister_Controller@getMyPage']);



Route::get('login/{provider}', [
	'as'=>'provider_login',
	'uses'=>'LoginLogoutRegister_Controller@redirectToProvider'
]);
Route::get('login/{provider}/callback', [
	'as'=>'provider_login_callback',
	'uses'=>'LoginLogoutRegister_Controller@handleProviderCallback'
]);
Route::get('active-user',[
	'as'=>'active-user',
	'uses'=>'LoginLogoutRegister_Controller@activeUser']
);


