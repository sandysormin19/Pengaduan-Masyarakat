<?php

namespace App\Providers;

use App\Interfaces\ResidentRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\AuthRepositoryInterface;
use App\Repositories\AuthRepository;
use App\Repositories\ResidentRepository;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
      $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class); //
      $this->app->bind(ResidentRepositoryInterface::class, ResidentRepository::class); //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
