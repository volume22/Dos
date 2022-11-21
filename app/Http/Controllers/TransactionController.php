<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Const\TransactionTypeConstant;

class TransactionController extends Controller
{   
    //Public method Show in Transaction get no off filter 
    //with (products and orders) relation 
    //pagination up to 10 pages 
    public function show(){
        $transaction= Transaction::with('products','orders')->paginate(TransactionTypeConstant::TYPE_PAGE); 

        return $transaction;
    }

    //create transaction 
    //method accept request from web page accept data validate it and create
    public function create(Request $request){
        $validated = $request->validate([
            'sum' => 'required|integer|max:100',
            'payment_for_goods' => 'required|max:100',
            'order_id' => 'required|integer|max:100',
            'product_id' => 'required|integer|max:100',
        ]);
        $transaction = Transaction::Create([
            'sum' => $validated['sum'],
            'payment_for_goods '=> $validated['payment_for_goods'],
            'order_id' => $validated['order_id'],
            'product_id' => $validated['product_id']
        ]);

        return $transaction;
    }

    //update method accept id data and request
    //validate the request data, then find the order by id, then update the method
    public function update(int $id,Request $request){
        $transaction=Transaction::findOrFail($id);
        $validated = $request->validate([
            'sum' => 'required|integer|max:100',
            'payment_for_goods' => 'required|max:100',
            'order_id' => 'required|integer|max:100',
            'product_id' => 'required|integer|max:100',
        ]);
        $transaction->update([
            'sum' => $validated['sum'],
            'payment_for_goods '=> $validated['payment_for_goods'],
            'order_id' => $validated['order_id'],
            'product_id'=> $validated['product_id']
        ]);

        return $transaction;
    }
    
    //delete method
    //accept ID data, find it and through the delete method, do this tri-catch to catch errors or incorrect requests
    public function delete(int $id){
        try{
            $transaction=Transaction::findOrFail($id);
        }catch(Exception $exception){
            throw new NotFoundException('Netu');
        }
        $transaction->delete();

        return response()->json('deleted done');
     }
}
