<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/03
 * Time: 1:12
 */

namespace App\Domains\MyBest;


use App\Domains\AbstractCriteria;
use phpseclib\Math\BigInteger;

class MyBestSearchCriteria extends AbstractCriteria
{
    /**
     * @var integer
     */
    private $product_id;
    /**
     * @var integer
     */
    private $group_id;
    /**
     * @var integer
     */
    private $shop_id;
    /**
     * @var integer
     */
    private $category_id;

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->product_id;
    }

    /**
     * @param int $product_id
     */
    public function setProductId(int $product_id): void
    {
        $this->product_id = $product_id;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->group_id;
    }

    /**
     * @param int $group_id
     */
    public function setGroupId(int $group_id): void
    {
        $this->group_id = $group_id;
    }

    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shop_id;
    }

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

}