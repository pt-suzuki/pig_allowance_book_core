<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:47
 */

namespace App\Domains\User;


use Illuminate\Database\DatabaseManager;

class UserRepositoryImpl implements UserRepository
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
    public function getListByCriteria(UserSearchCriteria $criteria){

    }
    public function getPaginateListByCriteria(UserSearchCriteria $criteria){

    }
}