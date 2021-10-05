<?php
namespace Datapage\DatapageSDK\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

trait UsuarioQuery
{
    protected static function bootUsuarioQuery()
    {
        static::addGlobalScope(new class() implements Scope
        {
            public function apply(Builder $builder, Model $model)
            {
                $user = Auth::user();
                if (!$user->hasRole('superuser')) {
                    $builder->where('usuario_id', '=', $user->id);
                }
            }
        });
    }

}
