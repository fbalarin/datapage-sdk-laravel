<?php
namespace Datapage\DatapageSDK\Http\Resources\PagamentoAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait YapayPagamentoResource
{
    public function consultarPagamentoYapay($pagamentoId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/consultar-pagamento-yapay/{$pagamentoId}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function cancelarPagamentoYapay($pagamentoId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/cancelar-pagamento-yapay/{$pagamentoId}", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
