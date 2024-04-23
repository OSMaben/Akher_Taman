<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Products;
use App\Models\User;
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
        $product = Products::with(['bids' => function ($query) {
            $query->orderBy('amount', 'desc');
        }])->findOrFail($id);

        $highestBid = Bid::where('product_id', $id)->orderBy('amount', 'desc')->first();
        $details = Products::with('user', 'category')->find($id);
        return view('detials', compact('product', 'highestBid','details'));
    }

    public function find(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name', 'like', "%$query%")->get();

        return response()->json($users);
    }
}
