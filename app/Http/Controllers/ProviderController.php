<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
 public function showprov(){
    $prov= Provider::paginate(10); 
    return $prov;
 }

 public function createprov(Request $request){
 $prov = Provider::Create([
   'provider_name'=>$request->provider_name
]);
 return $prov;
 }
 public function updateprov($id,Request $request){
    $prov=Provider::findOrFail($id);
    $prov->update([
      'provider_name'=>$request->provider_name
   ]);
    return $prov;
    }

 public function deleteprov($id){
try{
$prov=Provider::findOrFail($id);
}catch(Exception $exception){
    throw new NotFoundException('Netu');
}
$prov->delete();
return response()->json('deleted done');

 }
    
}
