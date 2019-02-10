<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizeMoneyHandler;

use App\Models\Prize;
use App\Services\Handlers\RefuseInterface;

/**
 * Class PrizeMoneyHandlerInterface
 * @package App\Services\Handlers\PrizeMoneyHandler
 */
interface PrizeMoneyHandlerInterface extends RefuseInterface
{
    public function transfer(Prize $prize);

    public function convert(Prize $prize);
}
