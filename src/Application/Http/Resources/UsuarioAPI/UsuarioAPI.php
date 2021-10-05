<?php
namespace Datapage\DatapageSDK\Http\Resources\UsuarioAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\AgendamentoResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\AutoVistResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\ClubeBeneficioResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\EnderecoResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\GrupoClienteResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\GrupoLocalResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\SegmentoLocalResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\TipoLocalResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\CarteiraResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\CidadeResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\ConteudoResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\DocumentoLeadResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\LocalResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\MensagemResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\NotificacaoResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\PermissionsResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\RequestLogResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\RolesResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\TipoServicoResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\UnidadeNegocioResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\UploadArquivoResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\UsuarioAcaoResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\UsuarioCidadeResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\UsuarioGrupoClienteResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\UsuarioLocalRoleResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\UsuarioResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\UsuarioRelacaoResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\UsuarioWhitelabelResource;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits\WhitelabelResource;
use Illuminate\Support\Facades\Config;

class UsuarioAPI extends BaseResource
{
    use UsuarioResource;
    use RolesResource;
    use PermissionsResource;
    use MensagemResource;
    use NotificacaoResource;
    use CidadeResource;
    use ConteudoResource;
    use UsuarioRelacaoResource;
    use RequestLogResource;
    use LocalResource;
    use CarteiraResource;
    use TipoLocalResource;
    use GrupoClienteResource;
    use UsuarioGrupoClienteResource;
    use WhitelabelResource;
    use UsuarioWhitelabelResource;
    use UnidadeNegocioResource;
    use GrupoLocalResource;
    use TipoServicoResource;
    use ClubeBeneficioResource;
    use UsuarioAcaoResource;
    use UsuarioLocalRoleResource;
    use UploadArquivoResource;
    use UsuarioCidadeResource;
    use SegmentoLocalResource;
    use EnderecoResource;
    use AgendamentoResource;
    use AutoVistResource;
    use DocumentoLeadResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.usuario');
    }
}
