<?php

//Admin routes
Route::group(['prefix' => 'adminpanel'], function () {
  Route::get('/',  'Auth\AuthController@showLoginForm');
  Route::get('/login',  'Auth\AuthController@showLoginForm');
  Route::post('/login', 'Auth\AuthController@login');
  Route::get('/logout', 'Auth\AuthController@logout');
  //Admin only can go here
  Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', function () {
      return 'dashoard page';
    });
  });

  Route::get('/home', 'HomeController@index');

});



Route::get('/', function () {
    return view('welcome');
});
