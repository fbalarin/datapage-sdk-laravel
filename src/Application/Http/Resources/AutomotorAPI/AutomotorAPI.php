<?php
namespace Datapage\DatapageSDK\Http\Resources\AutomotorAPI;

use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\AcessorioResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\BemResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\CambioResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\CaracteristicaResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\CarroceriaResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\CategoriaResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\CombustivelResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\CorResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\ElasticResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\GerarAlertaAnuncioBemResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\GrupoAcessorioResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\MarcaResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\ModeloResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\TagResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\VeiculosEntradasResource;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits\VersaoResource;
use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Illuminate\Support\Facades\Config;

class AutomotorAPI extends BaseResource
{
    use CambioResource;
    use CorResource;
    use CombustivelResource;
    use CarroceriaResource;
    use ModeloResource;
    use VersaoResource;
    use CaracteristicaResource;
    use CategoriaResource;
    use GrupoAcessorioResource;
    use MarcaResource;
    use TagResource;
    use BemResource;
    use AcessorioResource;
    use GerarAlertaAnuncioBemResource;
    use ElasticResource;
    use VeiculosEntradasResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.automotor');
    }
}
