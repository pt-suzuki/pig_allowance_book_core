<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:47
 */

namespace App\Domains\User;


use App\Domains\AbstractRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Query\Builder;

class UserRepositoryImpl extends AbstractRepository implements UserRepository
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
        $query =  $this->db->table("users")
            ->select("id","name","json_detail","created_at","updated_at")
            ->where("id","=",$id);
        return $query->first();
    }

    public function getListByCriteria(UserSearchCriteria $criteria){
        $query = $this->db->table("users")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria)->get();
    }

    public function getPaginateListByCriteria(UserSearchCriteria $criteria){
        $query = $this->db->table("trademarks")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria)->paginate($criteria->getRows());
    }

    private function addCriteria(Builder $query,UserSearchCriteria $criteria):Builder{

        return $this->addTimeCriteria($query,$criteria,"trademarks");
    }
}