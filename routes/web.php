<?php
#lOGIN ROUTES
	Route::view('/', 'home');
	Route::get('/login', 'Auth\LoginController@showLoginForm')
    ->name('login');
	Route::view('/signup', 'signup');
	Route::view('/services', 'services/services');
	Route::view('/servicestab', 'services/table');
#Usuarios
