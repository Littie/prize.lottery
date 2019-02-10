<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator\Prizes;

/**
 * Interface PrizeInterface
 * @package App\Services\PrizeGenerator\Prizes
 */
interface PrizeInterface
{
    /**
     * Create prize.
     *
     * @return mixed
     */
    public function createPrize();
}
