<?php
namespace Datapage\DatapageSDK\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

trait MotoristaQuery
{
    protected static function bootMotoristaQuery()
    {
        static::addGlobalScope(new class() implements Scope
        {
            public function apply(Builder $builder, Model $model)
            {
                $user = Auth::user();
                if ($user->hasRole('motorista')){
                    $builder->where('motorista_id', '=', $user->id);
                }
            }
        });
    }

}
