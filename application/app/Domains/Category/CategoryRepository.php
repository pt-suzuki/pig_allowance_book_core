<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:42
 */

namespace App\Domains\Category;


interface CategoryRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(CategorySearchCriteria $criteria);

    public function getPaginateListByCriteria(CategorySearchCriteria $criteria);
}