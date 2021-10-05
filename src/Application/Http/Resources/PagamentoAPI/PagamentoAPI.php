<?php
namespace Datapage\DatapageSDK\Http\Resources\PagamentoAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\PagamentoAPI\Traits\CartaoResource;
use Datapage\DatapageSDK\Http\Resources\PagamentoAPI\Traits\ContaResource;
use Datapage\DatapageSDK\Http\Resources\PagamentoAPI\Traits\JunoResource;
use Datapage\DatapageSDK\Http\Resources\PagamentoAPI\Traits\PagamentoResource;
use Datapage\DatapageSDK\Http\Resources\PagamentoAPI\Traits\FormaPagamentoResource;
use Datapage\DatapageSDK\Http\Resources\PagamentoAPI\Traits\YapayPagamentoResource;
use Illuminate\Support\Facades\Config;

class PagamentoAPI extends BaseResource
{
    use PagamentoResource;
    use FormaPagamentoResource;
    use CartaoResource;
    use YapayPagamentoResource;
    use ContaResource;
    use JunoResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.pagamento');
    }
}
