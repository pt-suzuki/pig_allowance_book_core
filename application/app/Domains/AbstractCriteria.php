<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:23
 */

namespace App\Domains;


abstract class AbstractCriteria
{
    /**
     * @var integer | null
     */
    private $rows;
    /**
     * @var integer | null
     */
    private $page;
    /**
     * @var integer | null
     */
    private $sort;
    /**
     * @var bool | null
     */
    private $asc;
    /**
     * @var string | null
     */
    private $created_at_from;
    /**
     * @var string | null
     */
    private $created_at_to;
    /**
     * @var string | null
     */
    private $updated_at_from;
    /**
     * @var string | null
     */
    private $updated_at_to;


    /**
     * @return ?int
     */
    public function getRows(): ?int
    {
        return $this->rows;
    }

    /**
     * @param ?int $rows
     */
    public function setRows(?int $rows): void
    {
        $this->rows = $rows;
    }

    /**
     * @return ?int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param ?int $page
     */
    public function setPage(?int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return ?int
     */
    public function getSort(): ?int
    {
        return $this->sort;
    }

    /**
     * @param ?int $sort
     */
    public function setSort(?int $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @return ?bool
     */
    public function isAsc(): ?bool
    {
        return $this->asc;
    }

    /**
     * @param ?bool $asc
     */
    public function setAsc(?bool $asc): void
    {
        $this->asc = $asc;
    }

    /**
     * @return null|string
     */
    public function getCreatedAtFrom(): ?string
    {
        return $this->created_at_from;
    }

    /**
     * @param null|string $created_at_from
     */
    public function setCreatedAtFrom(?string $created_at_from): void
    {
        $this->created_at_from = $created_at_from;
    }

    /**
     * @return null|string
     */
    public function getCreatedAtTo(): ?string
    {
        return $this->created_at_to;
    }

    /**
     * @param null|string $created_at_to
     */
    public function setCreatedAtTo(?string $created_at_to): void
    {
        $this->created_at_to = $created_at_to;
    }

    /**
     * @return ?string
     */
    public function getUpdatedAtFrom(): ?string
    {
        return $this->updated_at_from;
    }

    /**
     * @param ?string $updated_at_from
     */
    public function setUpdatedAtFrom(?string $updated_at_from): void
    {
        $this->updated_at_from = $updated_at_from;
    }

    /**
     * @return ?string
     */
    public function getUpdatedAtTo(): ?string
    {
        return $this->updated_at_to;
    }

    /**
     * @param ?string $updated_at_to
     */
    public function setUpdatedAtTo(?string $updated_at_to): void
    {
        $this->updated_at_to = $updated_at_to;
    }
}