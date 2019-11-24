<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:44
 */

namespace App\Domains\Purchase;


use App\Domains\AbstractRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Query\Builder;

class PurchaseRepositoryImpl extends AbstractRepository implements  PurchaseRepository
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
        $query =  $this->db->table("purchase")
            ->select("id","name","json_detail","created_at","updated_at")
            ->where("id","=",$id);
        return $query->first();
    }

    public function getListByCriteria(PurchaseSearchCriteria $criteria){
        $query = $this->db->table("purchase")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria)->get();
    }

    public function getPaginateListByCriteria(PurchaseSearchCriteria $criteria){
        $query = $this->db->table("purchase")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria)->paginate($criteria->getRows());
    }

    private function addCriteria(Builder $query,PurchaseSearchCriteria $criteria):Builder{

        return $this->addTimeCriteria($query,$criteria,"purchase");
    }
}