<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class coloredItem extends Model
{
    protected $table = "coloredItems";
    protected $fillable = [
        'color_id',
        'gift_id',
    ];

    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
