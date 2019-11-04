<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:46
 */

namespace App\Domains\Shop;


use Illuminate\Database\DatabaseManager;

class ShopRepositoryImpl implements ShopRepository
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
    public function getListByCriteria(ShopSearchCriteria $criteria){

    }
    public function getPaginateListByCriteria(ShopSearchCriteria $criteria){

    }
}