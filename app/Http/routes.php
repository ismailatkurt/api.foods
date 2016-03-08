<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


use Illuminate\Routing\Router;

Route::get('product', 'ProductController@index');
Route::get('product/{id}', 'ProductController@show');
Route::post('product', 'ProductController@store');

Route::get('/', function () {
    return view('welcome', ['name' => 'James']);
});
