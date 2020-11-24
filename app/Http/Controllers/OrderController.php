<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where(function($query){
            if(!empty(request()->get('status')))
                $query->status(request()->get('status'));

            if(!empty(request()->get('paid')))
                $query->paid(request()->get('paid'));
        })->get();
        return view('dashboard.orders',compact('orders'));
    }
}
