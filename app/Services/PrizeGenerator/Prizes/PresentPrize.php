<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator\Prizes;

use App\Models\PresentTypes;
use App\Models\Prize;
use App\Models\User;

/**
 * Class PresentPrize
 * @package App\Services\PrizeGenerator\Prizes
 */
class PresentPrize implements PrizeInterface
{
    /** @var User $user */
    private $user;

    /**
     * PresentPrize constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Create present prize.
     *
     * @return mixed|string
     */
    public function createPrize()
    {
        $prize = $this->user->prize;

        if (null === $prize) {
            $presentType = PresentTypes::where('quantity', '>', 0)
                ->inRandomOrder()
                ->first();

            if (null === $presentType) {
                return null;
            }

            $presentType->decrement('quantity');

            $present = $presentType->presents()->create();
            $prize = $present->prize()->create([
                'user_id'    => $this->user->getKey(),
                'prize_type' => Prize::PRIZE_TYPE_PRESENTS,
            ]);
        }

        return $prize;
    }
}
