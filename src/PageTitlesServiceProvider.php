<?php

namespace Aon2003\PageTitles;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Aon2003\PageTitles\Commands\PageTitlesCommand;

class PageTitlesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-page-titles')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-page-titles_table')
            ->hasCommand(PageTitlesCommand::class);
    }
}
