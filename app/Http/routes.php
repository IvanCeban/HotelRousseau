<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', 'PagesController@index');
    Route::get('hotel', 'PagesController@hotel_onconstruction');
    Route::post('hotel', 'PagesController@hotel');
    Route::get('hotel-init', 'PagesController@hotelInit');
    Route::get('room', 'PagesController@rooms');
    Route::get('rooms_introduction', 'PagesController@rooms_introduction');
    Route::get('restaurant', 'PagesController@restaurant');
    Route::get('offers', 'PagesController@offers');
    Route::get('wellness_center', 'PagesController@wellness_center');
    Route::get('contact', 'PagesController@contact');
    Route::post('contact', 'PagesController@contact');

    Route::post('update-cart', 'CartController@updateCart');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('admin', 'Admin\AdminController@index');

Route::get('admin/profileapp', 'Admin\AdminController@profile');
Route::post('admin/profile/photo', 'Admin\ProfileController@uploadPhoto');
Route::resource('admin/profile', 'Admin\ProfileController');

Route::get('admin/roomsapp','Admin\AdminController@rooms');
Route::get('admin/room/photos/{id}', 'Admin\RoomsController@getPhotos');
Route::post('admin/room/photos', 'Admin\RoomsController@uploadPhotos');
Route::resource('admin/rooms', 'Admin\RoomsController');

Route::get('admin/roomtypesapp','Admin\AdminController@roomTypes');
Route::resource('admin/roomtypes', 'Admin\RoomTypesController');


Route::get('admin/reservationsapp','Admin\AdminController@reservations');
Route::resource('admin/reservations', 'Admin\ReservationsController');