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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',"HomeController@index")
//    ->middleware(\App\Http\Middleware\Test::class)
    ->name('home');

Route::get('/formtest',"HomeController@formtest")->name('formtest');
Route::post('/formtest',"HomeController@formtest_store")->name('formtest_store');


