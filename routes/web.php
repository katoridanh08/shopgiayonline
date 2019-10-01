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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::group(['prefix'=>'danh-muc'],function(){
        Route::get("them",['as'=>'themdanhmuc','uses'=>'CategoryController@getAddCate']);
        Route::post("them",['as'=>'themdanhmuc','uses'=>'CategoryController@postAddCate']);
        Route::get("danh-sach",['as'=>'listdanhmuc','uses'=>'CategoryController@getListCate']);
        Route::get("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@getEditCate']);
        Route::post("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@postEditCate']);
        Route::get('xoa/{id}',"CategoryController@getDelCate");
    });
});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
     Route::group(['prefix'=>'san-pham'],function () {
    Route::get("them", ['as' => 'themsanpham', 'uses' => 'ProductController@getAddProduct']);
    Route::post("them", ['as' => 'themsanpham', 'uses' => 'ProductController@postAddProduct']);
    Route::get("danh-sach-san-pham",['as' => 'listsanpham', 'uses' => 'ProductController@getListProduct']);
    Route::get("sua/{id}",['as'=>'suasanpham','uses'=>'ProductController@getEditProduct']);
    Route::post("sua/{id}",['as'=>'suasanpham','uses'=>'ProductController@postEditProduct']);
    Route::get("xoa/{id}","ProductController@postDelProduct");
});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
