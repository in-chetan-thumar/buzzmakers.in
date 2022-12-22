<?php

namespace App\Providers;

use App\Repositories\BlogRepository;
use App\Repositories\CommonRepository;
use App\Repositories\ContactsRepository;
use App\Repositories\NewsRepository;
use App\Repositories\PageRepository;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('role-repo', RoleRepository::class);
        $this->app->singleton('user-repo', UserRepository::class);
        $this->app->singleton('common-repo', CommonRepository::class);
        $this->app->singleton('page-repo', PageRepository::class);
        $this->app->singleton('news-repo', NewsRepository::class);
        $this->app->singleton('blog-repo', BlogRepository::class);
        $this->app->singleton('contacts-repo', ContactsRepository::class);
    }
}
