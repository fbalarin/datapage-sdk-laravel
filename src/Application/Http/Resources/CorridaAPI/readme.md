## CorridaResource
```php
$corridaSDK->findAllCorridas($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByCorridaId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createCorrida(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateCorrida(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteCorrida($id, $headers = [], $apiVersao = 'v1')
```

## CorridaSolicitacaoResource
```php
$corridaSDK->findAllCorridaSolicitacoes($corridaId, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByCorridaSolicitacaoId($corridaId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createCorridaSolicitacao(array $data, $corridaId, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateCorridaSolicitacao(array $data, $corridaId, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteCorridaSolicitacao($corridaId, $id, $headers = [], $apiVersao = 'v1')
```

## CorridaLogResource
```php
$corridaSDK->findAllCorridaLogs($corridaId, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByCorridaLogId($corridaId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createCorridaLog(array $data, $corridaId, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateCorridaLog(array $data, $corridaId, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteCorridaLog($corridaId, $id, $headers = [], $apiVersao = 'v1')
```

## CorridaParadaResource
```php
$corridaSDK->findAllCorridaParadas($corridaId, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByCorridaParadaId($corridaId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createCorridaParada(array $data, $corridaId, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateCorridaParada(array $data, $corridaId, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteCorridaParada($corridaId, $id, $headers = [], $apiVersao = 'v1')
```

## CorridaParadaClienteResource
```php
$corridaSDK->findAllCorridaParadaClientes($corridaId, $paradaId, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByCorridaParadaClienteId($corridaId, $paradaId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createCorridaParadaCliente(array $data, $corridaId, $paradaId, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateCorridaParadaCliente(array $data, $corridaId, $paradaId, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteCorridaParadaCliente($corridaId, $paradaId, $id, $headers = [], $apiVersao = 'v1')
```

## CorridaContatoSegurancaResource
```php
$corridaSDK->findAllCorridaContatosSeguranca($corridaId, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByCorridaContatoSegurancaId($corridaId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createCorridaContatoSeguranca(array $data, $corridaId, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateCorridaContatoSeguranca(array $data, $corridaId, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteCorridaContatoSeguranca($corridaId, $id, $headers = [], $apiVersao = 'v1')
```

## AgendamentoResource
```php
$corridaSDK->findAllAgendamentos($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByAgendamentoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createAgendamento(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateAgendamento(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteAgendamento($id, $headers = [], $apiVersao = 'v1')
```

## AgendamentoParadaResource
```php
$corridaSDK->findAllAgendamentoParadas($agendamentoId, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByAgendamentoParadaId($agendamentoId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createAgendamentoParada(array $data, $agendamentoId, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateAgendamentoParada(array $data, $agendamentoId, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteAgendamentoParada($agendamentoId, $id, $headers = [], $apiVersao = 'v1')
```

## AgendamentoDiaResource
```php
$corridaSDK->findAllAgendamentoDias($agendamentoId, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByAgendamentoDiaId($agendamentoId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createAgendamentoDia(array $data, $agendamentoId, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateAgendamentoDia(array $data, $agendamentoId, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteAgendamentoDia($agendamentoId, $id, $headers = [], $apiVersao = 'v1')
```

## AgendamentoParadaClienteResource
```php
$corridaSDK->findAllAgendamentoParadaClientes($agendamentoId, $paradaId, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByAgendamentoParadaClienteId($agendamentoId, $paradaId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createAgendamentoParadaCliente(array $data, $agendamentoId, $paradaId, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateAgendamentoParadaCliente(array $data, $agendamentoId, $paradaId, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteAgendamentoParadaCliente($agendamentoId, $paradaId, $id, $headers = [], $apiVersao = 'v1')
```

## MotoristaDocumentoResource
```php
$corridaSDK->findAllMotoristaDocumentos($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByMotoristaDocumentoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createMotoristaDocumento(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateMotoristaDocumento(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteMotoristaDocumento($id, $headers = [], $apiVersao = 'v1')
```

## SistemaMotoristaCaracteristicaResource
```php
$corridaSDK->findAllSistemaMotoristaCaracteristicas($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findBySistemaMotoristaCaracteristicaId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createSistemaMotoristaCaracteristica(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateSistemaMotoristaCaracteristica(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteSistemaMotoristaCaracteristica($id, $headers = [], $apiVersao = 'v1')
```

## ClienteMotoristaCaracteristicaResource
```php
$corridaSDK->findAllClienteMotoristaCaracteristicas($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByClienteMotoristaCaracteristicaId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createClienteMotoristaCaracteristica(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateClienteMotoristaCaracteristica(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteClienteMotoristaCaracteristica($id, $headers = [], $apiVersao = 'v1')
```

## ClienteLocalFavoritoResource
```php
$corridaSDK->findAllClienteLocaisFavoritos($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByClienteLocalFavoritoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createClienteLocalFavorito(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateClienteLocalFavorito(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteClienteLocalFavorito($id, $headers = [], $apiVersao = 'v1')
```

## ClienteMotoristaResource
```php
$corridaSDK->findAllClientesMotoristas($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByClienteMotoristaId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createClienteMotorista(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateClienteMotorista(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteClienteMotorista($id, $headers = [], $apiVersao = 'v1')
```

## SistemaMotivoCancelamentoResource
```php
$corridaSDK->findAllSistemaMotivosCancelamentos($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findBySistemaMotivoCancelamentoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createSistemaMotivoCancelamento(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateSistemaMotivoCancelamento(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteSistemaMotivoCancelamento($id, $headers = [], $apiVersao = 'v1')
```

## PosicaoLogResource
```php
$corridaSDK->findAllSistemaPosicaoLogs($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByPosicaoLogId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createPosicaoLog(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updatePosicaoLog(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deletePosicaoLog($id, $headers = [], $apiVersao = 'v1')
```

## VeiculoResource
```php
$corridaSDK->findAllVeiculos($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByVeiculoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createVeiculo(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateVeiculo(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteVeiculo($id, $headers = [], $apiVersao = 'v1')
```

## PosicaoAtualResource
```php
$corridaSDK->findAllPosicoesAtuais($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByPosicaoAtualId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createPosicaoAtual(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updatePosicaoAtual(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deletePosicaoAtual($id, $headers = [], $apiVersao = 'v1')
```

## UsuarioContatoSegurancaResource
```php
$corridaSDK->findAllUsuarioContatosSeguranca($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByUsuarioContatoSegurancaId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createUsuarioContatoSeguranca(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateUsuarioContatoSeguranca(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteUsuarioContatoSeguranca($id, $headers = [], $apiVersao = 'v1')
```

## MotoristaOnlineResource
```php
$corridaSDK->findAllMotoristasOnline($query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->findByMotoristaOnlineId($id, $query = '', $headers = [], $apiVersao = 'v1')
$corridaSDK->createMotoristaOnline(array $data, $headers = [], $apiVersao = 'v1')
$corridaSDK->updateMotoristaOnline(array $data, $id, $headers = [], $apiVersao = 'v1')
$corridaSDK->deleteMotoristaOnline($id, $headers = [], $apiVersao = 'v1')
```
