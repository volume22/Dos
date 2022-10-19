<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionController extends Controller
{
    public function show(){
        $tran= Transaction::with('product','order')->get(); 
        return $tran;
     }
    
     public function create(Request $request){
     $tran = Transaction::Create(['sum'=>$request->sum,'payment_for_goods'=>$request->payment_for_goods]);
     return $tran;
     }
     public function update($id,Request $request){
        $tran=Transaction::findOrFail($id);
        $tran->update(['sum'=>$request->sum,'product_id'=>$request->product_id,'payment_for_goods'=>$request->payment_for_goods,'order_id'=>$request->order_id]);
        return $tran;
        }
    
     public function delete($id){
    try{
    $tran=Transaction::findOrFail($id);
    }catch(\Exception $exception){
        throw new NotFoundException('Netu');
    }
    $tran->delete();
    return response()->json('deleted done');
    
     }
}
