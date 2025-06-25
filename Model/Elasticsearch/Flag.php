<?php
/**
 * ManiyaTech
 *
 * @author        Milan Maniya
 * @package       ManiyaTech_OutOfStockAtLast
 */

declare(strict_types=1);

namespace ManiyaTech\OutOfStockAtLast\Model\Elasticsearch;

/**
 * Class Flag for determine and ignore Using Price indexing
 */
class Flag
{
    /**
     * @var bool
     */
    private $isApplied = false;

    /**
     * Apply flag
     *
     * @return void
     */
    public function apply()
    {
        $this->isApplied = true;
    }

    /**
     * Stop applying flag
     *
     * @return void
     */
    public function stop()
    {
        $this->isApplied = false;
    }

    /**
     * Determine flag
     *
     * @return bool
     */
    public function isApplied(): bool
    {
        return $this->isApplied;
    }
}
