<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PaymentDetail extends Model
{
    protected $table = "paymentDetails";
    protected $fillable = [
        'user_id',
        'creditCardNo',
        'pinCode',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}