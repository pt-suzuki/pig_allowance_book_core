<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:48
 */

namespace App\Domains\Purchase;


use Illuminate\Database\Eloquent\Model;

interface PurchaseService
{
    public function getContentById(string $id);

    public function getListByCriteria(PurchaseSearchCriteria $criteria);

    public function getPaginateListByCriteria(PurchaseSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}