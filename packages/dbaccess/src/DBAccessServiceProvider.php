<?php


namespace Talk\DBAccess;


use Illuminate\Support\ServiceProvider;
use Talk\DBAccess\Repositories\DBAccessItemRepository;
use Talk\Domain\Repositories\ItemRepositoryInterface;

class DBAccessServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind(
            ItemRepositoryInterface::class,
            DBAccessItemRepository::class
        );
    }

    private function getPackagePath()
    {
        return __DIR__ . '/..';
    }
}
