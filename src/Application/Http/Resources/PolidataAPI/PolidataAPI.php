<?php
namespace Datapage\DatapageSDK\Http\Resources\PolidataAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\PolidataAPI\Traits\CadFunResource;
use Illuminate\Support\Facades\Config;

class PolidataAPI extends BaseResource
{
    use CadFunResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.polidata');
    }
}
