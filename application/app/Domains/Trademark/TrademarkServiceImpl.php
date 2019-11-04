<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:47
 */

namespace App\Domains\Trademark;


use App\Domains\AbstractService;

class TrademarkServiceImpl extends AbstractService implements TrademarkService
{
    /**
     * @var TrademarkRepository
     */
    private $repository;

    public  function __construct(TrademarkRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getContentById(string $id)
    {
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(TrademarkSearchCriteria $criteria)
    {
        return $this->repository->getListByCriteria($criteria);
    }
    public function getPaginateListByCriteria(TrademarkSearchCriteria $criteria)
    {
        return $this->repository->getPaginateListByCriteria($criteria);
    }
}