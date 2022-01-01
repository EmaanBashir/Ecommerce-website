<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = "prices";
    protected $fillable = [
        'type',
        'theme',
        'price',
    ];

    public function events()
    {
        return $this->belongsTo(Event::class);
    }
    
}