<?php
namespace Datapage\DatapageSDK\Http\Resources\CatalogoAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\CatalogoAPI\Traits\CategoriaResource;
use Datapage\DatapageSDK\Http\Resources\CatalogoAPI\Traits\PedidoResource;
use Datapage\DatapageSDK\Http\Resources\CatalogoAPI\Traits\ProdutoResource;
use Illuminate\Support\Facades\Config;

class CatalogoAPI extends BaseResource
{
    use ProdutoResource;
    use PedidoResource;
    use CategoriaResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.catalogo');
    }
}
