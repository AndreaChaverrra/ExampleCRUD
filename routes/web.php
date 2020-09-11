<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('movie', 'MovieController');
Route::get('movie/destroy/{id}', ['as'=>'movie.destroy', 'uses' => 'MovieController@destroy']);
Route::get('movie/edit/{id}', ['as' => 'movie.edit', 'uses'=> 'MovieController@update']);
Route::post('movie/show', ['as' => 'movie/show', 'uses'=> 'MovieController@show']);
Route::post('movie/update/{id}', ['as'=>'movie/update', 'uses'> 'MovieController@update']);


Route::resource('category', 'CategoryController');
Route::get('category/destroy/{id}', ['as'=>'category.destroy', 'uses' => 'CategoryController@destroy']);
Route::get('category/edit/{id}', ['as' => 'category.edit', 'uses'=> 'CategoryController@update']);
Route::post('category/show', ['as' => 'category/show', 'uses'=> 'CategoryController@show']);
Route::post('category/update/{id}', ['as'=>'category/update', 'uses'> 'CategoryController@update']);


Route::resource('rental', 'RentalController');
Route::get('rental/destroy/{id}', ['as'=>'rental.destroy', 'uses' => 'RentalController@destroy']);
Route::get('rental/edit/{id}', ['as' => 'rental.edit', 'uses'=> 'RentalController@update']);
Route::post('rental/show', ['as' => 'rental/show', 'uses'=> 'RentalController@show']);
Route::post('rental/update/{id}', ['as'=>'rental/update', 'uses'> 'RentalController@update']);


Route::resource('rol', 'RolController');
Route::get('rol/destroy/{id}', ['as'=>'rol.destroy', 'uses' => 'RolController@destroy']);
Route::get('rol/edit/{id}', ['as' => 'rol.edit', 'uses'=> 'RolController@update']);
Route::post('rol/show', ['as' => 'rol/show', 'uses'=> 'RolController@show']);
Route::post('rol/update/{id}', ['as'=>'rol/update', 'uses'> 'RolController@update']);


Route::resource('staus', 'StatusController');
Route::get('staus/destroy/{id}', ['as'=>'staus.destroy', 'uses' => 'StatusController@destroy']);
Route::get('staus/edit/{id}', ['as' => 'staus.edit', 'uses'=> 'StatusController@update']);
Route::post('staus/show', ['as' => 'staus/show', 'uses'=> 'StatusController@show']);
Route::post('staus/update/{id}', ['as'=>'staus/update', 'uses'> 'StatusController@update']);


Route::resource('type_status', 'Type_StatusController');
Route::get('type_status/destroy/{id}', ['as'=>'type_status.destroy', 'uses' => 'Type_StatusController@destroy']);
Route::get('type_status/edit/{id}', ['as' => 'type_status.edit', 'uses'=> 'Type_StatusController@update']);
Route::post('type_status/show', ['as' => 'type_status/show', 'uses'=> 'Type_StatusController@show']);
Route::post('type_status/update/{id}', ['as'=>'type_status/update', 'uses'> 'Type_StatusController@update']);


Route::resource('user', 'UserController');
Route::get('user/destroy/{id}', ['as'=>'user.destroy', 'uses' => 'UserController@destroy']);
Route::get('user/edit/{id}', ['as' => 'user.edit', 'uses'=> 'UserController@update']);
Route::post('user/show', ['as' => 'user/show', 'uses'=> 'UserController@show']);
Route::post('user/update/{id}', ['as'=>'user/update', 'uses'> 'UserController@update']);
