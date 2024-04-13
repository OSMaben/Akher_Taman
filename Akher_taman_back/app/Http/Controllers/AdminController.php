<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function show()
    {
        if(Auth::user()->role_id == 1)
        {
            $products = Products::all();
        }else
            $products = Products::where('seller_id',Auth::user()->id)->get();
        $categories = Categories::all();
        return view('products', compact('products', 'categories'));
    }

    public function refuseProduct($productId)
    {
        $product = Products::findOrFail($productId);
        $product->isAccepted = 0;
        $product->save();

        toastr()->success('Product has been refused successfully!');
        return back()->with('refused');
    }

    public function acceptProduct($productId)
    {
        $product = Products::findOrFail($productId);
        $product->isAccepted = 1;
        $product->save();
        toastr()->success('Product has been accept successfully!');
        return back()->with('accepted');
    }

}
