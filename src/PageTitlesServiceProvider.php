<?php

declare(strict_types=1);

namespace Aon2003\PageTitles;

use Aon2003\PageTitles\Middleware\PageTitles;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PageTitlesServiceProvider extends PackageServiceProvider
{
    /**
     * @param  Package  $package
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-page-titles');
    }

    /**
     * Publishes modules files and registers a 'page-titles' middleware,
     *
     * @return PageTitlesServiceProvider
     */
    public function boot(): PageTitlesServiceProvider
    {
        $this->publishes([
            __DIR__.'/../config/page-titles.php' => config_path('page-titles.php'),
            __DIR__.'/../src/lang/en/page-titles.php' => base_path('lang/en/page-titles.php'),
        ], ['laravel-page-titles', 'page-titles']);

        app('router')->aliasMiddleware('page-titles', PageTitles::class);

        return parent::boot();
    }
}
