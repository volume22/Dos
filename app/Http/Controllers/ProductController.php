<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Const\TransactionTypeConstant;

class ProductController extends Controller
{   
    //Public method Show in Order get off filter in (Type == request)
    //with (providers) relation 
    //will display product orders by Type indexing from pagination up to 10 pages 
    public function show(Request $request){
        if($request!=null){
            $validated = $request->validate([
                'Type' => 'required|max:100',
            ]);
            $product = Product::where('Type', '=' , $request->Type)
            ->with('providers')
            ->paginate(TransactionTypeConstant::TYPE_PAGE);
        } else {
            return response()->json('NON', 404);
        }

        return $product;
    }
    
    //create product 
    //method accept request from web page accept data validate it and create
    public function update( $id,Request $request){
        $validated = $request->validate([
            'Type' => 'required|max:100',
            'provider_id' => 'required|integer|max:100',
            'product_name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|max:100',
        ]);
        $product=Product::findOrFail($id);
        $product = Product::update([
            'Type' =>  $validated['Type'],
            'provider_id' => $validated['provider_id'],
            'product_name' => $validated['product_name'],
            'description' => $validated['description'],
            'price' => $validated['description']
        ]);

        return $product;
    }

    //update method accept id data and request
    //validate the request data, then find the order by id, then update the method
    public function create(Request $request){
        $validated = $request->validate([
            'Type' => 'required|max:100',
            'provider_id' => 'required|integer|max:100',
            'product_name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|max:100',
        ]);
        $product = Product::Create([
            'Type' =>  $validated['Type'],
            'provider_id' => $validated['provider_id'],
            'product_name' => $validated['product_name'],
            'description' => $validated['description'],
            'price' => $validated['description']
        ]);

        return $product;
    }

    //delete method
    //accept ID data, find it and through the delete method, do this tri-catch to catch errors or incorrect requests 
    public function delete(int $id){
        try{
            $product=Product::findOrFail($id);
        } catch (Exception $exception){
            throw new NotFoundException('Netu');
        }

        $product->delete();

        return response()->json('deleted done', 204);
    }
}
