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
    return view('home');
});
/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::post('/home','pagesController@login');*/
Route::get('/main/allcustmer','pagesController@allcustmer')->middleware('auth')->name('show');
Route::get('/main/delete/{id}','PagesController@destroy')->middleware('auth');

// Route::get('/edit/{id}','PagesController@edit')->name('edit')->middleware('auth');
// Route::get('/edit','PagesController@edit')->name('edit')->middleware('auth');

/*-----------------------------------Home Page-------------------------------------------*/

                            /*----------Slider-------------*/
Route::get('/Slider','PagesController@Slider')->middleware('auth');

Route::get('/addSlider','addController@addSlider')->middleware('auth');
Route::post('/sliderStore','addController@sliderStore')->middleware('auth');

Route::get('/editSlider/{slider}','PagesController@editSlider')->middleware('auth')->name('slider.edit');
Route::post('/editSlider/{slider}/update','PagesController@updateSlider')->middleware('auth')->name('slider.update');

Route::get('/deleteSlider/{slider}','PagesController@deleteSlider')->middleware('auth');

                    /*--------------Counter Record-------------*/

Route::get('/counter','PagesController@counter')->middleware('auth');

Route::get('/addCounter','addController@addCounter')->middleware('auth');
Route::post('/CounterStore','addController@CounterStore')->middleware('auth');

Route::get('/editCounter/{counter}','PagesController@editCounter')->middleware('auth')->name('counter.edit');
Route::post('/editCounter/{counter}/update','PagesController@updateCounter')->middleware('auth')->name('counter.update');

Route::get('deleteCounter/{counter}','PagesController@deleteCounter')->middleware('auth');



/*---------------------------------------About Us----------------------------------------------*/

            /*-------------------------About Us Content--------------------*/

Route::get('/aboutContent','PagesController@aboutContent')->middleware('auth');

Route::get('/addAboutContent','PagesController@addAboutContent')->middleware('auth');
Route::post('/AboutStore','PagesController@AboutStore')->middleware('auth');

Route::get('/aboutContent/{id}/editAboutContent','PagesController@editAboutContent')->middleware('auth')->name('aboutContent.edit');
Route::post('/aboutContent/{id}/update','PagesController@updateAboutContent')->middleware('auth')->name('aboutContent.update');

Route::get('/deleteAboutContent/{aboutuscontent}/delete','PagesController@deleteAboutContent')->middleware('auth');

        /*-------------------------- message-----------------------*/

Route::get('/message','PagesController@message')->middleware('auth');

Route::post('/addmessage','PagesController@addMessage')->middleware('auth')->name('message');

Route::get('/message/{message}/delete','PagesController@deleteMessage')->middleware('auth');

Route::get('/aboutUsDetails','PagesController@AboutUsDetails')->middleware('auth');

Route::get('setting/{id}/edit','PagesController@setting')->middleware('auth')->name('setting.edit');
Route::post('setting/{id}/update','PagesController@settingUpdate')->middleware('auth')->name('setting.update');

                /*-----------------------------Address-----------------------*/

Route::get('/address','PagesController@address')->middleware('auth');

Route::get('/addAddress','PagesController@addAddress')->middleware('auth');
Route::post('/AddressStore','PagesController@StoreAddress')->middleware('auth');

Route::get('/address/{address}/edit','PagesController@editAddress')->middleware('auth')->name('address.edit');
Route::post('/editAddress/{address}/update','PagesController@updateAddress')->middleware('auth')->name('address.update');

Route::get('/deleteAddress/{address}/delete','PagesController@deleteAddress')->middleware('auth');


/*------------------------------------Projects----------------------------------------------*/

    /*---------------------------Projects----------------*/
Route::get('/Project','PagesController@Project')->middleware('auth');

Route::get('/addProject','PagesController@addProject')->middleware('auth');
Route::post('/storeProject','PagesController@storeProject')->middleware('auth');

Route::get('/project/{id}/edit','PagesController@editProject')->middleware('auth')->name('project.edit');
Route::post('/project/{id}/update','PagesController@updateProject')->middleware('auth')->name('project.update');

Route::get('/deleteProject/{id}','PagesController@deleteProject')->middleware('auth');



/*Route::post('/update','PagesController@updateData')->name('update');*/
/*--------------------------------------------------------------*/
// Route::post('addSlider','PagesController@update');

/*----------------------------------------------------------------*/
/*Route::post('/members','PagesController@store');

Route::get('member/add','PagesController@create');*/

/*
Route::get('/main', 'PagesController@index');
Route::post('/main/checklogin', 'PagesController@checklogin');*/
Route::get('main/successlogin', 'PagesController@successlogin');
Route::get('main/logout', 'PagesController@logout');


/*-----------------------------------Project Pages------------------------------*/



Route::get('index', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('projects', 'PagesController@projects');
Route::get('/finishedProject','PagesController@fProject');
Route::get('/currentProject','PagesController@cProject');
Route::get('contact', 'PagesController@contact');
Route::get('single-project/{id}', 'PagesController@singleProject');



/*----------------------------- Excel Export -----------------------------*/

Route::get('/Slider/excel', 'PagesController@excel_slider')->name('export.slider')->middleware('auth');
Route::get('/counter/excel', 'PagesController@excel_counter')->name('export.counter')->middleware('auth');
Route::get('/aboutContent/excel', 'PagesController@excel_aboutus')->name('export.aboutus')->middleware('auth');
Route::get('/message/excel', 'PagesController@excel_message')->name('export.message')->middleware('auth');
Route::get('/address/excel', 'PagesController@excel_address')->name('export.address')->middleware('auth');
Route::get('/project/excel', 'PagesController@excel_project')->name('export.project')->middleware('auth');


/*Route::get('', function () {
    return \Excel::download(new App\Exports\InvoicesExport, 'invoices.xlsx');
})->name('export');*/


Auth::routes();

/*---------------------- Home Page ------------------*/

Route::get('/', 'HomeController@index')->middleware('auth')->name('home');
