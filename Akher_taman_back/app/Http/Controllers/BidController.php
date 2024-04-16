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
        $lastProduct = NULL;
        $bids = NULL;
        if (Auth::user()->role_id == 1) {
            $products = Products::all();
        } else
        {
            $products = Products::where('seller_id', Auth::user()->id)->get();
            $lastProducts = Products::where('seller_id',  Auth::user()->id)->latest()->first();
            $lastProduct = $lastProducts;
            $bid = $lastProduct->bids;
            $bids = $bid;
        }

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
        $product = Products::find($productId);

        // Check if there are any accepted bids for this product
        if ($product->bids()->where('status', 'accepted')->exists()) {
            return back()->with('error', 'Another bid has already been accepted for this product.');
        }

        // Proceed to accept the bid
        $bidId = $request->input('bid_id');
        $bid = Bid::find($bidId);
        $bid->status = 'accepted';
        $bid->save();

        return back()->with('success', 'Bid accepted successfully.');
    }


    public function refuseBid($id)
    {
        $findBid = Bid::find($id);
        $findBid->status = 'pending';
        $findBid->acceptance = false;
        $findBid->save();
        return back()->with('error', 'Bid has been Refused successfully!');
    }


    public function acceptBids(Request $request, $productId)
    {
        // Check if the product exists
        $product = Products::find($productId);

        // Check if there are any accepted bids for this product
        if ($product->bids()->where('status', 'accepted')->exists()) {
            return back()->with('error', 'Another bid has already been accepted for this product.');
        }

        // Proceed to accept the bid
        $bidId = $request->input('bid_id');
        $bid = Bid::find($bidId);
        $bid->status = 'accepted';
        $bid->acceptance = 1;
        $bid->save();

        return back()->with('success', 'Bid accepted successfully.');
    }


    public function refuseBids($id)
    {
        $findBid = Bid::find($id);
        $findBid->status = 'pending';
        $findBid->acceptance = 0;
        $findBid->save();
        toastr()->success('Bid has been Refused successfully!');
        return back();
    }


    public function acceptedBids()
    {
        $acceptedBids = Bid::where('status', 'accepted')->get();

        $acceptedBidsWithProduct = [];

        foreach ($acceptedBids as $acceptedBid) {
            $product = Products::find($acceptedBid->product_id);

            if ($product) {
                $acceptedBid->product = $product;
                $acceptedBidsWithProduct[] = $acceptedBid;
            }
        }



        $totalAcceptedBids = Bid::where('status', 'accepted')->count();
        $totalAmountAcceptedBids = Bid::where('status', 'accepted')->sum('amount');
        $profit = $totalAmountAcceptedBids - ($totalAcceptedBids * 30);
        $numberOfproducts = Products::where('seller_id', Auth::id())->count();

        return view('acceptedBids', compact('acceptedBidsWithProduct','totalAcceptedBids','totalAmountAcceptedBids', 'profit','numberOfproducts'));
    }


    public function cancelAcceptedBids($id)
    {
        $CancelBid = Bid::find($id);
        $CancelBid->status = 'pending';
        $CancelBid->save();

        return back()->with('success', 'Product Has Been Canceled .');
    }

}
