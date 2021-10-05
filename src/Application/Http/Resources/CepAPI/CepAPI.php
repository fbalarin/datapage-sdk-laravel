<?php
namespace Datapage\DatapageSDK\Http\Resources\CepAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\CepAPI\Traits\LogradouroResource;
use Illuminate\Support\Facades\Config;

class CepAPI extends BaseResource
{
    use LogradouroResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.cep');
    }
}
