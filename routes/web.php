<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'usersController', ['except' => []]);
});

// Produits 
Route::get('produits','ProduitsController@produit');
Route::get('produits/create','ProduitsController@create');
Route::post('produits','ProduitsController@store');
Route::get('produits/{produit}','ProduitsController@show');
Route::get('produits/{produit}/modifier','ProduitsController@modifier');
Route::patch('produits/{produit}','ProduitsController@update');
Route::delete('produits/{produit}','ProduitsController@destroy');
