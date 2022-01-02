<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class CheckoutController extends Controller
{
    public function create(Request $request) {

        $event = Event::find($request->event_id);
        return view('payment.payment', ['event' => $event, 'orders' => []]);
    }
}
