<?php

namespace Datapage\DatapageSDK\Http\Resources;

use Datapage\DatapageSDK\Exceptions\Base\GeneralException;
use Datapage\DatapageSDK\Support\RequestBuilder;
use Datapage\DatapageSDK\Support\ResponseObject;
use Datapage\DatapageSDK\Support\Traits\Cacheable;

class BaseResource
{
    use Cacheable;

    protected $baseUrl;

    protected function parse(RequestBuilder $builder, $apiVersao = 'v1')
    {
        $builderUrl = $builder->url;
        if ($builderUrl == '' or !$builderUrl or (stripos($builderUrl, '{{') !== false) or (stripos($builderUrl, '}}') !== false)){
            throw new GeneralException('URL SDK inválida: ' . $builderUrl);
        }
        $key = $this->buildCacheKey(get_called_class(), $builder->callerFunction, $builder->url);

        if($this->isCacheAllowed($builder->callerFunction)) {
            if($cache = $this->hasCache($key)) {
                return new ResponseObject($cache, $apiVersao);
            }
        }

        $response = new ResponseObject($builder->send(), $apiVersao);

        if($this->isCacheAllowed($builder->callerFunction)) {
            $this->putOnCache($key, $response->toArray());
        }

        return $response;
    }
}
