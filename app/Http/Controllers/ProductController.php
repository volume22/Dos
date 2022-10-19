<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showpro(){
        $prov= Product::with('provider')->get();
        return $prov;
     }
    public function update($id,Request $request){
        $prov=Product::findOrFail($id);
        $prov -> update(['Type'=>$request->Type,'provider_id'=>$request->provider_id,'product_name'=>$request->product_name,'description'=>$request->description,'price'=>$request->price]);
        return $prov;
    }
     public function create(Request $request){
    
     $prov = Product::Create(['Type'=>$request->Type,'provider_id'=>$request->provider_id,'product_name'=>$request->product_name,'description'=>$request->description,'price'=>$request->price]);
     return $prov;
     
     }
    
     public function delete($id){
    try{
        $prov=Product::findOrFail($id);
    }catch(\Exception $exception){
        throw new NotFoundException('Netu');
    }
    $prov->delete();
    return response()->json('deleted done',204);
    
     }
}
