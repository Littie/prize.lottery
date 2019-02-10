<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizeMoneyHandler;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoneyHandlerFacade
 * @package App\Services\Handlers\PrizeMoneyHandler
 */
class MoneyHandlerFacade extends Facade
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
        return 'money-handler';
    }
}
