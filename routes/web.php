<?php

use Illuminate\Support\Facades\Route;

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
})->name('root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/admin/users', 'Admin\UsersController',['except'=>['show','create','store']]);


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show','create','store']]);
});

Route::get('/form/{id}','FormController@index')->name('form');
Route::get('/detail','DetailsController@index')->name('detail');
Route::post('submit','DestinationController@save')->name('destination.submit');

Route::resource('tripdetail','TripController');
Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::resource('booking','DestinationController',['except'=>['edit','create','store','destroy']]);
Route::get('/userbooking','DestinationController@userbook')->name('userbooking');
Route::resource('userbooking','UserBookingController',['except'=>['edit','create','store','destroy']]);
Route::get('tripdetail/{tripdetail}/photo','TripController@photo')->name('tripdetail.photo');
Route::post('tripdetail/gallery','TripController@photostore')->name('tripdetail.photostore');
Route::delete('tripdetail/gallery/{deletephoto}','TripController@photodelete')->name('tripdetail.photodelete');

// Route::resource('posts','PostsController');

// // Route::get('/dashboard','DashboardController@index')->name('dashboard');
// Route::get('/dashboard','DashboardController@index')->name('dashboard');
// Route::resource('booking','DestinationController',['except'=>['edit','create','store','destroy']]);
// // Route::get('/userbooking','DestinationController@userbook')->name('userbooking');
// Route::resource('userbooking','UserBookingController',['except'=>['edit','create','store','destroy']]);
