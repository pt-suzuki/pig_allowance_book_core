<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:46
 */

namespace App\Domains\Trademark;


use Illuminate\Database\DatabaseManager;

class TrademarkRepositoryImpl implements TrademarkRepository
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

    }
    public function getListByCriteria(TrademarkSearchCriteria $criteria){

    }
    public function getPaginateListByCriteria(TrademarkSearchCriteria $criteria){

    }
}