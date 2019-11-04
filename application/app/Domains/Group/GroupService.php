<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:52
 */

namespace App\Domains\Group;


use Illuminate\Database\Eloquent\Model;

interface GroupService
{
    public function getContentById(string $id);

    public function getListByCriteria(GroupSearchCriteria $criteria);

    public function getPaginateListByCriteria(GroupSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}