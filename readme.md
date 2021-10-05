# Datapage SDK

## Usage Package

> Add dependency to your composer.json
```
"repositories": [
    ...
    {
        "type": "vcs",
        "url": "http://git2.datapage.com.br/ms/datapage-sdk-laravel.git"
    }
],
"require": {
    ...
    "ms/datapage-sdk-laravel": "dev-develop"
}
```

> Do this inside container
```
composer clear-cache

composer config -g secure-http false
```

> Run composer update

```
$ composer update
```

> Add provider in config/app.php

```
'providers' => [
    ...
    Datapage\DatapageSDK\Providers\DatapageSDKProvider::class,
];
```

> Configure an alias to facade

```
'aliases' => [
    ...
    'DatapageSDK' => Datapage\DatapageSDK\Facades\DatapageSDK::class,
]
```

> If this is the first SDK used in the project 

```
$ php artisan vendor:publish --tag="datapage-sdk-config" --force
```

> configure base urls in docker-compose.yml or .env file

```
USUARIO_SDK_BASE_URL=
CORRIDA_SDK_BASE_URL=
PAGAMENTO_SDK_BASE_URL=
CEP_SDK_BASE_URL=
FEED_SDK_BASE_URL=

SUPER_USER_TOKEN="Bearer akspoksaopaskposkaopask"
```

> If use cache

```
CACHE_SDK_CALLS={true|false}
```

## Read the docs:

- [UsuarioAPI](src/Application/Http/Resources/UsuarioAPI/readme.md)
- [CorridaAPI](src/Application/Http/Resources/CorridaAPI/readme.md)
- [PagamentoAPI](src/Application/Http/Resources/PagamentoAPI/readme.md)
- [FeedAPI](src/Application/Http/Resources/FeedAPI/readme.md)
- [CepAPI](src/Application/Http/Resources/CepAPI/readme.md)
