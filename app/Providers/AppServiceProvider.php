<?php

namespace App\Providers;

use App\Models\PagosRealizados;
use App\PagosRealizadosInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PagosRealizadosInterface::class, PagosRealizados::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
