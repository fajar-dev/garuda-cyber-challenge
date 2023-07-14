<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $data = Cart::join('products', 'products.id', '=', 'carts.product_id')
        ->where('user_id', '=', Auth::user()->id)
        ->get();
        // dd($data);
        return view('cart', compact('data'));
    }

    public function add($id)
    {
        $cart = new Cart;
        $cart->product_id  = $id;
        $cart->user_id = Auth::user()->id;
        $cart->save();
        return redirect()->route('index')->with('msg','product has been successfully added to cart');
    }


}
