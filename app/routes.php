<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
    return View::make('blank');
});



# Login
Route::get('/login', 'AuthController@create');
Route::post('/login', 'AuthController@store');

# Admin Treba grupirat
Route::get('/dashboard', 'AdminController@index');
Route::get('/unos/{role}', 'AdminController@createUser');
Route::post('/unos/{role}', 'AdminController@storeUser');






Route::get('/test', 'AdminController@test');
//{
    //  return  User::with('categories')->with('profile')->find(1);
    // $cat =  User::find(1);
    
    //  return  DrivingHelper::getCategories('no_category');
    //  return  DrivingHelper::getCategoriesAll();
//});



