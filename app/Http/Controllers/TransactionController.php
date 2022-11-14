<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionController extends Controller
{
    public function show(){
        $tran= Transaction::with('products','orders')->paginate(10); 
        return $tran;
     }
    
     public function create(Request $request){
     $tran = Transaction::Create([
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
    //  $tran->update([
    //     'sum'=>$sum
    //  ]);
     return $tran;
     }
     public function update($id,Request $request){
        $tran=Transaction::findOrFail($id);
        $tran->update([
            'sum'=>$request->sum,
            'product_id'=>$request->product_id,
            'payment_for_goods'=>$request->payment_for_goods,
            'order_id'=>$request->order_id
        ]);
        return $tran;
        }
    
     public function delete($id){
    try{
    $tran=Transaction::findOrFail($id);
    }catch(Exception $exception){
        throw new NotFoundException('Netu');
    }
    $tran->delete();
    return response()->json('deleted done');
    
     }
}
