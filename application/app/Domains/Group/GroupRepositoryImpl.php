<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:51
 */

namespace App\Domains\Group;


use Illuminate\Database\DatabaseManager;

class GroupRepositoryImpl implements GroupRepository
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

        return ["data"=>"テスト"];
    }
    public function getListByCriteria(GroupSearchCriteria $criteria){
        return ["data"=>"テスト"];
    }
    public function getPaginateListByCriteria(GroupSearchCriteria $criteria){
        return ["data"=>"テスト"];
    }
}