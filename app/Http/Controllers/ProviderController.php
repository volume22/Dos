<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
  //Public method Show in Provider 
  //no connection as we only need suppliers  
  //pagination up to 10 pages 
  public function show(){
    $provider= Provider::paginate(config('constants.options.page')); 

    return $provider;
  }

  //create product 
  //method accept request from web page accept data validate it and create
  public function create(Request $request){
    $validated = $request->validate([
      'provider_name' => 'required|max:100'
    ]);
    $provider = Provider::Create([
     'provider_name' => $validated['provider_name']
    ]);

    return $provider;
  }

  //update method accept id data and request
  //validate the request data, then find the order by id, then update the method
  public function update(int $id,Request $request){
    $provider=Provider::findOrFail($id);
    $validated = $request->validate([
      'provider_name' => 'required|max:100'
    ]);
    $provider->update([
      'provider_name' => $validated['provider_name']
    ]);

    return $provider;
  }

  //delete method
  //accept ID data, find it and through the delete method, do this tri-catch to catch errors or incorrect requests
  public function delete(int $id){
    try{
      $provider=Provider::findOrFail($id);
    }catch(Exception $exception){
      throw new NotFoundException('Netu');
    }

    $provider->delete();

    return response()->json('deleted done');
  }
    
}

