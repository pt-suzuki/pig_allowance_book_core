<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:44
 */

namespace App\Domains\Shop;


use App\Domains\AbstractService;

class ShopServiceImpl extends AbstractService implements ShopService
{
    /**
     * @var ShopRepository
     */
    private $repository;

    public  function __construct(ShopRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getContentById(string $id)
    {
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(ShopSearchCriteria $criteria)
    {
        return $this->repository->getListByCriteria($criteria);
    }
    public function getPaginateListByCriteria(ShopSearchCriteria $criteria)
    {
        return $this->repository->getPaginateListByCriteria($criteria);
    }
}