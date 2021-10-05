<?php

namespace Datapage\DatapageSDK\Support;

class ResponseObject
{
    public $data;
    public $meta;

    public $response;

    public function __construct($response, $apiVersao = 'v1')
    {
        $this->response = $response;

        if ($apiVersao == 'v1') {
            $this->data = json_decode($response)->dados->data ?? null;
            $this->meta = json_decode($response)->dados->meta ?? null;
        } else {
            $this->data = json_decode($response)->dados ?? null;
            $this->meta = json_decode($response)->meta ?? null;
        }
    }

    public function toArray()
    {
        return json_decode($this->response, true);
    }
}
