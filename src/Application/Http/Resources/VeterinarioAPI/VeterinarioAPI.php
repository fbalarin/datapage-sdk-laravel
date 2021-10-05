<?php
namespace Datapage\DatapageSDK\Http\Resources\VeterinarioAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\AnimalAcompanhamentoResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\AnimalResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\AtendimentoLogResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\AtendimentoResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\AtendimentoSolicitacaoResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\EspecialidadeResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\ExameResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\LaboratorioResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\PosicaoAtualResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\PosicaoLogResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\PrecoResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\SistemaMotivoCancelamentoResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\TipoRacaResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\TipoResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\TiposEspecialidadesResource;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits\VeiculoResource;
use Illuminate\Support\Facades\Config;

class VeterinarioAPI extends BaseResource
{
    use PrecoResource;
    use TipoResource;
    use TipoRacaResource;
    use AnimalResource;
    use AnimalAcompanhamentoResource;
    use VeiculoResource;
    use SistemaMotivoCancelamentoResource;
    use AtendimentoResource;
    use AtendimentoSolicitacaoResource;
    use AtendimentoLogResource;
    use PosicaoLogResource;
    use EspecialidadeResource;
    use LaboratorioResource;
    use TiposEspecialidadesResource;
    use PosicaoAtualResource;
    use ExameResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.veterinario');
    }
}
