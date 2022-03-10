<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function addOrder() {
        $order = \App\Models\Order::get();
        return view('Order.index')
               ->with('orders',$order);
    }
    
    public function save(Request $request) {
        $input = $request->all();
        echo $input['name'];
        echo $input['email'];
        echo $input['phone'];
        echo $input['gender'];
        
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $gender = $request->input('gender');
        
        $order = new \App\Models\Order();
        $order->field['name'] = $name;
        $order->field['email'] = $email;
        $order->field['phone'] = $phone;
        $order->field['gender'] = $gender;
        $order->add();
    }
}