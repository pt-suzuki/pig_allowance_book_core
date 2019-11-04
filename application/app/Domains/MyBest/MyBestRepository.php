<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:47
 */

namespace App\Domains\MyBest;


interface MyBestRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(MyBestSearchCriteria $criteria);

    public function getPaginateListByCriteria(MyBestSearchCriteria $criteria);
}