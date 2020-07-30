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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::name('home')->get('/', 'KiddyController@index');
Route::name('about')->get('/about', 'KiddyController@about');
Route::name('contact')->get('/contact', 'KiddyController@contact');
Route::name('galleryfront')->get('/galleryfront', 'KiddyController@gallery');
Route::name('packages')->get('/packages', 'KiddyController@packages');
Route::name('pricing')->get('/pricing', 'KiddyController@pricing');

// Route::name('dashboard')->get('/dashboard', 'AdminController@index');
/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------|
*/
Route::prefix('')->group(function () {

   Route::middleware('admin')->group(function () {
      Route::name('dashboard')->get('/dashboard', 'AdminController@index');
      Route::name('gallery')->get('/gallery', 'AdminController@gallery');
      Route::resource('products', 'AdminController');
      Route::resource('photo', 'PhotoController'); 
      Route::name('upload')->post('/products/create', 'AdminController@upload');
      Route::name('upload_image')->post('/photo/create', 'PhotoController@upload'); 
   });

   });
