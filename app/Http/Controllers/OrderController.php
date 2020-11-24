<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;

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
        return view('dashboard.orders.index',compact('orders'));
    }

    public function create()
    {
        return view('dashboard.orders.create');
    }

    public function store(OrderRequest $request)
    {
        $dados = $request->all();
        Order::create($request->all());

        return redirect(route('orders.index'));
    }
}
