<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sales;
use Illuminate\Support\Facades\Redirect;

class ShopsController extends Controller
{
    public function buy(Request $request)
    {
        sales::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'product_id' => $request->product_id,
            'number' => $request->number,
            'shop_id' => $request->shop_id,
        ]);
        return Redirect::route('shop');

    }
}
