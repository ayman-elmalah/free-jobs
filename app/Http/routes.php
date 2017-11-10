<?php

//Admin routes
Route::group(['prefix' => 'adminpanel'], function () {

  //Custom Auth methods
  Route::get('/',  'Auth\AuthController@showLoginForm');
  Route::get('/login',  'Auth\AuthController@showLoginForm');
  Route::post('/login', 'Auth\AuthController@login');
  Route::get('/logout', 'Auth\AuthController@logout');

  //Admin only can go here
  Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', 'DashboardController@index');
  });

  Route::get('/home', 'HomeController@index');

});


Route::get('/', function () {
    return view('welcome');
});
