<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:46
 */

namespace App\Domains\ToDo;


use App\Domains\AbstractRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Query\Builder;

class ToDoRepositoryImpl extends AbstractRepository implements ToDoRepository
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
        $query =  $this->db->table("todo")
            ->select("id","json_detail","created_at","updated_at")
            ->where("id","=",$id);
        return $query->first();
    }

    public function getListByCriteria(ToDoSearchCriteria $criteria){
        $query = $this->createSelectQuery();

        return $this->addCriteria($query,$criteria)->get();
    }

    public function getPaginateListByCriteria(ToDoSearchCriteria $criteria){
        $query = $this->createSelectQuery();

        return $this->addCriteria($query,$criteria)->paginate($criteria->getRows());
    }

    public function createSelectQuery(){
        return $this->db->table("todo")
            ->select("todo.id","todo.created_at","todo.updated_at","todo.group_id","todo.status",
                "products.name as product_name","trademarks.name as trademark_name",
                "products.id as product_id","trademarks.id as trademark_id","products.category_id as category_id",
                $this->db->raw("todo.json_detail->>'memo' as memo"),"todo.priority")
            ->leftJoin("products","products.id","=","todo.product_id")
            ->leftJoin("trademarks","trademarks.id","=","todo.trademark_id");
    }

    private function addCriteria(Builder $query,ToDoSearchCriteria $criteria):Builder{
        $query->orderBy("created_at","asc");
        $query->orderBy("id","asc");

        if($criteria->isStatus() != null){
            $query->where("todo.status","=",$criteria->isStatus() == 0);
        }

        return $this->addTimeCriteria($query,$criteria,"todo");
    }
}