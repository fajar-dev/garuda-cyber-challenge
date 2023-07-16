<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $data['product'] = Cart::join('products', 'products.id', '=', 'carts.product_id')
        ->where('user_id', '=', Auth::user()->id)
        ->get();
        $data['sum'] = Cart::join('products', 'products.id', '=', 'carts.product_id')
        ->where('user_id', '=', Auth::user()->id)
        ->sum('price');
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

    public function delete($id)
    {
        $cart = Cart::where('user_id', Auth::user()->id) ->where('id_cart', '=', $id);
        $cart->delete();
        return redirect()->route('cart')->with('msg','product has been successfully deleted from cart');
    }
}
