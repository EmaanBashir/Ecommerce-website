<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'gift_id',
        'vase',
        'color_id',
        'quantity',
        'user_id',
        'incart',
    ];

    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
