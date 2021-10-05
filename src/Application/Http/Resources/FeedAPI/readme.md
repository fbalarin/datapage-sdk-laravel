## FeedResource
```php
$feedSDK->findAllFeeds($query = '', $headers = [], $apiVersao = 'v1')
$feedSDK->findByFeedId($id, $query = '', $headers = [], $apiVersao = 'v1')
$feedSDK->createFeed(array $data, $headers = [], $apiVersao = 'v1')
$feedSDK->updateFeed(array $data, $id, $headers = [], $apiVersao = 'v1')
$feedSDK->deleteFeed($id, $headers = [], $apiVersao = 'v1')
```

## FeedArquivoResource
```php
$feedSDK->findAllFeedArquivos($feedId, $query = '', $headers = [], $apiVersao = 'v1')
$feedSDK->findByFeedArquivoId($feedId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$feedSDK->createFeedArquivo(array $data, $feedId, $headers = [], $apiVersao = 'v1')
$feedSDK->updateFeedArquivo(array $data, $feedId, $id, $headers = [], $apiVersao = 'v1')
$feedSDK->deleteFeedArquivo($feedId, $id, $headers = [], $apiVersao = 'v1')
```

## FeedComentarioResource
```php
$feedSDK->findAllFeedComentarios($feedId, $query = '', $headers = [], $apiVersao = 'v1')
$feedSDK->findByFeedComentarioId($feedId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$feedSDK->createFeedComentario(array $data, $feedId, $headers = [], $apiVersao = 'v1')
$feedSDK->updateFeedComentario(array $data, $feedId, $id, $headers = [], $apiVersao = 'v1')
$feedSDK->deleteFeedComentario($feedId, $id, $headers = [], $apiVersao = 'v1')
```

## FeedCurtidaResource
```php
$feedSDK->findAllFeedCurtidas($feedId, $query = '', $headers = [], $apiVersao = 'v1')
$feedSDK->findByFeedCurtidaId($feedId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$feedSDK->createFeedCurtida(array $data, $feedId, $headers = [], $apiVersao = 'v1')
$feedSDK->updateFeedCurtida(array $data, $feedId, $id, $headers = [], $apiVersao = 'v1')
$feedSDK->deleteFeedCurtida($feedId, $id, $headers = [], $apiVersao = 'v1')
```
