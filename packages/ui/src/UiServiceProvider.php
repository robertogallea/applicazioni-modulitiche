<?php


namespace Talk\Ui;


use Carbon\Laravel\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadViewsFrom($this->getPackagePath() . '/resources/views/', 'talk');
    }

    private function getPackagePath()
    {
        return __DIR__ . '/..';
    }
}
