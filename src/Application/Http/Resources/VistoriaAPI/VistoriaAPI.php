<?php
namespace Datapage\DatapageSDK\Http\Resources\VistoriaAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\VistoriaAPI\Traits\TipoVistoriaResource;
use Datapage\DatapageSDK\Http\Resources\VistoriaAPI\Traits\VistoriaResource;
use Illuminate\Support\Facades\Config;

class VistoriaAPI extends BaseResource
{
    use VistoriaResource;
    use TipoVistoriaResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.vistoria');
    }
}
