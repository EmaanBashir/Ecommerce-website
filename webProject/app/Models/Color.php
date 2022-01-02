<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = "colors";
    protected $fillable = [
        'color',
    ];

    public function coloredItems()
    {
        return $this->hasMany(ColoredItem::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
