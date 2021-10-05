<?php
namespace Datapage\DatapageSDK\Http\Resources\PremioAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\PremioAPI\Traits\CampanhaResource;
use Datapage\DatapageSDK\Http\Resources\PremioAPI\Traits\CupomResource;
use Illuminate\Support\Facades\Config;

class PremioAPI extends BaseResource
{
    use CupomResource;
    use CampanhaResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.premio');
    }
}
