<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizeMoneyHandler;

use App\Models\Prize;

/**
 * Class PrizeMoneyHandler
 * @package App\Services\Handlers\PrizeMoneyHandler
 */
class PrizeMoneyHandler implements PrizeMoneyHandlerInterface
{
    /**
     * Transfer money to user account.
     *
     * @param Prize $prize
     *
     * @return string
     */
    public function transfer(Prize $prize)
    {
        $prize->update(['is_received' => true]);

        return 'transfered';
    }

    /**
     * Convert money to points
     *
     * @param Prize $prize
     *
     * @return string
     */
    public function convert(Prize $prize)
    {
        $rate = config('prize.points.ration');
        $points = $prize->prizeable->sum * $rate;
        $prize->update(['is_received' => true]);

        return 'Money was converted to points. You have ' . $points . ' points';
    }

    /**
     * Refuse from prize.
     *
     * @param Prize $prize
     *
     * @return string
     */
    public function refuse(Prize $prize)
    {
        $prize->update(['is_received' => true]);

        return 'refused';
    }
}
