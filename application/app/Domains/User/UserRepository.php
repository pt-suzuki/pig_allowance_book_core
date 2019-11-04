<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:51
 */

namespace App\Domains\User;


interface UserRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(UserSearchCriteria $criteria);

    public function getPaginateListByCriteria(UserSearchCriteria $criteria);
}