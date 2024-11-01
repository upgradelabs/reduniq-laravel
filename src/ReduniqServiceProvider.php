<?php

namespace Upgradelabs\Reduniq;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Upgradelabs\ReduniqLaravel\Commands\ReduniqCommand;

class ReduniqServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('reduniq-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_reduniq_table')
            ->hasCommand(ReduniqCommand::class);
    }
}
