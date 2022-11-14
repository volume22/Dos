<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function show(){
        // where('product_id','=','1')->
        $order= Order::with('products')->paginate(10); 
        return $order;

     }
    
     public function create(Request $request){
     $order = Order::create([
        'status'=>$request->status,
        'product_id'=>$request->product_id]);
    //  $sum=0;
    //  foreach($request->products as $product){
    //     $orderProduct =Product::create([
    //       'order_id'=>$order->id,
    //       'product_id'=>$product['product_id'],
    //       'price'=>$product['price']
    //     ]);
    //     $sum+=($product['price']);
    //  }
    //  $order->update([
    //     'status'=>$status
    //  ]);
     return $order;
     }

     public function update($id,Request $request){
        $order=Order::findOrFail($id);
        $order -> update([
            'status'=>$request->status,
            'product_id'=>$request->product_id
        ]);
        return $order;
        }

     public function delete($id){
        try{
            $order=Order::findOrFail($id);
        }catch(Exception $exception){
            throw new NotFoundException('Netu');
        } 
        
        $order->delete();
        return response()->json('deleted done',204);
    
     }
}
