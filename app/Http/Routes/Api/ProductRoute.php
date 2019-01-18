<?php
namespace  App\Http\Routes\Api;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Routing\Registrar;

class ProductRoute
{
    public function map(Registrar $router){
        $router->get('/product','ProductController@index');
        $router->get('/product/{id}','ProductController@show');
    }
}

?>