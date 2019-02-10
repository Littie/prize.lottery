<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator;

use App\Services\PrizeGenerator\Creators\MoneyCreator;
use App\Services\PrizeGenerator\Creators\PointsCreator;
use App\Services\PrizeGenerator\Creators\PresentsCreator;

/**
 * Class PrizeGenerator
 * @package App\Services\PrizeGenerator
 */
class PrizeGenerator implements PrizeGenerateInterface
{
    /**
     * Generate Prize.
     */
    public function generate()
    {
        $excludeClass = null;

        do {
            $prizeCreator = $this->getPrizeCreatorClass($excludeClass);
            $instance = new $prizeCreator();

            $prize = $instance->create();
            $excludeClass = $prizeCreator;
        } while ($prize === null);

        return $prize;
    }

    /**
     * Generate prize class.
     *
     * @param $excludeClass
     *
     * @return string
     */
    private function getPrizeCreatorClass($excludeClass): string
    {
        $prizes = [
            MoneyCreator::class,
            PointsCreator::class,
            PresentsCreator::class,
        ];

        if (null !== $excludeClass) {
            unset($prizes[$excludeClass]);
        }

        return $prizes[array_rand($prizes)];
    }
}
