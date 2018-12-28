<?php

namespace App\Lib;


class TestLib{

    public function run(){
        $html = <<<GET
        <ol>
        <li>创建一个类，创建类/app/Lib/TestLib</li>
        <li>创建一个ServiceProviders(服务提供者)，将这个类绑定
        php artisan make:provider LibServiceProvider
        
        </li>
        <li>服务提供者中注册TestLib</li>
        <li>定义完服务提供者类后，接下来我们需要将该服务提供者注册到应用中，很简单，只需将该类追加到配置文件config/app.php的providers数组中即可： </li>
        <li>测试服务使用 Route::get('/facadertest1',function(){  \$testLib = app()->make('testlib');  //return \$testLib->run(); });        </li>
        <li>如果无效则运行：php artisan clear-compiled 
php artisan optimize 清除缓存</li>
        <li>新建facade App/Lib/TestLibFacade 继承Illuminate\Support\Facades\Facade; 并重写方法 getFacadeAccessor 返回 服务名称return "testlib";</li>
        <li>/config/app.php中配置自定义的facade  'aliases' 数组增加'TestLib' => App\Lib\TestLibFacade::class</li>
        
        <li>测试 use TestLib; TestLib::run();</li>
        </ol>
GET;
        return $html;

    }
}