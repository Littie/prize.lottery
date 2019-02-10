<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizePresentsHandler;

use App\Models\Prize;
use App\Services\Handlers\RefuseInterface;

/**
 * Interface PrizePresentHandlerInterface
 * @package App\Services\Handlers\PrizePresentsHandler
 */
interface PrizePresentHandlerInterface extends RefuseInterface
{
    /**
     * Deliver present prize to user.
     *
     * @param Prize $prize
     *
     * @return mixed
     */
    public function deliver(Prize $prize);
}
