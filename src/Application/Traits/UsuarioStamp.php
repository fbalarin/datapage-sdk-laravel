<?php

namespace Datapage\DatapageSDK\Traits;

use Illuminate\Support\Facades\Auth;

trait UsuarioStamp
{
    public static function bootUsuarioStamp()
    {
        static::creating(function ($model) {
            $user = Auth::user();

            if (!$user->hasRole('superuser')) {
                $model->usuario_id = Auth::user()->id;
            }
        });

        static::updating(function ($model) {
            $user = Auth::user();

            if (!$user->hasRole('superuser')) {
                $model->usuario_id = Auth::user()->id;
            }
        });
    }
}
