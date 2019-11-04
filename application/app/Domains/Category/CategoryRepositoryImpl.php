<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:42
 */

namespace App\Domains\Category;


use Illuminate\Database\DatabaseManager;

class CategoryRepositoryImpl implements CategoryRepository
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
        return ["data"=>"テーーと"];
    }

    public function getListByCriteria(CategorySearchCriteria $criteria){
        return ["data"=>"テーーと"];
    }

    public function getPaginateListByCriteria(CategorySearchCriteria $criteria){
        return ["data"=>"テーーと"];
    }
}