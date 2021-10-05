<?php
namespace Datapage\DatapageSDK\Http\Resources\ComissaoAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\ComissaoAPI\Traits\ComissaoResource;
use Datapage\DatapageSDK\Http\Resources\ComissaoAPI\Traits\RequisicaoResource;
use Datapage\DatapageSDK\Http\Resources\ComissaoAPI\Traits\ContaResource;
use Datapage\DatapageSDK\Http\Resources\ComissaoAPI\Traits\ParcelaResource;
use Illuminate\Support\Facades\Config;

class ComissaoAPI extends BaseResource
{
    use ComissaoResource;
    use ContaResource;
    use RequisicaoResource;
    use ParcelaResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.comissao');
    }
}
