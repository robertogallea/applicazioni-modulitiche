<?php


namespace Talk\Core;


use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom($this->getPackagePath() . '/routes/web.php');
    }

    private function getPackagePath()
    {
        return __DIR__ . '/..';
    }
}
