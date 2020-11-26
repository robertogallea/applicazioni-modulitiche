<?php


namespace Talk\Domain\Models;


use Illuminate\Database\Eloquent\Model;
use Talk\Domain\Factories\ItemFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return new ItemFactory();
    }
}
