<?php
namespace Datapage\DatapageSDK\Http\Resources\LogisticaAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\Traits\AtendimentoLogResource;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\Traits\AtendimentoResource;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\Traits\AtendimentoSolicitacaoResource;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\Traits\CategoriaResource;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\Traits\CidadeResource;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\Traits\PosicaoAtualResource;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\Traits\PosicaoLogResource;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\Traits\ServicoResource;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\Traits\SistemaMotivoCancelamentoResource;
use Illuminate\Support\Facades\Config;

class LogisticaAPI extends BaseResource
{
    use CidadeResource;
    use CategoriaResource;
    use ServicoResource;
    use AtendimentoResource;
    use AtendimentoSolicitacaoResource;
    use AtendimentoLogResource;
    use SistemaMotivoCancelamentoResource;
    use PosicaoAtualResource;
    use PosicaoLogResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.logistica');
    }
}
