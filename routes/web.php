<?php
#lOGIN ROUTES
	Route::view('/', 'home');
	Route::get('/login', 'Auth\LoginController@showLoginForm')
    ->name('login');
	Route::view('/signup', 'signup');
#Usuarios
