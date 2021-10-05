## PagamentoResource
```php
$pagamentoSDK->findAllPagamentos($query = '', $headers = [], $apiVersao = 'v1')
$pagamentoSDK->findByPagamentoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$pagamentoSDK->createPagamento(array $data, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->updatePagamento(array $data, $id, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->deletePagamento($id, $headers = [], $apiVersao = 'v1')
```

## FormaPagamentoResource
```php
$pagamentoSDK->findAllFormasPagamentos($query = '', $headers = [], $apiVersao = 'v1')
$pagamentoSDK->findByFormaPagamentoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$pagamentoSDK->createFormaPagamento(array $data, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->updateFormaPagamento(array $data, $id, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->deleteFormaPagamento($id, $headers = [], $apiVersao = 'v1')
```

## CartaoResource
```php
$pagamentoSDK->findAllCartoes($query = '', $headers = [], $apiVersao = 'v1')
$pagamentoSDK->findByCartaoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$pagamentoSDK->createCartao(array $data, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->updateCartao(array $data, $id, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->updateCartoesEmpresaUsuario($empresaUsuarioId, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->deleteCartao($id, $headers = [], $apiVersao = 'v1')
```

## YapayPagamentoResource
```php
$pagamentoSDK->consultarPagamentoYapay($pagamentoId, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->cancelarPagamentoYapay($pagamentoId, $headers = [], $apiVersao = 'v1')
```

## ContaResource
```php
$pagamentoSDK->findAllContas($query = '', $headers = [], $apiVersao = 'v1')
$pagamentoSDK->findByContaId($id, $query = '', $headers = [], $apiVersao = 'v1')
$pagamentoSDK->createConta(array $data, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->updateConta(array $data, $id, $headers = [], $apiVersao = 'v1')
$pagamentoSDK->deleteConta($id, $headers = [], $apiVersao = 'v1')
```
