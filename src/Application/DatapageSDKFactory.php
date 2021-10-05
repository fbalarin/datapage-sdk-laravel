<?php

namespace Datapage\DatapageSDK;

use Datapage\DatapageSDK\Exceptions\ServiceNotImplementedException;
use Datapage\DatapageSDK\Http\Resources\AutomotorAPI\AutomotorAPI;
use Datapage\DatapageSDK\Http\Resources\CatalogoAPI\CatalogoAPI;
use Datapage\DatapageSDK\Http\Resources\CepAPI\CepAPI;
use Datapage\DatapageSDK\Http\Resources\CorridaAPI\CorridaAPI;
use Datapage\DatapageSDK\Http\Resources\FeedAPI\FeedAPI;
use Datapage\DatapageSDK\Http\Resources\NegociacaoAPI\NegociacaoAPI;
use Datapage\DatapageSDK\Http\Resources\OcrAPI\OcrAPI;
use Datapage\DatapageSDK\Http\Resources\PagamentoAPI\PagamentoAPI;
use Datapage\DatapageSDK\Http\Resources\PolidataAPI\PolidataAPI;
use Datapage\DatapageSDK\Http\Resources\PremioAPI\PremioAPI;
use Datapage\DatapageSDK\Http\Resources\UsuarioAPI\UsuarioAPI;
use Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\VeterinarioAPI;
use Datapage\DatapageSDK\Http\Resources\LogisticaAPI\LogisticaAPI;
use Datapage\DatapageSDK\Http\Resources\ComissaoAPI\ComissaoAPI;
use Datapage\DatapageSDK\Http\Resources\VistoriaAPI\VistoriaAPI;
use Datapage\DatapageSDK\Support\Enums\API;

class DatapageSDKFactory
{
    public static function get($api)
    {
        switch ($api) {
            case API::USUARIO:
                return new UsuarioAPI();
            case API::PAGAMENTO:
                return new PagamentoAPI();
            case API::CORRIDA:
                return new CorridaAPI();
            case API::CEP:
                return new CepAPI();
            case API::FEED:
                return new FeedAPI();
            case API::VETERINARIO:
                return new VeterinarioAPI();
            case API::LOGISTICA:
                return new LogisticaAPI();
            case API::PREMIO:
                return new PremioAPI();
            case API::CATALOGO:
                return new CatalogoAPI();
            case API::POLIDATA:
                return new PolidataAPI();
            case API::COMISSAO:
                return new ComissaoAPI();
            case API::AUTOMOTOR:
                return new AutomotorAPI();
            case API::VISTORIA:
                return new VistoriaAPI();
            case API::NEGOCIACAO:
                return new NegociacaoAPI();
            case API::OCR:
                return new OcrAPI();
            default:
                throw new ServiceNotImplementedException("Micro serviço ainda não foi implementado", 400);
        }
    }
}
