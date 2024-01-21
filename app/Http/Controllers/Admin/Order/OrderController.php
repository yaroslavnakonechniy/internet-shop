<?php

namespace App\Http\Controllers\Admin\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 1)->get();
        return view('auth.order.index', compact('orders'));
    }

    public function show(Order $order){
        
        return view('auth.order.show', compact('order'));
    }
}