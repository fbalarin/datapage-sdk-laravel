<?php
namespace Datapage\DatapageSDK\Http\Resources\UsuarioAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

trait NotificacaoResource
{
    public function createNotificacao(array $data, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/notificacoes", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
