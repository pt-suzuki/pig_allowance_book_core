<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:43
 */

namespace App\Domains\Purchase;


use App\Domains\AbstractService;

class PurchaseServiceImpl extends AbstractService implements PurchaseService
{
    /**
     * @var PurchaseRepository
     */
    private $repository;

    public  function __construct(PurchaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getContentById(string $id)
    {
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(PurchaseSearchCriteria $criteria)
    {
        return $this->repository->getListByCriteria($criteria);
    }
    public function getPaginateListByCriteria(PurchaseSearchCriteria $criteria)
    {
        return $this->repository->getPaginateListByCriteria($criteria);
    }
}