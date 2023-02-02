<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Const\TransactionTypeConstant;
class LikeController extends BaseController
{
    

    public function show(){
        $like= Like::with('products')->paginate(TransactionTypeConstant::TYPE_PAGE); 

        return $like;
    }

    public function addLikes(Request $request){
        $validated = $request->validate([
           'product_id' => 'required|integer|max:100', 
           'like' => 'required|boolean',
        ]);
        $order = Like::create([
            'product_id' => $validated['product_id'],
            'like' =>$validated['like']
        ]);

        return $order;
    }

    public function deleteLikes(int $id){
        try{
            $like=Product::findOrFail($id);
        } catch (Exception $exception){
            throw new NotFoundException('Netu');
        }

        $like->delete();

        return response()->json('deleted done', 204);
    }
}
