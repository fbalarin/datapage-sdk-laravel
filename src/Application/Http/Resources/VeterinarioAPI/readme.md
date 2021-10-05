## PrecoResource
```php
$veterinarioSDK->findAllPrecos($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByPrecoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createPreco(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updatePreco(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deletePreco($id, $headers = [], $apiVersao = 'v1')
```

## TipoResource
```php
$veterinarioSDK->findAllTipos($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByTipoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createTipo(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateTipo(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteTipo($id, $headers = [], $apiVersao = 'v1')
```

## TipoRacaResource
```php
$veterinarioSDK->findAllTipoRacas($tipoId, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByTipoRacaId($tipoId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createTipoRaca(array $data, $tipoId, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateTipoRaca(array $data, $tipoId, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteTipoRaca($tipoId, $id, $headers = [], $apiVersao = 'v1')
```

## AnimalResource
```php
$veterinarioSDK->findAllAnimais($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByAnimalId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createAnimal(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateAnimal(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteAnimal($id, $headers = [], $apiVersao = 'v1')
```

## AnimalAcompanhamentoResource
```php
$veterinarioSDK->findAllAnimalAcompanhamentos($animalId, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByAnimalAcompanhamentoId($animalId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createAnimalAcompanhamento(array $data, $animalId, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateAnimalAcompanhamento(array $data, $animalId, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteAnimalAcompanhamento($animalId, $id, $headers = [], $apiVersao = 'v1')
```

## VeiculoResource
```php
$veterinarioSDK->findAllVeiculos($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByVeiculoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createVeiculo(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateVeiculo(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteVeiculo($id, $headers = [], $apiVersao = 'v1')
```

## SistemaMotivoCancelamentoResource
```php
$veterinarioSDK->findAllSistemaMotivosCancelamentos($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findBySistemaMotivoCancelamentoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createSistemaMotivoCancelamento(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateSistemaMotivoCancelamento(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteSistemaMotivoCancelamento($id, $headers = [], $apiVersao = 'v1')
```

## AtendimentoResource
```php
$veterinarioSDK->findAllAtendimentos($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByAtendimentoId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createAtendimento(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateAtendimento(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteAtendimento($id, $headers = [], $apiVersao = 'v1')
```

## AtendimentoSolicitacaoResource
```php
$veterinarioSDK->findAllAtendimentoSolicitacoes($atendimentoId, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByAtendimentoSolicitacaoId($atendimentoId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createAtendimentoSolicitacao(array $data, $atendimentoId, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateAtendimentoSolicitacao(array $data, $atendimentoId, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteAtendimentoSolicitacao($atendimentoId, $id, $headers = [], $apiVersao = 'v1')
```

## AtendimentoLogResource
```php
$veterinarioSDK->findAllAtendimentoLogs($atendimentoId, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByAtendimentoLogId($atendimentoId, $id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createAtendimentoLog(array $data, $atendimentoId, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateAtendimentoLog(array $data, $atendimentoId, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteAtendimentoLog($atendimentoId, $id, $headers = [], $apiVersao = 'v1')
```

## PosicaoLogResource
```php
$veterinarioSDK->findAllPosicaoLogs($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByPosicaoLogId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createPosicaoLog(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updatePosicaoLog(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deletePosicaoLog($id, $headers = [], $apiVersao = 'v1')
```

## LaboratorioResource
```php
$veterinarioSDK->findAllLaboratorios($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByLaboratorioId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createLaboratorio(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateLaboratorio(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteLaboratorio($id, $headers = [], $apiVersao = 'v1')
```

## TiposEspecialidadesResource
```php
$veterinarioSDK->findAllTiposEspecialidades($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByTipoEspecialidadeId($id, $query = '', $headers = [], $apiVersao = 'v1')
```

## PosicaoAtualResource
```php
$veterinarioSDK->findAllPosicaoAtuais($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findPosicaoAtualByUsuarioId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createPosicaoAtual(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updatePosicaoAtual(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deletePosicaoAtual($id, $headers = [], $apiVersao = 'v1')
```

## ExameResource
```php
$veterinarioSDK->findAllExames($query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->findByExameId($id, $query = '', $headers = [], $apiVersao = 'v1')
$veterinarioSDK->createExame(array $data, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->updateExame(array $data, $id, $headers = [], $apiVersao = 'v1')
$veterinarioSDK->deleteExame($id, $headers = [], $apiVersao = 'v1')
```
