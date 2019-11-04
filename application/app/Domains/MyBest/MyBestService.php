<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:47
 */

namespace App\Domains\MyBest;


use Illuminate\Database\Eloquent\Model;

interface MyBestService
{
    public function getContentById(string $id);

    public function getListByCriteria(MyBestSearchCriteria $criteria);

    public function getPaginateListByCriteria(MyBestSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}