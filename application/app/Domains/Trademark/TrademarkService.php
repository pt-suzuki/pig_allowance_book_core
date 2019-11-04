<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:51
 */

namespace App\Domains\Trademark;

use Illuminate\Database\Eloquent\Model;

interface TrademarkService
{
    public function getContentById(string $id);

    public function getListByCriteria(TrademarkSearchCriteria $criteria);

    public function getPaginateListByCriteria(TrademarkSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}