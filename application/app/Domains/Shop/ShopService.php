<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:49
 */

namespace App\Domains\Shop;


use Illuminate\Database\Eloquent\Model;

interface ShopService
{
    public function getContentById(string $id);

    public function getListByCriteria(ShopSearchCriteria $criteria);

    public function getPaginateListByCriteria(ShopSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}