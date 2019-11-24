<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:43
 */

namespace App\Domains\Product;


use App\Domains\AbstractRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Query\Builder;

class ProductRepositoryImpl extends AbstractRepository implements ProductRepository
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
        $query =  $this->db->table("products")
            ->select("id","name","json_detail","created_at","updated_at")
            ->where("id","=",$id);
        return $query->first();
    }

    public function getListByCriteria(ProductSearchCriteria $criteria){
        $query = $this->db->table("products")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria)->get();
    }

    public function getPaginateListByCriteria(ProductSearchCriteria $criteria){
        $query = $this->db->table("products")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria)->paginate($criteria->getRows());
    }

    private function addCriteria(Builder $query,ProductSearchCriteria $criteria):Builder{
        if(!empty($criteria->getName())){
            $query->where("name","like", '%' . self::escape_like($criteria->getName()) . '%');
        }
        return $this->addTimeCriteria($query,$criteria,"products");
    }
}