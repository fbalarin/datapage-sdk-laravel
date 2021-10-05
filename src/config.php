<?php

return [
    'addresses' => [
        'usuario' => env('USUARIO_SDK_BASE_URL'),
        'pagamento' => env('PAGAMENTO_SDK_BASE_URL'),
        'corrida' => env('CORRIDA_SDK_BASE_URL'),
        'cep' => env('CEP_SDK_BASE_URL'),
        'feed' => env('FEED_SDK_BASE_URL'),
        'veterinario' => env('VETERINARIO_SDK_BASE_URL'),
        'logistica' => env('LOGISTICA_SDK_BASE_URL'),
        'premio' => env('PREMIO_SDK_BASE_URL'),
        'catalogo' => env('CATALOGO_SDK_BASE_URL'),
        'polidata' => env('POLIDATA_SDK_BASE_URL'),
        'comissao' => env('COMISSAO_SDK_BASE_URL'),
        'automotor' => env('AUTOMOTOR_SDK_BASE_URL'),
        'vistoria' => env('VISTORIA_SDK_BASE_URL'),
        'negociacao' => env('NEGOCIACAO_SDK_BASE_URL'),
        'ocr' => env('OCR_SDK_BASE_URL'),
    ],
    'cache_sdk_calls' => env('CACHE_SDK_CALLS', false),
    'super_user_token' => env('SUPER_USER_TOKEN'),
    'min_macrotime' => env('SDK_MIN_MACROTIME', 2)
];
