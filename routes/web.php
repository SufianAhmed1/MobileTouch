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



Route::get('/AddCategory', function () {
return view('AddCategory');
});
Route::get('/AddBrand', function () {
return view('AddBrand');
});
Route::get('/addproduct', function ()
{
return view('AddProduct');
});
Route::get('/main/{id}', 'HomeController@showProductsWithCategory');

Route::post('/AddCategory','HomeController@addcategory');

Route::post('/AddBrand','HomeController@addbrand');

Route::get('/show','HomeController@show');

Route::get('/add','FlexController@add');

Route::get('/addflex','FlexController@addflex');

Route::get('cart','CartController@index');

Route::get('cart/remove/{id}','CartController@removeitem');

Route::get('cart/add/{id}','CartController@additem');

Route::get('remove',function(){

$rowId = '0f6524cc3c576d484150599b3682251c';

Cart::remove($rowId);
});



Route::get('/getSubCategory/', 'HomeController@index');


Route::post('/addproduct','HomeController@addproduct');




Route::get('/flex', 'FlexController@index');

Route::get('/flex/{id}', 'FlexController@index');
Route::get('next/{id}', 'FlexController@next')->name('next');
Route::get('insert', 'FlexController@insert');
Route::get('/file', 'FlexController@file');
Route::post('/File', 'FlexController@File')->name('File');
Route::post('/addproduct', 'FlexController@addproduct');

Route::post('/getSubCategory/', 'FlexController@indexb');
Route::get('/addproduct', 'FlexController@add');


Route::get('/mobilelist', 'MobileController@index');