<?php
namespace App\Traits;

use SebastianBergmann\CodeCoverage\Node\Builder;

trait Multitenantable
{
     public static function bootMultitenantable(){
        if(auth()->check()){
            static::addGlobalScope('firm_id', function (Builder $builder){
                $builder->where('firm_id', auth()->user()->firm_id);
            });

            static::creating(function ($model){
                $model->firm_id = auth()->user()->firm_id;
            });
        }
     }
}
