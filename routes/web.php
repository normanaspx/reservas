<?php
#lOGIN ROUTES
	Route::view('/', 'home')->name('home');
	Route::view('/signup', 'reservations/create');
	//Route::view('/services', 'services/services');
	Route::view('/servicestab', 'services/table');
	Route::view('/departure', 'services/table');
	Route::view('/welcome', 'main/welcome');
	Route::view('/create', 'reservations/create');
	Route::get('/create','ServiceController@index')
    ->name('create');
	Route::view('/return', 'services/return');
	Route::view('/gallery', 'gallery/gallery');
	//Route::post('/login','Auth\LoginController@login')->name('showlogin');
	Route::post('/signup','SignupController@store');
	Route::post('/reservation.create','ReservationController@store')->name('reservation.create');;
	//Route::view('/contact', 'services/contact');

#Usuarios

Auth::routes();
//Route::post('/login','Auth\LoginController@list')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
