<?php


namespace Datapage\DatapageSDK\Traits;

use Datapage\DatapageSDK\Support\RequestBuilder;
use Illuminate\Support\Facades\Redis;

trait RedisCache
{
    public function pegarCacheRedis($id, $recurso, $query, $headers, $apiVersao)
    {
        $urlIDLimpo = "{$this->baseUrl}/api/$apiVersao/$recurso/{$id}";
        $url = "{$this->baseUrl}/api/$apiVersao/$recurso/{$id}?{$query}";
        if (empty($query)) {
            $url = $urlIDLimpo;
        }
        // var_dump($url);
        // dd('oi',$url);
        $retorno = Redis::get($url . '|conteudo');
        if (!empty($retorno)) {
            $retorno = json_decode($retorno);
        } else {
            $request = new RequestBuilder($url, __FUNCTION__, true);
            $request->withHeaders($headers);
            $retorno = $this->parse($request, $apiVersao);

            $response = json_decode($retorno->response);

            if (!is_null($response) and isset($response->erro) and ($response->erro != 1)){
                if(!empty($retorno->data) && $apiVersao=='v2'){ 
                    $retorno = $retorno->data;
                }
                Redis::set($url . '|conteudo', json_encode($retorno));
                Redis::lpush($urlIDLimpo, $url);
                
                $cachePrincipal=$this->baseUrl.str_replace('api_token='.env('SUPER_USER_API_TOKEN', 'DP2020').'&','',str_replace('&api_token='.env('SUPER_USER_API_TOKEN', 'DP2020'),'',urldecode(isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : env('APP_URL'))));
                if($urlIDLimpo!=$cachePrincipal){
                    Redis::lpush($urlIDLimpo, $cachePrincipal);
                }
            } else {
                $retorno = null;
            }
        }
        return $retorno;
    }

    public function pegarCacheInternoMsById($baseUrl, $id, $recurso, $apiVersao,$objetoEloquent, $chave)
    {
        $urlIDLimpo = "$baseUrl/api/$apiVersao/$recurso/{$id}";
        $retorno = Redis::get($urlIDLimpo . '|conteudo');
        if (!empty($retorno)) {
            $retorno = json_decode($retorno,true);
        } else {
            if ($objetoEloquent->$chave) {
                $retorno = $objetoEloquent->$chave->toArray();
                // dd($retorno);
                Redis::set($urlIDLimpo . '|conteudo', json_encode($retorno));
                Redis::lpush($urlIDLimpo, $urlIDLimpo);

                $cachePrincipal=$baseUrl.str_replace('api_token='.env('SUPER_USER_API_TOKEN', 'DP2020').'&','',str_replace('&api_token='.env('SUPER_USER_API_TOKEN', 'DP2020'),'',urldecode($_SERVER["REQUEST_URI"])));
                if($urlIDLimpo!=$cachePrincipal){
                    Redis::lpush($urlIDLimpo, $cachePrincipal);
                }                
            } else {
                $retorno = null;
            }
        }
        
        if (is_array($retorno) and array_key_exists('data', $retorno)){
            $retorno = $retorno['data'];
        }
        
        return $retorno;
    }
}
