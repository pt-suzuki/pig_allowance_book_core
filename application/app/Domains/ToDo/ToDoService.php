<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:50
 */

namespace App\Domains\ToDo;


use Illuminate\Database\Eloquent\Model;

interface ToDoService
{
    public function getContentById(string $id);

    public function getListByCriteria(ToDoSearchCriteria $criteria);

    public function getPaginateListByCriteria(ToDoSearchCriteria $criteria);

    public function save(Model $model);

    public function delete(Model $model);
}