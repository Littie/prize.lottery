<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizePresentsHandler;

use Illuminate\Support\Facades\Facade;

/**
 * Class PresentsHandlerFacade
 * @package App\Services\Handlers\PrizePresentsHandler
 */
class PresentsHandlerFacade extends Facade
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
        return 'present-handler';
    }
}
