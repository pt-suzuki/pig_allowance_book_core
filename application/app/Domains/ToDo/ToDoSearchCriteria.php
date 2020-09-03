<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/03
 * Time: 1:13
 */

namespace App\Domains\ToDo;


use App\Domains\AbstractCriteria;

class ToDoSearchCriteria extends AbstractCriteria
{
    /**
     * @var ?bool
     */
    private $status;

    /**
     * @return bool
     */
    public function isStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus(?bool $status): void
    {
        $this->status = $status;
    }
}