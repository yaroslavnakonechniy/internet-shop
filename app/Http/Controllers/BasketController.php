<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
        return view('basket', compact('order'));
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        if($order->products->contains($productId)){
            $PivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $PivotRow->count++;
            $PivotRow->update();
        }else{
            $order->products()->attach($productId);
        }

        if(Auth::check()){
            $order->id_user = Auth::id();
            $order->save();
        }

        $product = Product::find($productId);

        session()->flash('success','Товар "' . $product->name . '" додано до корзини');
            
        return redirect()->route('basket');
    }

    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        } 
        $order = Order::find($orderId);

        if($order->products->contains($productId)){
            $PivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($PivotRow->count < 2){
                $order->products()->detach($productId);
            }else{
                $PivotRow->count--;
                $PivotRow->update();
            }
        }

        $product = Product::find($productId);

        session()->flash('warning','Товар "' . $product->name . '" видалено з корзини');
        
        return redirect()->route('basket');
    }

    public function basketPlace()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('order', compact('order'));
    }

    public function basketConfig(Request $request){

        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        

        $success = $order->createOrder( $request->name,$request->phone);

        if($success){
            session()->flash('success', 'Замовлення підверджено');
        }else{
            session()->flash('warning', 'Замовлення не вдaлося підвердити');
        }
        
        return redirect()->route('index');

        

    }
}