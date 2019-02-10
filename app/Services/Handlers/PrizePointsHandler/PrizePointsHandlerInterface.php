<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizePointsHandler;

use App\Models\Prize;
use App\Services\Handlers\RefuseInterface;

/**
 * Interface PrizePointsHandlerInterface
 * @package App\Services\Handlers\PrizePointsHandler
 */
interface PrizePointsHandlerInterface extends RefuseInterface
{
    /**
     * Transfer money to user account.
     *
     * @param Prize $prize
     *
     * @return mixed
     */
    public function transfer(Prize $prize);
}
