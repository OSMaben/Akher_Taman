<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Validator;
use App\Models\Categories;

class ProductsController extends Controller
{
    public function index(){
        $categories = Categories::all();
        $products = Products::all();
        return response()->json($products);
    } 

    //create method
    public function store(Request $request)
    {


 
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'category_id'=>'required',
            'starting_price' => 'required',
            'current_price' => 'required',
            'condition' => 'required',
            'location' => 'required',
        ]);

        if($validator->fails())
        {
            $response = [
                'status'=>false,
                'error' =>$validator->errors()
            ];
            return response()->json($response);
        }

        $products = Products::create($request->all());
        return response()->json([
            'message'=>"Product Has Been Created",
            'product_details'=>$products,
        ]);
    }



    //delete method
    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();
        return response()->json([
            'message'=>'product has been deleted successfuly'
        ]);
    }
}
