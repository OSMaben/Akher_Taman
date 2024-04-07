<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showProduct()
    {
        $products = Products::where('isAccepted', 1)->get();
        return view('homeApp', compact('products'));
    }

    public function detailsProduct($id)
    {
        $details = Products::with('user', 'category')->find($id);
        return view('detials', compact('details'));
    }
}
