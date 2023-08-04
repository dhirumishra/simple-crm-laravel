<?php

namespace App\Providers;

use App\Repository\Eloquents\BaseRepository;
use App\Repository\Eloquents\ClientRepository;
use App\Repository\Eloquents\Interfaces\ClientRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(EloquentRepositoryInterface::class,BaseRepository::class);
        $this->app->bind(ClientRepositoryInterface::class,ClientRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
