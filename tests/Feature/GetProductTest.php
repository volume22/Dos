<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_check_200_ok(){
        $response = $this->get('http://127.0.0.1:8000/api/products');
        $response->assertStatus(200);
    }
    
    // public function test_201_ok()
    // {
    //     $response = $this->post('http://127.0.0.1:8000/api/product',['Type'=>'Machine','product_id'=>1,'provider_id'=>1,'product_name'=>'Qweweqwe','description'=>'Asdasdasd','price'=>'1200']);
    //     $response->assertStatus(201);
    // }

    // public function test_405_Not_Allowed()
    // {
    //     $response = $this->get('http://127.0.0.1:8000/api/product',['Type'=>'Machine','product_id'=>1,'provider_id'=>1,'product_name'=>'Qweweqwe','description'=>'Asdasdasd','price'=>'1200']);
    //     $response->assertStatus(405);
    // }

    // public function test_404_Access_allowed_only_for_registered_(){
    //     $response = $this->post('//http://127.0.0.1:8000/api/product',['Type'=>'Machine','product_id'=>1,'provider_id'=>1,'product_name'=>'Qweweqwe','description'=>'Asdasdasd','price'=>'1200']);
    //     $response->assertStatus(404);
    // }

    // public function test_500_Internal_Server_Error(){
    //     $response = $this->delete('http://127.0.0.1:8000/api/product/s');
    //     $response->assertStatus(500);    
    // }

    // public function test_204_Deleted(){
    //     $response = $this->delete('http://127.0.0.1:8000/api/product/9');
    //     $response->assertStatus(204);  
    // }

    }


