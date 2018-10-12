<?php
#lOGIN ROUTES
	Route::view('/', 'home');
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::view('/signup', 'signup');
	Route::view('/services', 'services/services');
	Route::view('/servicestab', 'services/table');
	Route::view('/departure', 'services/table');
	Route::view('/return', 'services/return');
	Route::view('/gallery', 'gallery/gallery');
	Route::view('/contact', 'services/contact');
#Usuarios
