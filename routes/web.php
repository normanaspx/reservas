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
	Route::post('/signup','SignupController@store');
	Route::post('/reservation.create','ReservationController@store')->name('reservation.create');;
	//Route::view('/contact', 'services/contact');
	Route::view('/invoce', 'invoce');
	Route::get('/invoce/create', 'TestController@fun_pdf');
	Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');


	//Ejemplo
	Route::get('/miruta', function()
	{
		//Me va a llamar a la vista home
	    return view('home');
	});
