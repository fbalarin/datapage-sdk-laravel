## CidadeResource
```php
$logisticaSDK->findAllCidades($query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->findByCidadeId($id, $query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->createCidade(array $data, $headers = [], $apiVersao = 'v1')
$logisticaSDK->updateCidade(array $data, $id, $headers = [], $apiVersao = 'v1')
$logisticaSDK->deleteCidade($id, $headers = [], $apiVersao = 'v1')
```

## CategoriaResource
```php
$logisticaSDK->findAllCategorias($query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->findByCategoriaId($id, $query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->createCategoria(array $data, $headers = [], $apiVersao = 'v1')
$logisticaSDK->updateCategoria(array $data, $id, $headers = [], $apiVersao = 'v1')
$logisticaSDK->deleteCategoria($id, $headers = [], $apiVersao = 'v1')
```

## ServicoResource
```php
$logisticaSDK->findAllServicos($query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->findByServicoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->createServico(array $data, $headers = [], $apiVersao = 'v1')
$logisticaSDK->updateServico(array $data, $id, $headers = [], $apiVersao = 'v1')
$logisticaSDK->deleteServico($id, $headers = [], $apiVersao = 'v1')
```

## SistemaMotivoCancelamentoResource
```php
$logisticaSDK->findAllSistemaMotivosCancelamentos($query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->findBySistemaMotivoCancelamentoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->createSistemaMotivoCancelamento(array $data, $headers = [], $apiVersao = 'v1')
$logisticaSDK->updateSistemaMotivoCancelamento(array $data, $id, $headers = [], $apiVersao = 'v1')
$logisticaSDK->deleteSistemaMotivoCancelamento($id, $headers = [], $apiVersao = 'v1')
```

## AtendimentoResource
```php
$logisticaSDK->findAllAtendimentos($query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->findByAtendimentoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->createAtendimento(array $data, $headers = [], $apiVersao = 'v1')
$logisticaSDK->updateAtendimento(array $data, $id, $headers = [], $apiVersao = 'v1')
$logisticaSDK->deleteAtendimento($id, $headers = [], $apiVersao = 'v1')
```

## AtendimentoSolicitacaoResource
```php
$logisticaSDK->findAllAtendimentoSolicitacoes($atendimentoId, $query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->findByAtendimentoSolicitacaoId($atendimentoId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->createAtendimentoSolicitacao(array $data, $atendimentoId, $headers = [], $apiVersao = 'v1')
$logisticaSDK->updateAtendimentoSolicitacao(array $data, $atendimentoId, $id, $headers = [], $apiVersao = 'v1')
$logisticaSDK->deleteAtendimentoSolicitacao($atendimentoId, $id, $headers = [], $apiVersao = 'v1')
```

## AtendimentoLogResource
```php
$logisticaSDK->findAllAtendimentoLogs($atendimentoId, $query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->findByAtendimentoLogId($atendimentoId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$logisticaSDK->createAtendimentoLog(array $data, $atendimentoId, $headers = [], $apiVersao = 'v1')
$logisticaSDK->updateAtendimentoLog(array $data, $atendimentoId, $id, $headers = [], $apiVersao = 'v1')
$logisticaSDK->deleteAtendimentoLog($atendimentoId, $id, $headers = [], $apiVersao = 'v1')
```

## PosicaoAtualResource
```php
$veterinarioSDK->findAllPosicaoAtuais($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findPosicaoAtualByUsuarioId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createPosicaoAtual(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updatePosicaoAtual(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deletePosicaoAtual($id, $headers = [], $apiVersao = 'v1')
```

## PosicaoLogResource
```php
$veterinarioSDK->findAllPosicaoLogs($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByPosicaoLogId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createPosicaoLog(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updatePosicaoLog(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deletePosicaoLog($id, $headers = [], $apiVersao = 'v1')
```
