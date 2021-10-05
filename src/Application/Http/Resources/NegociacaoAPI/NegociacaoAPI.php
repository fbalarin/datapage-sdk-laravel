<?php
namespace Datapage\DatapageSDK\Http\Resources\NegociacaoAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\NegociacaoAPI\Traits\AnuncioRelacaoResource;
use Datapage\DatapageSDK\Http\Resources\NegociacaoAPI\Traits\AnuncioResource;
use Datapage\DatapageSDK\Http\Resources\NegociacaoAPI\Traits\AnuncioTipoNegociacaoResource;
use Datapage\DatapageSDK\Http\Resources\NegociacaoAPI\Traits\CredereSimulacaoResouce;
use Datapage\DatapageSDK\Http\Resources\NegociacaoAPI\Traits\EventoResource;
use Datapage\DatapageSDK\Http\Resources\NegociacaoAPI\Traits\OfertaResource;
use Datapage\DatapageSDK\Http\Resources\NegociacaoAPI\Traits\TaxaResource;
use Datapage\DatapageSDK\Http\Resources\NegociacaoAPI\Traits\TipoNegociacaoResource;
use Illuminate\Support\Facades\Config;

class NegociacaoAPI extends BaseResource
{
    use TaxaResource;
    use EventoResource;
    use AnuncioResource;
    use OfertaResource;
    use TipoNegociacaoResource;
    use AnuncioTipoNegociacaoResource;
    use AnuncioRelacaoResource;
    use CredereSimulacaoResouce;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.negociacao');
    }
}
