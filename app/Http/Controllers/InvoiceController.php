<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function checkout()
    {
        Cart::where('user_id', Auth::user()->id)
        ->where('invoice_uuid', '=', null)
        ->update([
            'invoice_uuid' => Uuid::generate()
        ]);
    }
}
