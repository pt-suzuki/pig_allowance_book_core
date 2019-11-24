<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/03
 * Time: 1:12
 */

namespace App\Domains\Group;


use App\Domains\AbstractCriteria;

class GroupSearchCriteria extends AbstractCriteria
{
    /**
     * @var string | null
     */
    private $name;
    /**
     * @var
     */
    private $user_id;

    /**
     * @return string | null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string | null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}