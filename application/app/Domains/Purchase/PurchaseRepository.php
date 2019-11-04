<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:48
 */

namespace App\Domains\Purchase;


interface PurchaseRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(PurchaseSearchCriteria $criteria);

    public function getPaginateListByCriteria(PurchaseSearchCriteria $criteria);
}