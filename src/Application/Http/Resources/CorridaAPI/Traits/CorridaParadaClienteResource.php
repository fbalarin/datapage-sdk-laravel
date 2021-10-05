<?php
namespace Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait CorridaParadaClienteResource
{
    public function findAllCorridaParadaClientes($agendamentoId, $paradaId, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/corridas/{$agendamentoId}/paradas/{$paradaId}/clientes?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function findByCorridaParadaClienteId($agendamentoId, $paradaId, $id, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/corridas/{$agendamentoId}/paradas/{$paradaId}/clientes/{$id}?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function createCorridaParadaCliente(array $data, $agendamentoId, $paradaId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/corridas/{$agendamentoId}/paradas/{$paradaId}/clientes", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function updateCorridaParadaCliente(array $data, $agendamentoId, $paradaId, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/corridas/{$agendamentoId}/paradas/{$paradaId}/clientes/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }


    public function deleteCorridaParadaCliente($agendamentoId, $paradaId, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/corridas/{$agendamentoId}/paradas/{$paradaId}/clientes/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::DELETE)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
