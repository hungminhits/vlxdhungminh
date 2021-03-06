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
Route::get('Login_Admin',
	['as'=>'Login_Admin',
	'uses'=>'Admin_Controller@Login_Admin']);
Route::post('PostLogin_Admin',
	['as'=>'PostLogin_Admin',
	'uses'=>'Admin_Controller@PostLogin_Admin']);
Route::get('ForgetPassword',[
	'as'=>'ForgetPassword',
	'uses'=>'Admin_Controller@ForgetPassword']);

Route::post('ForgetPassword_Admin',
	['as'=>'ForgetPassword_Admin',
	'uses'=>'Admin_Controller@PostForgetPassword']);

Route::get('ViewContent_Admin',
	['as'=>'ViewContentAdmin',
	'uses'=>'Admin_Controller@ViewContent_Admin']);
Route::get('ViewProduct_Admin',
	['as'=>'ViewProductAdmin',
	'uses'=>'Admin_Controller@Select_Product']);
Route::get('ViewProductByType_Admin/{id}',
	['as'=>'ViewProductByType_Admin',
	'uses'=>'Admin_Controller@FindProductByType']);

// Route::get('DeleteProductById_Admin/{id}',
// 	['as'=>'DeleteProductById_Admin',
// 	'uses'=>'Admin_Controller@Delete_Product']);
Route::get('ChartById_Admin/{id}/{created_at_from}/{created_at_to}',
	['as'=>'ChartById_Admin',
	'uses'=>'Admin_Controller@ChartById_Admin']);
//sản phẩm
Route::get('ViewNews',
	['as'=>'ViewNews',
	'uses'=>'Admin_Controller@ViewAllNews']);
Route::post('UpdateNews',
	['as'=>'UpdateNews',
	'uses'=>'Admin_Controller@UpdateNews']);
Route::post('InsertNews',
	['as'=>'InsertNews',
	'uses'=>'Admin_Controller@InsertNews']);
Route::get('InsertNews',
	['as'=>'InsertNews',
	'uses'=>'Admin_Controller@ViewPageInsertNews']);
Route::get('DeleteNews',
	['as'=>'DeleteNews',
	'uses'=>'Admin_Controller@DeleteNews']);
Route::get('viewPDF',
	['as'=>'viewPDF',
	'uses'=>'Admin_Controller@downloadPDF']);
Route::get('ShowBill',
	['as'=>'ShowBill',
	'uses'=>'Admin_Controller@ShowBill']);
Route::get('ShowBill_Detail/{id_bill}',
	['as'=>'ShowBill_Detail',
	'uses'=>'Admin_Controller@ShowBill_Detail']);
Route::post('Edit_Product',
	['as'=>'Edit_Product',
	 'uses'=>'Admin_Controller@Edit_Product']);
Route::post('Insert_Product',
	['as'=>'Insert_Product',
	 'uses'=>'Admin_Controller@Insert_Product']);
Route::get('Delete_Product',
	['as'=>'Delete_Product',
	 'uses'=>'Admin_Controller@Delete_Product']);
//Loại sản phẩm admin

Route::post('Edit_Category',
	['as'=>'Edit_Category',
	 'uses'=>'Admin_Controller@Edit_Category']);
Route::post('Insert_Category',
	['as'=>'Insert_Category',
	 'uses'=>'Admin_Controller@Insert_Category']);
Route::get('Delete_Category',
	['as'=>'Delete_Category',
	 'uses'=>'Admin_Controller@Delete_Category']);
Route::get('ViewType_Product',
	['as'=>'ViewType_Product', 
	'uses'=>'Admin_Controller@View_TypeProduct']);


//user admin

Route::get('user_Admin',
	['as'=>'user_Admin',
	 'uses'=>'Admin_Controller@Select_User']);
Route::post('Edit_User',
	['as'=>'Edit_User',
	 'uses'=>'Admin_Controller@Edit_User']);
Route::post('Insert_User',
	['as'=>'Insert_User',
	 'uses'=>'Admin_Controller@Insert_User']);
Route::get('Delete_User',
	['as'=>'Delete_User',
	 'uses'=>'Admin_Controller@Delete_User']);

Route::get('convert',
	['as'=>'convert',
	'uses'=>'Admin_Controller@convert_vi_to_en']);













 Route::get('/','Home_Controller@getIndex');
//trang bán hàng
Route::get('',[
	'as'=>'home',
	'uses'=>'Home_Controller@getIndex']);
Route::get('detail',[
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
	 'uses'=>'Home_Controller@news_All']);
Route::get('TypeNews/{id}',[
	'as'=>'TypeNews',
	'uses'=>'Home_Controller@NewsById']);
Route::get('news-detail/{id}',[
	'as'=>'news-detail',
	'uses'=>'Home_Controller@newsdetail']);





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

Route::get('cart_product',
	['as'=>'cart',
	'uses'=>'Cart_Controller@showCart']);

route::get('delete_cart/{id}',
	['as'=>'delete1cart',
	 'uses'=>'Cart_Controller@delete_cart']);

route::get('delete_product/{id}', 
	['as'=>'delete1product',
	  'uses'=>'Cart_Controller@delete_one_product']);


Route::get('buy/{id}',
	['as'=>'buy',
	 'uses'=>'Cart_Controller@buy']); 

Route::get('cart_delete_all',
	['as'=>'delete_all_cart',
	'uses'=>'Cart_Controller@delete_all_cart']);

Route::get('muahang',
	['as'=>'muahang',
	 'uses'=>'Cart_Controller@muahang']); 

