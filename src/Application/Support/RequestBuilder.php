<?php

namespace Datapage\DatapageSDK\Support;

use Datapage\DatapageSDK\Entities\RequestLog;
use Datapage\DatapageSDK\Facades\HttpClient;
use Datapage\DatapageSDK\Support\Enums\HttpMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Datapage\DatapageSDK\Exceptions\Base\GeneralException;
use Illuminate\Foundation\Application;

class RequestBuilder
{
    public $method;
    public $url;
    public $body;
    public $headers;
    public $callerFunction;
    public $multipart;
    private $app;
    private $redis;

    public function __construct($url, $callerFunction, $redis = false)
    {
        $this->method = HttpMethod::GET;
        $this->redis = $redis;
        $this->callerFunction = $callerFunction;
        $this->setarUrl($url);
        $this->app = resolve(Application::class);
    }

    private function setarUrl($url)
    {
        $this->url = $url;
        if ($this->redis) {
            $ultimoCaracterURL = substr($url, -1);
            if (parse_url($url, PHP_URL_QUERY)) {
                if ($ultimoCaracterURL == '&') {
                    $apiToken = 'api_token=' . env('SUPER_USER_API_TOKEN', 'DP2020');
                } else {
                    $apiToken = '&api_token=' . env('SUPER_USER_API_TOKEN', 'DP2020');
                }
            } else {
                if ($ultimoCaracterURL == '?') {
                    $apiToken = 'api_token=' . env('SUPER_USER_API_TOKEN', 'DP2020');
                } else {
                    $apiToken = '?api_token=' . env('SUPER_USER_API_TOKEN', 'DP2020');
                }
            }
            $this->url = $this->url . $apiToken;
        }
    }

    public function withBody(array $body)
    {
        $this->body = $body;
        return $this;
    }

    public function withHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function withMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function withMultipart(array $data)
    {
        $this->multipart = $data;
    }

    public function send()
    {
        try {
//            if ($this->method == HttpMethod::POST and isset($this->multipart)) {
//                return HttpClient::post($this->url, ['multipart' => $this->multipart, 'headers' => $this->headers])->getBody()->getContents();
//            }
//
//            $params = ['form_params' => $this->body];
//            if ($this->headers) {
//                $params = ['headers' => $this->headers, 'form_params' => $this->body];
//            }
//
//            $request = HttpClient::{$this->method}($this->url, $params)->getBody()->getContents();

//            return $request;

            $ch = curl_init();
            $timeout = 10;
            curl_setopt($ch, CURLOPT_URL, $this->url);
            if ($this->method == HttpMethod::POST) {
                curl_setopt($ch, CURLOPT_POST, 1);
            } elseif ($this->method == HttpMethod::PUT) {
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            } elseif ($this->method == HttpMethod::DELETE) {
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
            }
            if ($this->body) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($this->body));
            }

            if (!$this->redis) {
                if ($this->headers) {
                    $headers = array_merge($this->headers, ['Authorization:' . $this->getAuthToken()]);
                } else {
                    $headers = ['Authorization:' . $this->getAuthToken()];
                }
            } else {
                $headers = $this->headers;
            }

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $data = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
                exit();
            }
            curl_close($ch);
            return $data;
        } catch (\Exception $exception) {
        }
        return (string)'{"error":"1"}';
    }

    private function storeRequestLog($macroTime, $requisicaoFalha = false, $enviarNotificacao = false)
    {
        return RequestLog::create([
            'url' => $this->url,
            'method' => $this->method,
            'body' => json_encode($this->body),
            'headers' => json_encode($this->headers),
            'multipart' => json_encode($this->multipart),
            'macrotime' => $macroTime,
            'requisicao_falha' => $requisicaoFalha,
            'enviar_notificacao' => $enviarNotificacao
        ]);
    }

    private function getAuthToken()
    {
        $token = Request::capture()->header('Authorization', null);
        if (is_null($token) or $this->app->runningInConsole() or $token == '') {
            $token = Config::get('datapage_sdk.super_user_token');
        }

        return $token;
    }
}
