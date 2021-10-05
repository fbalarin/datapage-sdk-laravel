<?php
namespace Datapage\DatapageSDK\Http\Resources\CorridaAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\AgendamentoDiaResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\AgendamentoParadaClienteResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\AgendamentoParadaResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\AgendamentoResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\ClienteLocalFavoritoResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\ClienteMotoristaCaracteristicaResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\ClienteMotoristaResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\CorridaContatoSegurancaResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\CorridaLogResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\CorridaParadaClienteResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\CorridaParadaResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\CorridaResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\CorridaSolicitacaoResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\MotoristaDocumentoResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\MotoristaOnlineResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\PosicaoAtualResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\PosicaoLogResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\SistemaMotivoCancelamentoResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\SistemaMotoristaCaracteristicaResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\UsuarioContatoSegurancaResource;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits\VeiculoResource;
use Illuminate\Support\Facades\Config;

class CorridaAPI extends BaseResource
{
    use CorridaResource;
    use CorridaSolicitacaoResource;
    use CorridaLogResource;
    use CorridaParadaResource;
    use CorridaParadaClienteResource;
    use CorridaContatoSegurancaResource;
    use AgendamentoResource;
    use AgendamentoParadaResource;
    use AgendamentoDiaResource;
    use AgendamentoParadaClienteResource;
    use MotoristaDocumentoResource;
    use SistemaMotoristaCaracteristicaResource;
    use ClienteMotoristaCaracteristicaResource;
    use ClienteLocalFavoritoResource;
    use ClienteMotoristaResource;
    use SistemaMotivoCancelamentoResource;
    use PosicaoLogResource;
    use VeiculoResource;
    use PosicaoAtualResource;
    use UsuarioContatoSegurancaResource;
    use MotoristaOnlineResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.corrida');
    }
}
