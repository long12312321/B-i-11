<?php

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
Route::get('home','HomeController@index')->name('create');
Route::post('add','AddController@add')->name('add');
Route::get('language/{language}','LanguageController@index')-> name('lan');
Route::get('login','LoginController@getLogin')->name('login');
Route::post('login','LoginController@postLogin')->name('lo');
Route::get('logout','LoginController@logout')->name('logout');
Route::get('register','RegisterController@getRegister')->name('re');
Route::post('register','RegisterController@postRegister')->name('reg');
// Route::prefix('home') ->group(function(){
   
// });
