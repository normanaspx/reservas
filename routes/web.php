<?php
#lOGIN ROUTES
	Route::view('/', 'home')->name('home');
	Route::view('/signup', 'reservations/create');
	//Route::view('/services', 'services/services');
	Route::view('/servicestab', 'services/table');
	Route::view('/departure', 'services/table');
	Route::view('/welcome', 'main/welcome');
	Route::view('/create', 'reservations/create');
	Route::view('/return', 'services/return');
	Route::view('/gallery', 'gallery/gallery');
	//Route::post('/login','Auth\LoginController@login')->name('showlogin');
	Route::post('/signup','SignupController@store');
	//Route::view('/contact', 'services/contact');
	Route::get('/service','ServiceController@index')
    ->name('service');
#Usuarios
