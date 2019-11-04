<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:52
 */

namespace App\Domains\Group;


use App\Domains\AbstractService;

class GroupServiceImpl  extends AbstractService implements GroupService
{
    /**
     * @var GroupRepository
     */
    private $repository;

    public  function __construct(GroupRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getContentById(string $id)
    {
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(GroupSearchCriteria $criteria)
    {
        return $this->repository->getListByCriteria($criteria);
    }
    public function getPaginateListByCriteria(GroupSearchCriteria $criteria)
    {
        return $this->repository->getPaginateListByCriteria($criteria);
    }
}