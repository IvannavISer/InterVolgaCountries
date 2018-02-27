<?php

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
//путь для отображения страницы главной 'home'
Route::get('/',['uses'=>'IndexController@execute','as'=>'home']);

//путь для отображения всех стран из базы данных
Route::get('/countries',['uses'=>'IndexController@showCountries','as'=>'showCountries']);

//путь для отображения формы и добавления новой страны
Route::match(['get','post'],'/add',['uses'=>'CountryAddController@execute','as'=>'countryAdd']);
