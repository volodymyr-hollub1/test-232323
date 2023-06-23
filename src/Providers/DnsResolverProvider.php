<?php

namespace VH\DnsResolver\Providers;

use Illuminate\Support\ServiceProvider;
use VH\DnsResolver\Services\DnsResolver;

class DnsResolverProvider extends ServiceProvider
{
    public function boot()
    {
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DnsResolver', function () {
            return new DnsResolver();
        });
    }
}
