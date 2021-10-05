<?php
namespace Datapage\DatapageSDK\Http\Resources\FeedAPI;

use Datapage\DatapageSDK\Http\Resources\BaseResource;
use Datapage\DatapageSDK\Http\Resources\FeedAPI\Traits\FeedArquivoResource;
use Datapage\DatapageSDK\Http\Resources\FeedAPI\Traits\FeedComentarioResource;
use Datapage\DatapageSDK\Http\Resources\FeedAPI\Traits\FeedCurtidaResource;
use Datapage\DatapageSDK\Http\Resources\FeedAPI\Traits\FeedResource;
use Illuminate\Support\Facades\Config;

class FeedAPI extends BaseResource
{
    use FeedResource;
    use FeedArquivoResource;
    use FeedComentarioResource;
    use FeedCurtidaResource;

    function __construct()
    {
        $this->baseUrl = Config::get('datapage_sdk.addresses.feed');
    }
}
