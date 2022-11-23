<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

use App\Const\TransactionTypeConstant;

class OrderController extends Controller
{    
    //Public method Show in Order get off filter in (productid == 1)
    //with (products) relation 
    //will display product orders by ID indexing from pagination up to const 10 pages 
    public function showPayed(){
       
        $order= Order::with('products')->where('status','=','Payed')->paginate(TransactionTypeConstant::TYPE_PAGE); 

        return $order;
    }
    public function showNotPayed(){
       
        $order= Order::with('products')->where('status','=','Not Payed')->paginate(TransactionTypeConstant::TYPE_PAGE); 

        return $order;
    }
    
    //create order 
    //method accept request from web page accept data validate it and create
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
    
    //update method accept id data and request
    //validate the request data, then find the order by id, then update the method
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
    
    //delete method
    //accept ID data, find it and through the delete method, do this tri-catch to catch errors or incorrect requests
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
