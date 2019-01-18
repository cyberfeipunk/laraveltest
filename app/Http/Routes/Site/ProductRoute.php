<?php
namespace  App\Http\Routes\Site;

use App\Models\Product;
use Illuminate\Contracts\Routing\Registrar;

class ProductRoute
{
    public function map(Registrar $router){
        $router->get('/product','ProductController@index');
        $router->get('/product/{id}','ProductController@show');
    }
}

?>