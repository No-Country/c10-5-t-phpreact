<?php

namespace App\Providers;

use App\Cache\CohortCache;
use App\Cache\TeamCalificationCache;
use Illuminate\Support\ServiceProvider;
use App\Contracts\EjemploRepositoryInterface;
use App\Contracts\TeamCalificationRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{   
    protected $binding = [
        
    ];
    
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(EjemploRepositoryInterface::class, CohortCache::class);
        $this->app->bind(TeamCalificationRepositoryInterface::class, TeamCalificationCache::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
