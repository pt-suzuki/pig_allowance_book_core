<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:49
 */

namespace App\Domains\Research;


interface ResearchRepository
{
    public function getContentById(string $id);

    public function getListByCriteria(ResearchSearchCriteria $criteria);

    public function getPaginateListByCriteria(ResearchSearchCriteria $criteria);
}