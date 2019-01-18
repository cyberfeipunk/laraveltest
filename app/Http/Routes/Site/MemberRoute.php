<?php
namespace App\Http\Routes\Site;

use Illuminate\Contracts\Routing\Registrar;
class MemberRoute{

    public function map(Registrar $router){
        $router->get('members','MemberController@index');
        $router->get('members/logout','MemberController@logout');
        $router->get('members/login/','MemberController@login');
        $router->get('members/{id}','MemberController@show');

    }

}
?>