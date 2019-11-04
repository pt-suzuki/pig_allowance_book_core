<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:41
 */

namespace App\Domains\Brand;


use Illuminate\Database\Eloquent\Model;

interface BrandService
{
    public function getContentById(string $id);

    public function getListByCriteria(BrandSearchCriteria $criteria);

    public function getPaginateListByCriteria(BrandSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}