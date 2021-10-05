<?php

namespace Datapage\DatapageSDK\Facades;

use Datapage\DatapageSDK\DatapageSDKFactory;
use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Illuminate\Support\Facades\Facade;

/**
 * @method static BaseResource get(string $api)
 *
 * @see DatapageSDKFactory
 */
class DatapageSDK extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DatapageSDK';
    }
}
