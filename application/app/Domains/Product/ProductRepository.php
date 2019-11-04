<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:47
 */

namespace App\Domains\Product;


interface ProductRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(ProductSearchCriteria $criteria);

    public function getPaginateListByCriteria(ProductSearchCriteria $criteria);
}