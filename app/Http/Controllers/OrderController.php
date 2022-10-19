<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function show(){
        
        $order= Order::with('products')->get(); 
        return $order;
     }
    
     public function create(Request $request){
     $order = Order::create(['status'=>$request->status,'product_id'=>$request->product_id]);
     return $order;
     }

     public function update($id,Request $request){
        $order=Order::findOrFail($id);
        $order -> update(['status'=>$request->status,'product_id'=>$request->product_id]);
        return $order;
        }

     public function delete($id){
        try{
            $order=Order::findOrFail($id);
        }catch(\Exception $exception){
            throw new NotFoundException('Netu');
        } 
        
        $order->delete();
        return response()->json('deleted done',204);
    
     }
}
