<?php
namespace Datapage\DatapageSDK\Http\Resources\AutomotorAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait VeiculosEntradasResource
{
    public function findAllVeiculosEntradas($query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/veiculos-entradas?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function findByVeiculosEntradasId($id, $query = '', $headers = [], $apiVersao = 'v1')
    {
         return $this->pegarCacheRedis($id, 'veiculos-entradas', $query, $headers, $apiVersao);
    }

    public function findByVeiculosEntradasIdSemCache($id, $query = '', $headers = [], $apiVersao = 'v1')
    {

        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/veiculos-entradas/{$id}?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function createVeiculosEntradas(array $data, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/veiculos-entradas", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function updateVeiculosEntradas(array $data, $id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/veiculos-entradas/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }


    public function deleteVeiculosEntradas($id, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/veiculos-entradas/{$id}", __FUNCTION__);
        $request->withMethod(HttpMethod::DELETE)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

     /**
     * Busca um veiculo na table veiculos-entradas pelos dados da autovist
     *
     * @param array $data
     * @param array $headers
     * @param string $apiVersao
     * @return void
     */
    public function findByAutovist(array $data, $headers = [], $apiVersao = 'v1')  {
        $id = $data['id'];
        $processo = $data['processo'];
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/veiculos-entradas/{$id}/autovist/{$processo}", __FUNCTION__);
        $request->withMethod(HttpMethod::GET)
            ->withHeaders($headers);
        return $this->parse($request, $apiVersao);
    }
}
