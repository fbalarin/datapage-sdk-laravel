<?php


namespace Datapage\DatapageSDK\Redis\Jobs;

use Datapage\DatapageSDK\Support\Request\CurlRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Redis;

class LimparCacheJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $retryAfter = 3;

    protected $urlIDLimpo;

    /**
     * LimparCacheJob constructor.
     * @param string $urlIDLimpo
     */
    public function __construct(string $urlIDLimpo)
    {
        $this->urlIDLimpo = $urlIDLimpo;
    }

    /**
     * @throws \Datapage\DatapageSDK\Exceptions\Base\GeneralException
     */
    public function handle()
    {
        $urlIDLimpo = $this->urlIDLimpo;
        $caches = Redis::lrange($urlIDLimpo, 0, -1);
        $urls = [];
        foreach ($caches as $ch) {
            $urls[] = [
                'url' => $ch,
                'headers' => [
                    'origin' => 'http://localhost'
                ]
            ];
            Redis::del($ch . '|conteudo');
        }
        Redis::del($urlIDLimpo);

        $cloudFlareZona = env('CLOUDFLARE_ZONE');

        $curlRequest = new CurlRequest();
        $curlRequest->cUrlGetData(
            "https://api.cloudflare.com/client/v4/zones/$cloudFlareZona/purge_cache",
            json_encode(['files' => $urls]),
            ['X-Auth-Email: ' . env('CLOUDFLARE_AUTH_EMAIL'), 'X-Auth-Key: ' . env('CLOUDFLARE_AUTH_KEY')],
            null,
            false
        );
    }
}
