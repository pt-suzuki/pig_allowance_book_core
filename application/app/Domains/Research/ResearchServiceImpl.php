<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:44
 */

namespace App\Domains\Research;


use App\Domains\AbstractService;

class ResearchServiceImpl extends AbstractService implements ResearchService
{
    /**
     * @var ResearchRepository
     */
    private $repository;

    public  function __construct(ResearchRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getContentById(string $id)
    {
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(ResearchSearchCriteria $criteria)
    {
        return $this->repository->getListByCriteria($criteria);
    }
    public function getPaginateListByCriteria(ResearchSearchCriteria $criteria)
    {
        return $this->repository->getPaginateListByCriteria($criteria);
    }
}