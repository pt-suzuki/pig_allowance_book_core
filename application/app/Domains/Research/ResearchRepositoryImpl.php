<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:44
 */

namespace App\Domains\Research;


use Illuminate\Database\DatabaseManager;

class ResearchRepositoryImpl implements ResearchRepository
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
    public function getListByCriteria(ResearchSearchCriteria $criteria){

    }
    public function getPaginateListByCriteria(ResearchSearchCriteria $criteria){

    }
}