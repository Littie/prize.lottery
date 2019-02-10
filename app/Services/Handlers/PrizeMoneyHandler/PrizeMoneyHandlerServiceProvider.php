<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizeMoneyHandler;

use Illuminate\Support\ServiceProvider;

/**
 * Class PrizeMoneyHandlerServiceProvider
 * @package App\Services\Handlers\PrizeMoneyHandler
 */
class PrizeMoneyHandlerServiceProvider extends ServiceProvider
{
    /**
     * Register service.
     */
    public function register()
    {
        $this->app->bind(PrizeMoneyHandlerInterface::class, PrizeMoneyHandler::class);
        $this->app->alias(PrizeMoneyHandlerInterface::class, 'money-handler');
    }
}
