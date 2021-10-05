<?php
namespace Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait GerarAlertaAnuncioBemResource
{

    public function gerarAlertaAnuncioBem($anuncioId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/gerar-alertas-anuncio-bem/$anuncioId", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
