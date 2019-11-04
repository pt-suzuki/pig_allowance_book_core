<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:51
 */

namespace App\Domains\Trademark;


interface TrademarkRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(TrademarkSearchCriteria $criteria);

    public function getPaginateListByCriteria(TrademarkSearchCriteria $criteria);
}