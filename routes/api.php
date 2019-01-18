<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/","ApiController@index");

Route::group([],function($router){
    foreach(glob(app_path('Http//Routes/Api').'/*.php') as $file){
        app()->make('App\\Http\\Routes\\Api\\'.basename($file,'.php'))->map($router);
    }
});




