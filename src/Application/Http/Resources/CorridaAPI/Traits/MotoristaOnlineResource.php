<?php
namespace Datapage\DatapageSDK\Http\Resources\CorridaAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait MotoristaOnlineResource
{
    public function findAllMotoristasOnline($query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/motoristas-online?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function findByMotoristaOnlineId($id, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/motoristas-online/{$id}?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function createMotoristaOnline(array $data, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/motoristas-online", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function updateMotoristaOnline(array $data, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/motoristas-online/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }


    public function deleteMotoristaOnline($id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/motoristas-online/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::DELETE)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
