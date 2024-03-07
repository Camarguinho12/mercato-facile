<?php

namespace App\Providers;

use App\Models\Category;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('categories')) {
            View::share('categories',Category::all());
        }
    }
}
