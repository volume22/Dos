<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(Request $request){
        $validated = $request->validate([
            'Type' => 'required|max:100',
        ]);
        if($request->Type !=null){
            $provider= Product::where('Type', '=' , $request)
            ->with('providers')
            ->paginate(10);
        } else {
            return response()->json('NON', 404);
        }

        return $prov;
    }

    public function update(int $id,Request $request){
        $validated = $request->validate([
            'Type' => 'required|max:100',
            'provider_id' => 'required|integer|max:100',
            'product_name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|max:100',
        ]);
        $provider=Product::findOrFail($id);
        $provider = Product::update([
            'Type' =>  $validated['Type'],
            'provider_id' => $validated['provider_id'],
            'product_name' => $validated['product_name'],
            'description' => $validated['description'],
            'price' => $validated['description']
        ]);

        return $provider;
    }

    public function create(Request $request){
        $validated = $request->validate([
            'Type' => 'required|max:100',
            'provider_id' => 'required|integer|max:100',
            'product_name' => 'required|max:100',
            'description' => 'required|max:100',
            'price' => 'required|max:100',
        ]);
        $provider = Product::Create([
            'Type' =>  $validated['Type'],
            'provider_id' => $validated['provider_id'],
            'product_name' => $validated['product_name'],
            'description' => $validated['description'],
            'price' => $validated['description']
        ]);

        return $provider;
    }
     
    public function delete(int $id){
        try{
            $provider=Product::findOrFail($id);
        } catch (Exception $exception){
            throw new NotFoundException('Netu');
        }

        $provider->delete();

        return response()->json('deleted done', 204);
    }
}
