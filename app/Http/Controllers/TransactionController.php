<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionController extends Controller
{
    public function show(){
        $transaction= Transaction::with('products','orders')->paginate(10); 

        return $transaction;
    }
    
     public function create(Request $request){
        $transaction = Transaction::Create([
        'sum'=>0,
        'payment_for_goods'=>$request->payment_for_goods,
        'order_id'=>$request->order_id,
        'product_id'=>$request->product_id
        ]);
    
        $sum=0;
        foreach((array)($request->products) as $product){
        $orderProduct =Product::create([
          'transaction_id'=>$tran->transaction_id,
          'product_id'=>$product['product_id'],
          'price'=>$product['price']
        ]);

        $sum+=($product['price']);  
        }

        return $transaction;
    }
     public function update($id,Request $request){
        $transaction=Transaction::findOrFail($id);
        $transaction->update([
            'sum'=>$request->sum,
            'product_id'=>$request->product_id,
            'payment_for_goods'=>$request->payment_for_goods,
            'order_id'=>$request->order_id
        ]);

        return $transaction;
    }
    
    public function delete($id){
        try{
            $transaction=Transaction::findOrFail($id);
        }catch(Exception $exception){
            throw new NotFoundException('Netu');
        }
        $transaction->delete();

        return response()->json('deleted done');
     }
}
