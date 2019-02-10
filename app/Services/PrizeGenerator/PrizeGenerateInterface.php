<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator;

/**
 * Interface PrizeGenerateInterface
 * @package App\Services\PrizeGenerator
 */
interface PrizeGenerateInterface
{
    /**
     * Generate prize.
     */
    public function generate();
}
