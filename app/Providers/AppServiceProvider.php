<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\TeamCalificationRepositoryInterface;
use App\Contracts\TeamRepositoryInterface;
use App\Repositories\TeamCalificationRepository;
use App\Repositories\TeamRepository;

class AppServiceProvider extends ServiceProvider
{   
   
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);
        $this->app->bind(TeamCalificationRepositoryInterface::class, TeamCalificationRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
