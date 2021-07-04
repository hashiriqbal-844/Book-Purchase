<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\Crud;


use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function cart()
    {
        $pid = Crud::find(request()->id);
        $cartItem = Cart::add([
            'id' => $pid->id,
            'name' => $pid->name,
            'qty' => request()->qty,
            'price' => $pid->price,

        ]);

        Cart::associate($cartItem->rowId,'App\Models\Crud');
        return redirect('/index/cart');

    }
    public function cartpage()
    {
        return view('/cart');
    }
    public function delete($id)
    {
        Cart::remove($id);
        return redirect('/index/cart');
    }
    public function incr($id,$qty)
    {
        Cart::update($id,$qty + 1);
        return redirect('/index/cart');
    }
    public function decr($id,$qty)
    {
        Cart::update($id,$qty - 1);
        return redirect('/index/cart');
    }
    public function rapid_add($id)
    {
        $pid = Crud::find($id);
        $cartItem = Cart::add([
            'id' => $pid->id,
            'name' => $pid->name,
            'qty' => 1,
            'price' => $pid->price,

        ]);

        Cart::associate($cartItem->rowId,'App\Models\Crud');
        return redirect('/index/cart');

    } 
}
