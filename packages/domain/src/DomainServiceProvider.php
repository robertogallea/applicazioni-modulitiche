<?php


namespace Talk\Domain;


use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom($this->getPackagePath() . '/database/migrations/');
    }

    private function getPackagePath()
    {
        return __DIR__ . '/..';
    }
}
