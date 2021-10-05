<?php
namespace Datapage\DatapageSDK\Http\Resources\OcrAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\OcrAPI\Traits\LeituraResource;
use Illuminate\Support\Facades\Config;

class OcrAPI extends BaseResource
{
    use LeituraResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.ocr');
    }
}
