<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator\Prizes;

use App\Models\Points;
use App\Models\Prize;
use App\Models\User;

/**
 * Class PointsPrize
 * @package App\Services\PrizeGenerator\Prizes
 */
class PointsPrize implements PrizeInterface
{
    /** @var User $user */
    private $user;

    /**
     * PointsPrize constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Create points prize.
     *
     * @return mixed|string
     */
    public function createPrize()
    {
        $prize = $this->user->prize;

        if (null === $prize) {
            $sum = $this->getSum();

            $point = Points::create(['sum' => $sum]);
            $prize = $point->prize()->create([
                'user_id'    => $this->user->getKey(),
                'prize_type' => Prize::PRIZE_TYPE_POINTS,
            ]);
        }

        return $prize;
    }

    /**
     * Get points sum.
     *
     * @return int
     */
    private function getSum()
    {
        $min = config('prize.points.min');
        $max = config('prize.points.max');

        return rand($min, $max);
    }
}
