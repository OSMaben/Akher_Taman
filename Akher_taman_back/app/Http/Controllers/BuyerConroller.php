<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerConroller extends Controller
{
    public function MyBids()
    {
        return view('MyBids');
    }
}
