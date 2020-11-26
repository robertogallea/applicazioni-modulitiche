<?php


namespace Talk\APIAccess\Repositories;


use Illuminate\Support\Facades\Http;
use Talk\Domain\Models\Item;
use Talk\Domain\Repositories\ItemRepositoryInterface;

class APIAccessItemRepository implements ItemRepositoryInterface
{
    public function all()
    {
        $apiResponse = Http::get('https://gorest.co.in/public-api/comments');

        return collect($apiResponse->json('data'))->map(function ($item) {
            return Item::factory()->make([
                'name' => $item['name'],
                'description' => $item['body'],
                'created_at' => $item['created_at'],
            ]);
        });

    }
}
