<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:48
 */

namespace App\Domains\Product;


use Illuminate\Database\Eloquent\Model;

interface ProductService
{
    public function getContentById(string $id);

    public function getListByCriteria(ProductSearchCriteria $criteria);

    public function getPaginateListByCriteria(ProductSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}