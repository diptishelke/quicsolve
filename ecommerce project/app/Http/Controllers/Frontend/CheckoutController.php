<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Cart;
use App\Models\Order;

use App\Models\Product;
use App\Models\User;

use App\Models\OrderItem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    { 


        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout',compact('cartitems'));
    }
    public function placeorder(Request $request)
    {
      $order = new Order();
      $order->user_id =Auth::id();
      $order->fname=$request->input('fname');
      $order->lname=$request->input('lname');
      $order->email=$request->input('email');
      $order->phone=$request->input('phone');
      $order->address=$request->input('address');
      $order->state=$request->input('state');
      $order->city=$request->input('city');
      $order->country=$request->input('country');
      $order->pincode=$request->input('pincode');
     $order->save();
     $order->id;
     $cartitems = Cart::where('user_id',Auth::id())->get();
     foreach($cartitems as $item)
     {
         OrderItem::create([
             'order_id'=> $order->id,
             'prod_id'=> $item-> prod_id,
             'qty'=> $item->prod_qty,
             'price'=>$item->products->selling_price,
         ]);

         $prod= Product::where('id',$item->prod_id)->first();
         $prod->qty= $prod->qty - $item->prod_qty;
         $prod->update();
     }
        if(Auth::user()->address== NULL)
        {

            $user=User::where('id',Auth::id())->first();

        $user->name=$request->input('fname');
        $user->lname=$request->input('lname');
        $user->email=$request->input('email');
        $user->phone=$request->input('phone');
        $user->address=$request->input('address');
        $user->state=$request->input('state');
        $user->city=$request->input('city');
        $user->country=$request->input('country');
        $user->pincode=$request->input('pincode');
        $user->update();
        }
        $cartitems = Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartitems);
        return redirect('/')->with('status',"Order placed Succesfully");
    }
}
