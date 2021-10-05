<?php

namespace Datapage\DatapageSDK\Auth;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class OAuthClient
{
    private $app;

    public function __construct(Application $application)
    {
        $this->app = $application;
    }

    public function getToken()
    {
        $token = Request::capture()->header('Authorization', null);
        if (is_null($token) or $this->app->runningInConsole()){
            $token = Config::get('datapage_sdk.super_user_token');
        }

        return $token;
    }
}
