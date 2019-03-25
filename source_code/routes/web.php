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

Route::get('/',[
    'as'=>'kiem-tra',
    'uses'=>'PageController@getKT'
    
]);

Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('cart',[
    'as'=>'gio-hang',
    'uses'=>'PageController@getCart'
]);


Route::get('product',[
    'as'=>'san-pham',
    'uses'=>'PageController@getProduct'
]);
Route::get('product/sortby/{order}',[
    'as'=>'san-pham-theo-sap-xep',
    'uses'=>'PageController@getProductbyOrder'
]);
Route::get('product/type/{type}',[
    'as'=>'sp-theo-loai',
    'uses'=>'PageController@getProductbyType'
]);
Route::get('product/type/{type}/sortby/{order}',[
    'as'=>'sp-theo-loai-sap-xep',
    'uses'=>'PageController@getProductbyOrderbyType'
]);


Route::get('product-detail',[
    'as'=>'chi-tiet',
    'uses'=>'PageController@getDetail'
]);

Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelCart'
]);

Route::get('dels-cart/{id}',[
    'as'=>'xoasgiohang',
    'uses'=>'PageController@getDelsCart'
]);

Route::get('get-list-cart',[
    'as'=>'laygiohang',
    'uses'=>'PageController@getListCart'
]);

Route::post('success',[
    'as'=>'dat-hang',
    'uses'=>"PageController@getCheckOut"
]);