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

Auth::routes();
Route::get('/', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/logout', 'pagesController@logout')->name('logout');


/*-----------------------------   Products  ------------------------------------*/

Route::get('/products','PagesController@Products')->middleware('auth');

Route::get('/addproduct','PagesController@addProduct')->middleware('auth');
Route::post('/ProductStore','PagesController@ProductStore')->middleware('auth');

Route::get('/products/{id}/edit','PagesController@editproduct')->middleware('auth')->name('Product.edit');
Route::post('/Products/{id}/update','PagesController@updateProduct')->middleware('auth')->name('Product.update');

Route::get('/deleteProduct/{id}','PagesController@deleteProduct')->middleware('auth');

/*-----------------------------------------------------------  supplayer  ----------------------------------*/

Route::get('/supplayers','PagesController@supplayers')->middleware('auth');

Route::get('/addsupplayer','PagesController@addsupplayer')->middleware('auth');
Route::post('/supplayerStore','PagesController@supplayerStore')->middleware('auth');

Route::get('/supplayers/{id}/edit','PagesController@editsupplayer')->middleware('auth')->name('supplayer.edit');
Route::post('/supplayers/{id}/update','PagesController@updatesupplayer')->middleware('auth')->name('supplayer.update');

Route::get('/deletesupplayer/{id}','PagesController@deletesupplayer')->middleware('auth');


/*------------------------------------------------ Client -----------------------------------------------------*/

Route::get('/clients','PagesController@clients')->middleware('auth');

Route::get('/addclient','PagesController@addclient')->middleware('auth');
Route::post('/clientStore','PagesController@clientStore')->middleware('auth');

Route::get('/clients/{id}/edit','PagesController@editclient')->middleware('auth')->name('client.edit');
Route::post('/clients/{id}/update','PagesController@updateclient')->middleware('auth')->name('client.update');

Route::get('/deleteclient/{id}','PagesController@deleteclient')->middleware('auth');

/**------------------------------------------------ Employee -----------------------------------------------------*/

Route::get('/employees','PagesController@employees')->middleware('auth');

Route::get('/addemployee','PagesController@addemployee')->middleware('auth');
Route::post('/employeeStore','PagesController@employeeStore')->middleware('auth');

Route::get('/employees/{id}/edit','PagesController@editemployee')->middleware('auth')->name('employee.edit');
Route::post('/employees/{id}/update','PagesController@updateemployee')->middleware('auth')->name('employee.update');

Route::get('/deleteemployee/{id}','PagesController@deleteemployee')->middleware('auth');



/*--------------------------------------  Handle Data --------------------------*/

Route::post('/getdata','PagesController@getdata')->middleware('auth')->name('data.search');


/*----------------------------- Excel Export -----------------------------*/

Route::get('/products/excel', 'PagesController@excel_products')->name('export.pro')->middleware('auth');
Route::get('/supplayers/excel', 'PagesController@excel_supplayers')->name('export.sup')->middleware('auth');
Route::get('/clients/excel', 'PagesController@excel_clients')->name('export.client')->middleware('auth');
Route::get('/emp/excel', 'PagesController@excel_emp')->name('export.emp')->middleware('auth');





















Route::post('images-upload', 'PagesController@imagesUploadPost')->middleware('auth')->name('images.upload');