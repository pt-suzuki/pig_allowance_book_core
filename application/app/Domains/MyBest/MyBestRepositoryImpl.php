<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:42
 */

namespace App\Domains\MyBest;


use App\Domains\AbstractRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Query\Builder;

class MyBestRepositoryImpl extends AbstractRepository implements MyBestRepository
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
        $query =  $this->db->table("my_bests")
            ->select("my_bests.id","my_bests.name","my_bests.json_detail",
                "my_bests.created_at","my_bests.updated_at")
            ->leftJoin("groups","groups.id","=","my_bests.group_id")
            ->leftJoin("products","products.id","=","my_bests.product_id")
            ->leftJoin("shops","shops.id","=","my_bests.shop_id")
            ->leftJoin("categories","categories.id","=","my_bests.category_id")
            ->where("my_bests.id","=",$id);
        return $query->first();
    }

    public function getListByCriteria(MyBestSearchCriteria $criteria){
        $query = $this->db->table("my_bests")
            ->select("my_bests.id","my_bests.name","my_bests.json_detail",
                "my_bests.created_at","my_bests.updated_at")
            ->leftJoin("groups","groups.id","=","my_bests.group_id")
            ->leftJoin("products","products.id","=","my_bests.product_id")
            ->leftJoin("shops","shops.id","=","my_bests.shop_id")
            ->leftJoin("categories","categories.id","=","my_bests.category_id");

        return $this->addCriteria($query,$criteria)->get();
    }

    public function getPaginateListByCriteria(MyBestSearchCriteria $criteria){
        $query = $this->db->table("my_bests")
            ->select("my_bests.id","my_bests.json_detail",
                "my_bests.created_at","my_bests.updated_at")
            ->leftJoin("groups","groups.id","=","my_bests.group_id")
            ->leftJoin("products","products.id","=","my_bests.product_id")
            ->leftJoin("shops","shops.id","=","my_bests.shop_id")
            ->leftJoin("categories","categories.id","=","my_bests.category_id");

        return $this->addCriteria($query,$criteria)->paginate($criteria->getRows());
    }

    private function addCriteria(Builder $query,MyBestSearchCriteria $criteria):Builder{
        if(!empty($criteria->getGroupId())){
            $query->where("group_id","=", $criteria->getGroupId());
        }
        if(!empty($criteria->getCategoryId())){
            $query->where("products.category_id","=", $criteria->getCategoryId());
        }
        if(!empty($criteria->getProductId())){
            $query->where("product_id","=", $criteria->getProductId());
        }
        if(!empty($criteria->getShopId())){
            $query->where("shop_id","=", $criteria->getShopId());
        }

        return $this->addTimeCriteria($query,$criteria,"my_bests");
    }
}