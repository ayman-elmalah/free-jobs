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
    #datatables ajax
  	Route::get('/users/data', ['as' => 'adminpanel.users.data', 'uses' => 'UsersController@anyData'] );

    //Dashboard route
    Route::get('/dashboard', 'DashboardController@index');

    //Users route
    Route::resource('/users', 'UsersController', ['except' => ['destroy', 'edit', 'update']]);
    Route::get('/users/{id}/delete', 'UsersController@destroy');
    Route::get('/users/{id}/show', 'UsersController@show');

    //Profile routes
    Route::get('/editprofile', 'UsersController@edit');
    Route::patch('/editprofile', 'UsersController@update');
  });

  Route::get('/home', 'HomeController@index');

});


Route::get('/', function () {
    return view('welcome');
});
