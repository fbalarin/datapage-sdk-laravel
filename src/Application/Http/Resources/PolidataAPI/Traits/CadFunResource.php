<?php
namespace Datapage\DatapageSDK\Http\Resources\PolidataAPI\Traits;

use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Datapage\DatapageSDK\Support\RequestBuilder;
use Illuminate\Support\Facades\Cache;

trait CadFunResource
{
    public function findAllColaboradores($query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/colaboradores?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
    public function findAllColaboradoresRaw($query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/colaborador-raw?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
        //funcao com cache
    public function findByIdColaboradoresRaw($empresa,$matricula, $headers = [], $apiVersao = 'v1')
    {
        $cachenome="_cache_".$empresa."__".$matricula;
        $dados=null;
        if (!Cache::has($cachenome))
        {
            $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/colaborador-raw?search=matricula:$matricula;cod_empresa:$empresa&paginacao_ou_todos=todos", __FUNCTION__);
            $request->withHeaders($headers);    
            $retorno= $this->parse($request, $apiVersao);
            if ($retorno->data) {
                $dados=$retorno->data[0];
            }
        }else {
            $retorno=Cache::get($cachenome);   
            return $retorno;

        }
        Cache::put($cachenome,$dados,3000000);
        return $dados;
    }
}
