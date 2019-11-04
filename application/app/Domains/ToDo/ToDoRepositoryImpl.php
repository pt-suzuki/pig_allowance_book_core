<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:46
 */

namespace App\Domains\ToDo;


use Illuminate\Database\DatabaseManager;

class ToDoRepositoryImpl implements ToDoRepository
{
    /**
     * @var DatabaseManager
     */
    private $db;

    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    public function getContentById(string $id){

    }
    public function getListByCriteria(ToDoSearchCriteria $criteria){

    }
    public function getPaginateListByCriteria(ToDoSearchCriteria $criteria){

    }
}