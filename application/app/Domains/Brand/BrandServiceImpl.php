<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:41
 */

namespace App\Domains\Brand;


class BrandServiceImpl implements BrandService
{
    /**
     * @var BrandRepository
     */
    private $repository;

    public function __construct(BrandRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get(){
        return ["data"=>"テーーと"];
    }
}