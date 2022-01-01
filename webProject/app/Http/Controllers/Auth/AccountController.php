<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PaymentDetail;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AccountController extends Controller
{
    public function store(Request $data)
    {


        $paymentDetail = PaymentDetail::updateOrCreate(
            [
                'user_id' => Auth::id()
            ],
            [
                'creditCardNo' => $data['creditCardNo'],
                'pinCode' => $data['pinCode'],
                'address' => $data['address'],
            ]
        );

        $event_id = $data['event_id'];

        return redirect("checkout/$event_id");
    }
}
