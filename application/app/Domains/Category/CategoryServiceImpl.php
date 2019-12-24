<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:42
 */

namespace App\Domains\Category;


use App\Domains\AbstractService;
use Illuminate\Support\Facades\Log;

class CategoryServiceImpl extends AbstractService implements CategoryService
{
    /**
     * @var CategoryRepository
     */
    private $repository;

    public  function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getContentById(string $id)
    {
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(CategorySearchCriteria $criteria)
    {
        return $this->repository->getListByCriteria($criteria);
    }
    public function getPaginateListByCriteria(CategorySearchCriteria $criteria)
    {
        return $this->repository->getPaginateListByCriteria($criteria);
    }

    public function getDropDownListByCriteria(CategorySearchCriteria $criteria){
        $list = $this->getListByCriteria($criteria);

        $result = array();
        foreach ($list as $item) {
            $result[count($result)] = array("code"=> $item->id,"name"=>$item->name);
        }
        return $result;
    }
}