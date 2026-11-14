<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Liberu\Cms\Contracts\Tenancy\TenantModelResolverInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    #[\Override]
    public function register(): void
    {
        $this->app->singleton(TenantModelResolverInterface::class, \Liberu\Cms\Core\Tenant\NullTenantResolver::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
