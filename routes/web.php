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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/admin/users', 'Admin\UsersController',['except'=>['show','create','store']]);


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show','create','store']]);
});

Route::get('/form','FormController@index')->name('form');
Route::get('/detail','DetailsController@index')->name('detail');
Route::post('submit','DestinationController@save');
Route::resource('tripdetail','TripController');
Route::get('tripdetail/{tripdetail}/photo','TripController@photo')->name('tripdetail.photo');
Route::post('tripdetail/gallery','TripController@photostore')->name('tripdetail.photostore');
Route::delete('tripdetail/gallery/{deletephoto}','TripController@photodelete')->name('tripdetail.photodelete');