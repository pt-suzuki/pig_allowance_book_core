<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:50
 */

namespace App\Domains\ToDo;


interface ToDoRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(ToDoSearchCriteria $criteria);

    public function getPaginateListByCriteria(ToDoSearchCriteria $criteria);
}