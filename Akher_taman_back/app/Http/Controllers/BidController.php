<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BidController extends Controller
{

    public function show()
    {
        if (Auth::user()->role_id == 1) {
            $products = Products::all();
        } else
            $products = Products::where('seller_id', Auth::user()->id)->get();

        $lastProduct = Products::where('seller_id',  Auth::user()->id)->latest()->first();
        $bids = $lastProduct->bids;

            return view('bids', compact('products', 'lastProduct','bids'));

    }


    public function productAuction($id)
    {
        $AllProduct = Products::where('seller_id',Auth::user()->id )->get();
        $selectedPro = Products::find($id);
        $selectedProBids = Bid::where('product_id', $id)->orderBy('amount', 'desc')->get();

        return view('bidDetails', compact('AllProduct', 'selectedPro','selectedProBids'));
    }

    public function acceptBid(Request $request, $productId)
    {
        // Check if the product exists
        $product = Product::findOrFail($productId);

        // Check if there are any accepted bids for this product
        if ($product->bids()->where('status', 'accepted')->exists()) {
            return back()->with('error', 'Another bid has already been accepted for this product.');
        }

        // Proceed to accept the bid
        $bidId = $request->input('bid_id');
        $bid = Bid::findOrFail($bidId);
        $bid->status = 'accepted';
        $bid->save();

        return back()->with('success', 'Bid accepted successfully.');
    }


    public function refuseBid($id)
    {
        $findBid = Bid::find($id);
        $findBid->status = 'pending';
        $findBid->acceptance =false;
        $findBid->save();
        toastr()->success('Bid has been Refused successfully!');
        return back();
    }



}
