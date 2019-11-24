<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/03
 * Time: 1:12
 */

namespace App\Domains\Product;


use App\Domains\AbstractCriteria;

class ProductSearchCriteria extends AbstractCriteria
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