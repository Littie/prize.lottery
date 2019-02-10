<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizePointsHandler;

use Illuminate\Support\ServiceProvider;

/**
 * Class PrizePointsHandlerServiceProvider
 * @package App\Services\Handlers\PrizePointsHandler
 */
class PrizePointsHandlerServiceProvider extends ServiceProvider
{
    /**
     * Register service.
     */
    public function register()
    {
        $this->app->bind(PrizePointsHandlerInterface::class, PrizePointsHandler::class);
        $this->app->alias(PrizePointsHandlerInterface::class, 'points-handler');
    }
}
