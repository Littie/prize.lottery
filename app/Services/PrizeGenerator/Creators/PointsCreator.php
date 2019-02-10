<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator\Creators;

use App\Models\User;
use App\Services\PrizeGenerator\PrizeCreator;
use App\Services\PrizeGenerator\Prizes\PointsPrize;

/**
 * Class PointsGenerator
 * @package App\Services\PrizeGenerator\Generators
 */
class PointsCreator extends PrizeCreator
{
    /**
     * @param User $user
     *
     * @return mixed
     */
    public function getPrizeCreator(User $user)
    {
        return new PointsPrize($user);
    }
}
