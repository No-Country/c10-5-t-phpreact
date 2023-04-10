<?php

namespace App\Providers;

use App\Cache\CohortCache;
use Illuminate\Support\ServiceProvider;
use App\Contracts\EjemploRepositoryInterface;

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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
