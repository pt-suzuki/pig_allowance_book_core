<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:56
 */

namespace App\Domains\Brand;


use App\Domains\AbstractCriteria;

class BrandSearchCriteria extends AbstractCriteria
{
    /**
     * @var string | null
     */
    private $name;

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