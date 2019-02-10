<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizePointsHandler;

use App\Models\Prize;

/**
 * Class PrizePointsHandler
 * @package App\Services\Handlers\PrizePointsHandler
 */
class PrizePointsHandler implements PrizePointsHandlerInterface
{
    /**
     * Transfer money on user account.
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
