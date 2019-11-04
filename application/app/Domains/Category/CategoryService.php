<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:42
 */

namespace App\Domains\Category;


use Illuminate\Database\Eloquent\Model;

interface CategoryService
{
    public function getContentById(string $id);

    public function getListByCriteria(CategorySearchCriteria $criteria);

    public function getPaginateListByCriteria(CategorySearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}