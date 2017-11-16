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
  	Route::get('/jobs/data', ['as' => 'adminpanel.jobs.data', 'uses' => 'JobsController@anyData'] );
  	Route::get('/messages/data', ['as' => 'adminpanel.messages.data', 'uses' => 'MessagesController@anyData'] );
  	Route::get('/reports/data', ['as' => 'adminpanel.reports.data', 'uses' => 'ReportsController@anyData'] );

    //Dashboard route
    Route::get('/dashboard', 'DashboardController@index');

    //Users route
    Route::resource('/users', 'UsersController', ['except' => ['destroy', 'edit', 'update']]);
    Route::get('/users/{id}/delete', 'UsersController@destroy');
    Route::get('/users/{id}/show', 'UsersController@show');

    //Profile routes
    Route::get('/editprofile', 'UsersController@edit');
    Route::patch('/editprofile', 'UsersController@update');

    //Jobs routes
    Route::get('/jobs', 'JobsController@index');
    Route::get('/jobs/{id}/show', 'JobsController@show');
    Route::get('/jobs/{id}/delete', 'JobsController@destroy');

    //Messages routes
    Route::get('/messages', 'MessagesController@index');
    Route::get('/messages/{id}/show', 'MessagesController@show');
    Route::get('/messages/{id}/delete', 'MessagesController@destroy');

    //Reports routes
    Route::get('/reports', 'ReportsController@index');
    Route::get('/reports/{id}/show', 'ReportsController@show');
    Route::get('/reports/{id}/delete', 'ReportsController@destroy');
  });
});

//Main Webiste routes
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
