<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:44
 */

namespace App\Domains\Purchase;


use Illuminate\Database\DatabaseManager;

class PurchaseRepositoryImpl implements  PurchaseRepository
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
    public function getListByCriteria(PurchaseSearchCriteria $criteria){

    }
    public function getPaginateListByCriteria(PurchaseSearchCriteria $criteria){

    }
}