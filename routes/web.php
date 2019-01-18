<?php
use Illuminate\Http\Request;
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

Route::resource('photo',"PhotoController",[
    'names'=>[
        'create' => 'photos.build',
    ],
    'parameters' => [
        'photo' => 'user_photo'
    ]
]);

//Route::get('/users','UsersController@index')->name('users');
//Route::get('/users/{user}','UsersController@show')->name('users.show');
//Route::get('/users/create','UsersController@create')->name('users.create');
//Route::get('/users/{user}/edit','UsersController@edit')->name('users.edit');
//Route::post('/users','UsersController@store')->name('users.store');
//Route::patch('/users/{user}','UsersController@update')->name('users.update');
//Route::delete('/users/{user}','UsersController@destroy')->name('users.distroy');

Route::get('/facadertest1',function(){
   //$testLib = app()->make('testlib');
   //return $testLib->run();

    return TestLib::run();
});


Route::get('/facadertest',"HomeController@facadertest");
Route::get('/facadertest2',"HomeController@facadertest2");

Route::get('request',function(Request $request){
   //return $request->path();
    return $request->url();
});

Route::get('/response',function(){
   return ['a','b'];
});


Route::get('/lang',function(){
   //return __('message.welcome');
    echo App::getLocale();
    return __("message.welcome")."<br>".__('message.es');
});

Route::get('/vueapp',function(){
   return view('site.vueapp');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group([],function($router){
    foreach(glob(app_path('Http//Routes/Site').'/*.php') as $file){
        app()->make('App\\Http\\Routes\\Site\\'.basename($file,'.php'))->map($router);
    }
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
