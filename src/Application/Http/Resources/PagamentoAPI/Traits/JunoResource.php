<?php
namespace Datapage\DatapageSDK\Http\Resources\PagamentoAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;

trait JunoResource
{
    public function listarBancos($headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/lista-bancos/", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function listarAreasNegocios($headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/lista-areas-negocios/", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function consultarSaldoUsuario($usuarioId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/consultar-saldo/{$usuarioId}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function consultarSaldoContaPrincipal($headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/consultar-saldo-conta-principal/", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function criarContaDigital(array $data, $usuarioId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/criar-conta-digital/$usuarioId", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function transferirSaldo(array $data, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/transferir", __FUNCTION__);
        $request->withMethod(HttpMethod::POST)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function atualizarContaDigital(array $data, $usuarioId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/atualizar-conta-digital/$usuarioId", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function cancelarCobrancaByPagamentoId($pagamentoId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/cancelar-cobranca/$pagamentoId", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function estornarPagamentoByPagamentoId($pagamentoId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/estornar-pagamento/$pagamentoId", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function capturarPagamentoByPagamentoId(array $data, $pagamentoId, $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/juno/capturar-pagamento/$pagamentoId", __FUNCTION__);
        $request->withMethod(HttpMethod::PUT)
            ->withBody($data)
            ->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
