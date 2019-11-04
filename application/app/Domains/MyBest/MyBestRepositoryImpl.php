<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:42
 */

namespace App\Domains\MyBest;


use Illuminate\Database\DatabaseManager;

class MyBestRepositoryImpl implements MyBestRepository
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
    public function getListByCriteria(MyBestSearchCriteria $criteria){
        return ["data"=>"テスト"];
    }
    public function getPaginateListByCriteria(MyBestSearchCriteria $criteria){
        return ["data"=>"テスト"];
    }
}