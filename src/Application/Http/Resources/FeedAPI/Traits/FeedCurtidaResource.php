<?php
namespace Datapage\DatapageSDK\Http\Resources\FeedAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait FeedCurtidaResource
{
    public function findAllFeedComentarios($feedId, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/feeds/{$feedId}/curtidas?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function findByFeedComentarioId($feedId, $id, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/feeds/{$feedId}/curtidas/{$id}?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function createFeedComentario(array $data, $feedId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/feeds/{$feedId}/curtidas", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function updateFeedComentario(array $data, $feedId, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/feeds/{$feedId}/curtidas/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }


    public function deleteFeedComentario($feedId, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/feeds/{$feedId}/curtidas/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::DELETE)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
