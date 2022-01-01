<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $fillable = [
        'customer_id',
        'type',
        'theme',
        'location',
        'time',
        'guestsExpected',
        'photography',
        'description',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class, 'theme', 'theme')->where('type', $this->type);
    }
    
}