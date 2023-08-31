<?php

namespace App\Providers;


use App\Repositories\ChannelRepository;
use App\Repositories\Interfaces\ChannelRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            ChannelRepositoryInterface::class,
            ChannelRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
