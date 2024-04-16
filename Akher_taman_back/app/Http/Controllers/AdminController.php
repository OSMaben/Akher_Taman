<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Roles;
use App\Models\User;
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


    public function manageUser()
    {
        $users = User::count();
        $Products= Products::count();
        $Bids = Bid::count();

        $authUser = Auth::user();
        $allUsers = User::where('id', '!=', $authUser->id)->get();
        $roles = Roles::where('role_type', '!=', $authUser->role->role_type)->get();

        return view('manageUser', compact('users','Products','Bids','allUsers','roles'));
    }


    public function ChangeRole(Request $request, $id)
    {
        $role_id = $request->RoleName;
        $user = User::find($id);

        $user->role_id = $role_id;
        $user->save();
        return back()->with('success', 'User role has been changed');
    }


    public function DeleteUser($id)
    {

        $user = User::find($id);
        $user->delete();

        return back()->with('success', 'product has been deleted');
    }

    public function undoDeletion($id)
    {
//        $user =
    }

}
