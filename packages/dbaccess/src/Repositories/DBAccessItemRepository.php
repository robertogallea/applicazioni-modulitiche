<?php


namespace Talk\DBAccess\Repositories;


use Talk\Domain\Models\Item;
use Talk\Domain\Repositories\ItemRepositoryInterface;

class DBAccessItemRepository implements ItemRepositoryInterface
{
    public function all()
    {
        return Item::all();
    }
}
