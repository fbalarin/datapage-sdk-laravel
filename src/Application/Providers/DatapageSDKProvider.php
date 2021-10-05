<?php

namespace Datapage\DatapageSDK\Providers;

use Datapage\DatapageSDK\Auth\OAuthClient;
use Datapage\DatapageSDK\DatapageSDKFactory;
use GuzzleHttp\Client;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class DatapageSDKProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config.php' => config_path('datapage_sdk.php'),
        ], 'datapage-sdk-config');
    }

    public function register()
    {
        $this->app->singleton('DatapageSDK', function() {
            return new DatapageSDKFactory();
        });

        $this->app->singleton('OAuthClient', function() {
            return new OAuthClient(new Application());
        });

        $this->app->singleton('HttpClient', function() {
            return new Client([
                'allow_redirects' => false,
                'verify' => false,
                'http_errors' => false,
                'headers' => [
                    'Authorization' => \Datapage\DatapageSDK\Facades\OAuthClient::getToken()
                ]
            ]);
        });

        $this->app->bind(DatapageSDKFactory::class, 'DatapageSDK');
        $this->app->bind(OAuthClient::class, 'OAuthClient');
        $this->app->bind(Client::class, 'HttpClient');
    }

    public function provides()
    {
        return [
            DatapageSDKFactory::class, 'DatapageSDK',
            OAuthClient::class, 'OAuthClient',
            Client::class, 'HttpClient',
        ];
    }
}
