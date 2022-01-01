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

class EventsController extends Controller
{

    public function store(Request $request)
    {
		$request->validate([
            'theme' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'time' => ['required'],
			'guestsExpected' => ['required', 'integer'],
			'photography' => ['required', 'string', 'max:255'],
			'description' => ['required', 'string', 'max:255'],
        ]);

    	$event = new Event;
    	$event->customer_id = Auth::id();
    	$event->type = $request['type'];
    	$event->theme = $request['theme'];
    	$event->location = $request['location'];
    	$event->time = $request['time'];
    	$event->guestsExpected = $request['guestsExpected'];
    	$event->photography = $request['photography'];
    	$event->description = $request['description'];
    	$event->save();

		return redirect("account/$event->id");
    }
}