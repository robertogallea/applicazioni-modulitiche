<?php


namespace Talk\APIAccess;


use Illuminate\Support\ServiceProvider;
use Talk\APIAccess\Repositories\APIAccessItemRepository;
use Talk\Domain\Repositories\ItemRepositoryInterface;

class APIAccessServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind(
            ItemRepositoryInterface::class,
            APIAccessItemRepository::class
        );
    }

    private function getPackagePath()
    {
        return __DIR__ . '/..';
    }
}
