<?php
declare(strict_types=1);

namespace Rentacar\ServiceProvider;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

    }
    public function register(): void
    {
        $repositories = require __DIR__.'/dependencyInjection/repositories.php';
        $useCases = require __DIR__.'/dependencyInjection/useCases.php';

        $bindClasses = [...$repositories, ...$useCases];

        foreach ($bindClasses as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    }
}