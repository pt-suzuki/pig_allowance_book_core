<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:51
 */

namespace App\Domains\Group;


interface GroupRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(GroupSearchCriteria $criteria);

    public function getPaginateListByCriteria(GroupSearchCriteria $criteria);
}