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

//start product

//trang welcome
Route::get('/',[
    'as'=>'kiem-tra',
    'uses'=>'PageController@getKT'
    
]);
//trang chu
Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);
//trang gio hang
Route::get('cart',[
    'as'=>'gio-hang',
    'uses'=>'PageController@getCart'
]);
//trang show san pham mac dinh
Route::get('product',[
    'as'=>'san-pham',
    'uses'=>'PageController@getProduct'
]);
//trang show san pham theo sap xep
Route::get('product/sortby/{order}',[
    'as'=>'san-pham-theo-sap-xep',
    'uses'=>'PageController@getProductbyOrder'
]);
//trang show san pham theo loai
Route::get('product/type/{type}',[
    'as'=>'sp-theo-loai',
    'uses'=>'PageController@getProductbyType'
]);
//trang show san pham theo loai theo sap xep
Route::get('product/type/{type}/sortby/{order}',[
    'as'=>'sp-theo-loai-sap-xep',
    'uses'=>'PageController@getProductbyOrderbyType'
]);
//trang show san pham chi tiet
Route::get('product-detail',[
    'as'=>'chi-tiet',
    'uses'=>'PageController@getDetail'
]);
//them san pham vao gio hang xai ajax goi route nay
Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);
//xoa san pham trong gio hang xai ajax goi route nay
//neu san pham co so luong lon hon 1 thi chi xoa 1
Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelCart'
]);
//xoa san pham trong gio hang xai ajax goi route nay
//neu san pham co so luong lon hon 1 thi chi xoa ca san pham
Route::get('del-cart/{id}',[
    'as'=>'xoasgiohang',
    'uses'=>'PageController@getDelsCart'
]);
//chuyen trang gio hang
Route::get('get-list-cart',[
    'as'=>'laygiohang',
    'uses'=>'PageController@getListCart'
]);
//dat hang xai ajax goi route nay
//dat hang xong thi nhay qua trang dat hang thanh cong
Route::post('dat-hang',[
    'as'=>'dat-hang',
    'uses'=>"PageController@getCheckOut"
]);

//end product

//start admin

//trang chu
Route::get('admin',[
    'as'=>'admin',
    'uses'=>'AdminController@getIndex'
]);
//don dat hang
Route::get('admin/donhang/{status}',[
    'as'=>'don-hang',
    'uses'=>'AdminController@getBill'
]);
//da giao hang
Route::get('giao-hang/{id}',[
    'as'=>'giao-hang',
    'uses'=>'AdminController@giaoHang'
]);
//them san phan
Route::get('admin/add-product',[
    'as'=>'them-san-pham',
    'uses'=>'AdminController@getAddProduct'
]);
//them loai
Route::get('admin/add-type',[
    'as'=>'them-loai',
    'uses'=>'AdminController@getAddType'
]);
Route::post('button-add-product',[
    'as'=>'button-add-product',
    'uses'=>'AdminController@buttonAddProduct'
]);



