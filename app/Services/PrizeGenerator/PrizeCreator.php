<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator;

use App\Models\User;

/**
 * Class PrizeCreator
 * @package App\Services\PrizeGenerator
 */
abstract class PrizeCreator
{
    /**
     * @param User $user
     *
     * @return mixed
     */
    abstract public function getPrizeCreator(User $user);

    /**
     * Generate Prize.
     */
    public function create()
    {
        $prize = $this->getPrizeCreator(\Auth::user());

        return $prize->createPrize();
    }
}
