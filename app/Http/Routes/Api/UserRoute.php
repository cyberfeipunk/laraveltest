<?php

namespace  App\Http\Routes\Api;

use Illuminate\Contracts\Routing\Registrar;

class UserRoute
{
    public function map(Registrar $router){
        $router->middleware('auth:api')->get('/user','UserController@index');
        $router->middleware('auth:api')->get('/user/{id}','UserController@show');
    }
}

?>