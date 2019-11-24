<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/14
 * Time: 13:27
 */

namespace App\Domains;


use Illuminate\Database\Query\Builder;

abstract class AbstractRepository
{
    protected function escape_like(string $value, string $char = '\\'): string
    {
        return str_replace([$char, '%', '_'], [$char.$char, $char.'%', $char.'_'], $value);
    }

    protected function addTimeCriteria(Builder $query,AbstractCriteria $criteria,$snipet){
        if(!empty($criteria->getCreatedAtFrom())){
            $query->whereDate($snipet .".created_at",">=",$criteria->getCreatedAtFrom());
        }
        if(!empty($criteria->getCreatedAtTo())){
            $query->whereDate($snipet .".created_at","<=",$criteria->getCreatedAtTo());
        }
        if(!empty($criteria->getUpdatedAtFrom())){
            $query->whereDate($snipet .".updated_at",">=",$criteria->getUpdatedAtFrom());
        }
        if(!empty($criteria->getUpdatedAtTo())){
            $query->whereDate($snipet .".updated_at","<=",$criteria->getUpdatedAtTo());
        }
        return $query;
    }
}