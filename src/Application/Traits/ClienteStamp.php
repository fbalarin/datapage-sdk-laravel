<?php

namespace Datapage\DatapageSDK\Traits;

use Illuminate\Support\Facades\Auth;

trait ClienteStamp
{
    public static function bootClienteStamp()
    {
        static::creating(function ($model) {
            $user = Auth::user();

            if ($user->hasRole('cliente')) {
                $model->cliente_id = Auth::user()->id;
            }
        });

        static::updating(function ($model) {
            $user = Auth::user();

            if ($user->hasRole('cliente')) {
                $model->cliente_id = Auth::user()->id;
            }
        });
    }
}
