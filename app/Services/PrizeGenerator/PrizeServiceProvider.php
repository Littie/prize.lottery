<?php

declare(strict_types = 1);

namespace App\Services\PrizeGenerator;

use Illuminate\Support\ServiceProvider;

/**
 * Class PrizeServiceProvider
 * @package App\Services\PrizeGenerator
 */
class PrizeServiceProvider extends ServiceProvider
{
    /**
     * Register bindings.
     */
    public function register()
    {
        $this->app->bind(PrizeGenerateInterface::class, PrizeGenerator::class);
    }
}
