<?php
namespace App\Providers\Auth;

use Illuminate\Auth\TokenGuard;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\UserProvider;

class MemberTokenGuard extends TokenGuard {


    /**
     * Create a new authentication guard.
     *
     * @param  \Illuminate\Contracts\Auth\UserProvider  $provider
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $inputKey
     * @param  string  $storageKey
     * @return void
     */
    public function __construct(UserProvider $provider, Request $request, $inputKey = 'member_token', $storageKey = 'member_token')
    {
        $this->request = $request;
        $this->provider = $provider;
        $this->inputKey = $inputKey;
        $this->storageKey = $storageKey;
    }

}

?>