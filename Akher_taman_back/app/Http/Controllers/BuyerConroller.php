<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerConroller extends Controller
{
    public function MyBids()
    {
        $user = Auth::user();
        $userBids = $user->bids()->with('product')->get();

        return view('MyBids', compact('userBids'));
    }

    public function CancelBid($id)
    {
        $bid = Bid::find($id);
        $bid->delete();

        return back()->with('success', 'Your Bid Has Been Canceled');
    }


    public function MyAcceptedBid()
    {
        $user = Auth::user();
        $userBids = $user->bids()->with('product')->where('status', 'pending')->get();

        return view('MyacceptedBid', compact('userBids'));
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

}
