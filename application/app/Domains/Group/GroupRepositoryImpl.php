<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:51
 */

namespace App\Domains\Group;


use App\Domains\AbstractRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Query\Builder;

class GroupRepositoryImpl extends AbstractRepository implements GroupRepository
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
        $query =  $this->db->table("groups")
            ->select("id","name","json_detail","created_at","updated_at")
            ->where("id","=",$id);
        return $query->first();
    }

    public function getListByCriteria(GroupSearchCriteria $criteria){
        $query = $this->db->table("groups")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria,"groups")->get();
    }

    public function getPaginateListByCriteria(GroupSearchCriteria $criteria){
        $query = $this->db->table("groups")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria,"groups")->paginate($criteria->getRows());
    }

    public function getMemberListByCriteria(GroupSearchCriteria $criteria){
        $query = $this->db->table("group_relations")
            ->select("id","user.name","user.created_at","user.updated_at");

        return $this->addCriteria($query,$criteria,"group_relations")->get();
    }

    public function getMemberPaginateListByCriteria(GroupSearchCriteria $criteria){
        $query = $this->db->table("group_relations")
            ->select("id","name","json_detail","created_at","updated_at");

        return $this->addCriteria($query,$criteria,"group_relations")->paginate($criteria->getRows());
    }

    private function addCriteria(Builder $query,GroupSearchCriteria $criteria,$alias):Builder{
        if(!empty($criteria->getName())){
            $query->where("name","like", '%' . self::escape_like($criteria->getName()) . '%');
        }
        return $this->addTimeCriteria($query,$criteria,$alias);
    }
}