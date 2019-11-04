<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:47
 */

namespace App\Domains\User;


use App\Domains\AbstractService;

class UserServiceImpl extends AbstractService implements UserService
{
    /**
     * @var UserRepository
     */
    private $repository;

    public  function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getContentById(string $id)
    {
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(UserSearchCriteria $criteria)
    {
        return $this->repository->getListByCriteria($criteria);
    }
    public function getPaginateListByCriteria(UserSearchCriteria $criteria)
    {
        return $this->repository->getPaginateListByCriteria($criteria);
    }
}