<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:50
 */

namespace App\Domains\Shop;


interface ShopRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(ShopSearchCriteria $criteria);

    public function getPaginateListByCriteria(ShopSearchCriteria $criteria);
}