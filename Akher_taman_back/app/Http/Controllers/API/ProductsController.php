<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;
use App\Models\Categories;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Auth;




class ProductsController extends Controller
{

    public function dashboard()
    {

        $totalAcceptedBids = Bid::where('status', 'accepted')->count();
        $totalAmountAcceptedBids = Bid::where('status', 'accepted')->sum('amount');
        $profit = $totalAmountAcceptedBids - ($totalAcceptedBids * 30);
        $numberOfproducts = Products::where('seller_id', Auth::id())->count();
        return view('dashboard', compact('totalAcceptedBids','totalAmountAcceptedBids','profit','numberOfproducts'));
    }

    public function showProducts()
    {
        $user =Auth::user();

        $products = $user->products;
        $categories = Categories::all();

        return view('products',compact('products','categories'));
    }

    public function index()
    {

        $products = Products::all();
        // $products = Products::all();
        return response()->json([
            'products' => ProductResource::collection($products)
        ]);
    }




    //create method
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'starting_price' => 'required',
            'bid_end_time' => 'required',
            'status' => 'required',
            'condition' => 'required',
            'location' => 'required',
            'image' => 'required|image'
        ]);

        if ($validator->fails()) {
            toastr()->error('There was an error!');
            return back()->withErrors($validator);
        }

        $all = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images'), $imageName);
            $all['image'] = $imageName;
        }

        $all['seller_id'] = Auth::user()->id;
        $all['current_price'] = $request->starting_price;

        Products::create($all);

        toastr()->success('Product has been added successfully!');
        return back();
    }



    //delete method
    public function delete($id)
    {

        $product = Products::find($id);
        $product->delete();
        toastr()->success('Product Has Been Deleted Successfuly!');
        return back();
    }


    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'starting_price' => 'required',
            'bid_end_time' => 'required',
            'status' => 'required',
            'condition' => 'required',
            'location' => 'required',
            'image' => 'image'
        ]);

        if ($validator->fails()) {
            toastr()->error('There was an error!')  ;
            return back()->withErrors($validator);
        }

        $product = Products::findOrFail($id);

        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');
        $product->starting_price = $request->input('starting_price');
        $product->bid_end_time = $request->input('bid_end_time');
        $product->status = $request->input('status');
        $product->condition = $request->input('condition');
        $product->location = $request->input('location');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        toastr()->success('Product has been updated successfully!');
        return back();
    }

    public function bidNow($id, Request $request)
    {
            $validator = Validator::make($request->all(), [
                'bid_amount' => 'required',
            ]);

            if ($request->bid_amount < 20 || $request->bid_amount > 10000) {
                toastr()->error('The bid must be more than $20 or less then 10000$');
                return back()->withErrors($validator->errors());
            }


            $bid =new Bid;
            $bid->user_id = Auth::id();
            $bid->product_id = $id;
            $bid->amount = $request->bid_amount;
            $bid->save();

            toastr()->success('your bid has been set!');
            return back();

    }

}
