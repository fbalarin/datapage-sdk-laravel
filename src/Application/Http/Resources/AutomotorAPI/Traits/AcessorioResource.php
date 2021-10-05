<?php
namespace Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait AcessorioResource
{
    public function findAllAcessorios($query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/acessorios?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function findByAcessorioId($id, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/acessorios/{$id}?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function createAcessorio(array $data, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/acessorios", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function updateAcessorio(array $data, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/acessorios/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }


    public function deleteAcessorio($id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/acessorios/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::DELETE)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
