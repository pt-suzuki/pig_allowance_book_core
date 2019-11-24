<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:46
 */

namespace App\Domains\Shop;


use App\Domains\AbstractRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Query\Builder;

class ShopRepositoryImpl extends AbstractRepository implements ShopRepository
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
        $query =  $this->db->table("shops")
            ->select("id","name","json_detail","created_at","updated_at")
            ->where("id","=",$id);
        return $query->first();
    }

    public function getListByCriteria(ShopSearchCriteria $criteria){
        $query = $this->db->table("shops")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria)->get();
    }

    public function getPaginateListByCriteria(ShopSearchCriteria $criteria){
        $query = $this->db->table("shops")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria)->paginate($criteria->getRows());
    }

    private function addCriteria(Builder $query,ShopSearchCriteria $criteria):Builder{

        return $this->addTimeCriteria($query,$criteria,"shops");
    }
}