<?php
namespace Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait CorridaSolicitacaoResource
{
    public function findAllCorridaSolicitacoes($corridaId, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/corridas/{$corridaId}/solicitacoes?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function findByCorridaSolicitacaoId($corridaId, $id, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/corridas/{$corridaId}/solicitacoes/{$id}?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function createCorridaSolicitacao(array $data, $corridaId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/corridas/{$corridaId}/solicitacoes", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function updateCorridaSolicitacao(array $data, $corridaId, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/corridas/{$corridaId}/solicitacoes/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }


    public function deleteCorridaSolicitacao($corridaId, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/corridas/{$corridaId}/solicitacoes/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::DELETE)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
