<?php

declare(strict_types = 1);

namespace App\Services\Handlers;

use App\Models\Prize;

/**
 * Class RefuseInterface
 * @package App\Services\Handlers
 */
interface RefuseInterface
{
    /**
     * Refuse to get the prize.
     *
     * @param Prize $prize
     *
     * @return mixed
     */
    public function refuse(Prize $prize);
}
