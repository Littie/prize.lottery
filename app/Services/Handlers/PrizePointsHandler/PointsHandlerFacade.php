<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizePointsHandler;

use Illuminate\Support\Facades\Facade;

class PointsHandlerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'points-handler';
    }
}
