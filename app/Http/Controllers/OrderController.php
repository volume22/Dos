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
        $validated = $request->validate([
            'status' => 'required|max:100',
            'product_id' => 'required|integer|max:100',
        ]);
        $order = Order::create([
            'status' => $validated['status'],
            'product_id' =>$validated['product_id']
        ]);

        return $order;
    }

     public function update(int $id, Request $request){
        $validated = $request->validate([
            'status' => 'required|max:100',
            'product_id' => 'required|integer|max:100',
        ]);

        $order=Order::findOrFail($id);
        $order->update([
            'status'=> $validated['status'],
            'product_id'=> $validated['product_id']
        ]);
        
        return $order;
    }

     public function delete(int $id){
        try{
            $order=Order::findOrFail($id);
        }catch(Exception $exception){
            throw new NotFoundException('Netu');
        } 
        
        $order->delete();

        return response()->json('deleted done', 204);
    
     }
}
