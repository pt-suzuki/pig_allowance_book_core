<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:49
 */

namespace App\Domains\Research;


use Illuminate\Database\Eloquent\Model;

interface ResearchService
{
    public function getContentById(string $id);

    public function getListByCriteria(ResearchSearchCriteria $criteria);

    public function getPaginateListByCriteria(ResearchSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}