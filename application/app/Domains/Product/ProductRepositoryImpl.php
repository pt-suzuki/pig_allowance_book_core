<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:43
 */

namespace App\Domains\Product;


use Illuminate\Database\DatabaseManager;

class ProductRepositoryImpl implements ProductRepository
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
    public function getListByCriteria(ProductSearchCriteria $criteria){
        return ["data"=>"テスト"];
    }
    public function getPaginateListByCriteria(ProductSearchCriteria $criteria){
        return ["data"=>"テスト"];
    }
}