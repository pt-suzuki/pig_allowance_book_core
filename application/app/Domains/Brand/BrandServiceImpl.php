<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:41
 */

namespace App\Domains\Brand;


use App\Domains\AbstractService;
use Illuminate\Support\Facades\Log;

class BrandServiceImpl extends AbstractService implements BrandService
{
    /**
     * @var BrandRepository
     */
    private $repository;

    public function __construct(BrandRepository $repository){
        $this->repository = $repository;
    }

    public function getContentById(string $id){
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(BrandSearchCriteria $criteria){
        return $this->repository->getListByCriteria($criteria);
    }

    public function getPaginateListByCriteria(BrandSearchCriteria $criteria){
        return $this->repository->getPaginateListByCriteria($criteria);
    }
}