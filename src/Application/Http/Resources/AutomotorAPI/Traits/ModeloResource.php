<?php
namespace Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait ModeloResource
{
    public function findAllModelos($query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/modelos?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function findByModeloId($id, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/modelos/{$id}?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function createModelo(array $data, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/modelos", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function updateModelo(array $data, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/modelos/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }


    public function deleteModelo($id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/modelos/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::DELETE)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
