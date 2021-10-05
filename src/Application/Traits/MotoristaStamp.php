<?php

namespace Datapage\DatapageSDK\Traits;

use Illuminate\Support\Facades\Auth;

trait MotoristaStamp
{
    public static function bootMotoristaStamp()
    {
        static::creating(function ($model) {
            $user = Auth::user();

            if ($user->hasRole('motorista')) {
                $model->motorista_id = Auth::user()->id;
            }
        });

        static::updating(function ($model) {
            $user = Auth::user();

            if ($user->hasRole('motorista')) {
                $model->motorista_id = Auth::user()->id;
            }
        });
    }
}
