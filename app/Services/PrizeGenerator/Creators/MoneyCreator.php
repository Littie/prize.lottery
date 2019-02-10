<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator\Creators;

use App\Models\User;
use App\Services\PrizeGenerator\PrizeCreator;
use App\Services\PrizeGenerator\Prizes\MoneyPrize;

/**
 * Class MoneyGenerator
 * @package App\Services\PrizeGenerator\Generators
 */
class MoneyCreator extends PrizeCreator
{
    /**
     * @param User $user
     *
     * @return MoneyPrize|mixed
     */
    public function getPrizeCreator(User $user)
    {
        return new MoneyPrize($user);
    }
}
