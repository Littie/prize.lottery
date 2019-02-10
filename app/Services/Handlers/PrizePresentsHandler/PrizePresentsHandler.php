<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizePresentsHandler;

use App\Models\Prize;

/**
 * Class PrizePresentsHandler
 * @package App\Services\Handlers\PrizePresentsHandler
 */
class PrizePresentsHandler implements PrizePresentHandlerInterface
{
    /**
     * Deliver prize to user.
     *
     * @param Prize $prize
     *
     * @return string
     */
    public function deliver(Prize $prize)
    {
        $prize->update(['is_received' => true]);
        
        return 'delivered';
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
