<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Gift;
use App\Models\Order;
use App\Models\Category;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class GiftController extends Controller
{
  public function fetchAll(Request $request)
  {
    return view('gifts.gifts', ['gifts' => Gift::all(), 'categories' => Category::all(), 'selectedCategory' => null]);
  }

  public function fetch(Request $request)
  {
    $category = $request->category;
    if(!$category || ($category == 'all')){
      $gifts = Gift::all();
    }else{
      $gifts = Gift::where('category_id', $category)->get();
    }
    return view('gifts.gifts', ['gifts' => $gifts, 'categories' => Category::all(), 'selectedCategory' => $request->category]);
  }

  public function create(Request $request)
  {
    $gift = Gift::find($request->gift_id);
    $similar = Gift::where('category_id', $gift->category_id)->limit(4)->get();
    return view('gifts.giftPage', ['gift' => $gift, 'similar' => $similar]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'color' => ['required', 'integer'],
      'quantity' => ['required', 'integer'],
      'vase' => ['required', 'boolean'],
    ]);

    Order::create(
      [
        'gift_id' => $request->gift_id,
        'vase' => $request->vase,
        'color_id' => $request->color,
        'quantity' => $request->quantity,
        'user_id' => Auth::id(),
        'incart' => 1,
      ]
    );


    return redirect("gifts");
  }

  public function cart(Request $request)
  {
    $orders = Order::where('user_id', Auth::id())->where('incart', 1)->get();
    return view('gifts.giftCart', ['orders' => $orders]);
  }

  public function checkout(Request $request)
  {
    Order::where('user_id', Auth::id())->where('incart', 1)->update(['incart' => 0]);
    return redirect("gifts");
  }

  public function removeFromCart(Request $request)
  {
    Order::find($request->order_id)->delete();
    $gifts = Order::where('user_id', Auth::id())->where('incart', 1)->get();
    return redirect("gifts/cart");
  }

  public function payment(Request $request)
  {
    $orders = Order::where('user_id', Auth::id())->where('incart', 1)->get();
    return view('payment.payment', ['event' => null, 'orders' => $orders]);
  }

  public function history(Request $request){
    return view('account.accountHistory', ['orders'=>Auth::user()->orders, 'eventHistory' => false, 'giftHistory' => true]);
  }
}
