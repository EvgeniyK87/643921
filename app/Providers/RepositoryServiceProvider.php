<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\IssueRepositoryInterface;
use App\Repositories\IssueRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IssueRepositoryInterface::class, IssueRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
