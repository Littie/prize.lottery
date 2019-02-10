<?php

declare(strict_types = 1);

namespace App\Services\Handlers\PrizePresentsHandler;

use Illuminate\Support\ServiceProvider;

/**
 * Class PrizePresentsHandlerServiceProvider
 * @package App\Services\Handlers\PrizePresentsHandler
 */
class PrizePresentsHandlerServiceProvider extends ServiceProvider
{
    /**
     * Register service.
     */
    public function register()
    {
        $this->app->bind(PrizePresentHandlerInterface::class, PrizePresentsHandler::class);
        $this->app->alias(PrizePresentHandlerInterface::class, 'present-handler');
    }
}
