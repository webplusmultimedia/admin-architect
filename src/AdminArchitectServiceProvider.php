<?php

namespace Webplusmultimedia\AdminArchitect;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Webplusmultimedia\AdminArchitect\Commands\AdminArchitectCommand;

class AdminArchitectServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-architect')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admin-architect_table')
            ->hasCommand(AdminArchitectCommand::class);
    }
}
