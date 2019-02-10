<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator\Prizes;

use App\Models\Money;
use App\Models\Prize;
use App\Models\User;

class MoneyPrize implements PrizeInterface
{
    /** @var User $user */
    private $user;

    /**
     * MoneyPrize constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Create money prize;
     *
     * @return string
     */
    public function createPrize()
    {
        $prize = $this->user->prize;

        if (null === $prize) {
            $sum = $this->getSum();

            if (null === $sum) {
                return null;
            }

            $money = Money::create(['sum' => $sum]);
            $prize = $money->prize()->create([
                'user_id'    => $this->user->getKey(),
                'prize_type' => Prize::PRIZE_TYPE_MONEY,
            ]);
        }

        return $prize;
    }

    /**
     * Get prize sum.
     *
     * @return int|null
     */
    private function getSum()
    {
        $total = $this->getTotalSum();

        $min = config('prize.money.min');
        $max = config('prize.money.max');

        $sum = rand($min, $max);

        if ($total < $sum) {
            return null;
        }

        \Cache::decrement('money', $sum);

        return $sum;
    }

    /**
     * Get total sum from cache.
     *
     * @return mixed
     */
    private function getTotalSum()
    {
        if (!\Cache::has('money')) {
            \Cache::add('money', config('prize.money.total'), now()->addHours(24));
        }

        return \Cache::get('money');
    }
}
