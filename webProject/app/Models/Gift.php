<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $table = "gifts";
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function coloredItems()
    {
        return $this->hasMany(ColoredItem::class);
    }
}
