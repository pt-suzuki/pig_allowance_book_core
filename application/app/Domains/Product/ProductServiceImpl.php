<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:43
 */

namespace App\Domains\Product;


use App\Domains\AbstractService;

class ProductServiceImpl extends AbstractService implements ProductService
{
    /**
     * @var ProductRepository
     */
    private $repository;

    public  function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getContentById(string $id)
    {
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(ProductSearchCriteria $criteria)
    {
        return $this->repository->getListByCriteria($criteria);
    }
    public function getPaginateListByCriteria(ProductSearchCriteria $criteria)
    {
        return $this->repository->getPaginateListByCriteria($criteria);
    }

    public function getDropDownListByCriteria(ProductSearchCriteria $criteria){
        $list = $this->getListByCriteria($criteria);

        $result = array();
        foreach ($list as $item) {
            $result[count($result)] = array("code"=> $item->id,"name"=>$item->name);
        }
        return $result;
    }
}