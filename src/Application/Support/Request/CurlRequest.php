<?php


namespace Datapage\DatapageSDK\Support\Request;

use Datapage\DatapageSDK\Exceptions\Base\GeneralException;

class CurlRequest
{
    function cUrlGetData($url, $post_fields = null, $headers = null, $method = null, $exception = true)
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        if ($method) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        } elseif ($post_fields && !empty($post_fields)) {
            curl_setopt($ch, CURLOPT_POST, 1);
        }
        if ($post_fields && !empty($post_fields)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
        }
        if ($headers && !empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        if (curl_errno($ch) and $exception) {
            throw new GeneralException("Erro CURL na URL $url ... Erro : " . curl_error($ch));
        }
        curl_close($ch);
        return json_decode($data);
    }
}
