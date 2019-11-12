<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:41
 */

namespace App\Domains\Brand;


use Illuminate\Database\DatabaseManager;

class BrandRepositoryImpl implements BrandRepository
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
        return ["data"=>"自動デプロイ"];
    }

    public function getListByCriteria(BrandSearchCriteria $criteria){
        return ["data"=>"自動デプロイ"];
    }

    public function getPaginateListByCriteria(BrandSearchCriteria $criteria){
        return ["data"=>"自動デプロイ"];
    }
}