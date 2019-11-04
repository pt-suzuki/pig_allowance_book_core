<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:23
 */

namespace App\Domains;


class AbstractCriteria
{
    /**
     * @var integer
     */
    private $rows;
    /**
     * @var integer
     */
    private $page;
    /**
     * @var integer
     */
    private $sort;
    /**
     * @var bool
     */
    private $asc;

    /**
     * @return int
     */
    public function getRows(): int
    {
        return $this->rows;
    }

    /**
     * @param int $rows
     */
    public function setRows(int $rows): void
    {
        $this->rows = $rows;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * @param int $sort
     */
    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @return bool
     */
    public function isAsc(): bool
    {
        return $this->asc;
    }

    /**
     * @param bool $asc
     */
    public function setAsc(bool $asc): void
    {
        $this->asc = $asc;
    }
}