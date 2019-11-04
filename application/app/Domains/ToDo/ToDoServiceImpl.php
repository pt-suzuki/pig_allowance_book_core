<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 1:46
 */

namespace App\Domains\ToDo;


use App\Domains\AbstractService;

class ToDoServiceImpl extends AbstractService implements ToDoService
{
    /**
     * @var ToDoRepository
     */
    private $repository;

    public  function __construct(ToDoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getContentById(string $id)
    {
        return $this->repository->getContentById($id);
    }

    public function getListByCriteria(ToDoSearchCriteria $criteria)
    {
        return $this->repository->getListByCriteria($criteria);
    }
    public function getPaginateListByCriteria(ToDoSearchCriteria $criteria)
    {
        return $this->repository->getPaginateListByCriteria($criteria);
    }
}