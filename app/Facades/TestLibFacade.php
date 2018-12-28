<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class TestLibFacade extends Facade{

    protected static function getFacadeAccessor()
    {
        return "testlib";
    }
}