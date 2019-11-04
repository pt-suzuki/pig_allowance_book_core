<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:52
 */

namespace App\Domains\User;


use Illuminate\Database\Eloquent\Model;

interface UserService
{
    public function getContentById(string $id);

    public function getListByCriteria(UserSearchCriteria $criteria);

    public function getPaginateListByCriteria(UserSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}