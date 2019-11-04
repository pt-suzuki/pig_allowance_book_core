<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:40
 */

namespace App\Domains\Brand;


interface BrandRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(BrandSearchCriteria $criteria);

    public function getPaginateListByCriteria(BrandSearchCriteria $criteria);
}