<?php

namespace Datapage\DatapageSDK\Entities;

use Illuminate\Database\Eloquent\Model;

class RequestLog extends Model
{
    protected $table = 'request_logs';
    protected $connection = 'mysql-usuario';

    protected $fillable = [
        'url',
        'method',
        'body',
        'headers',
        'multipart',
        'macrotime',
        'enviar_notificacao',
        'notificacao_enviada',
        'response',
        'registro_id',
        'entidade',
    ];

    protected $casts = [
        'body' => 'array',
        'headers' => 'array',
        'multipart' => 'array',
        'response' => 'array',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
