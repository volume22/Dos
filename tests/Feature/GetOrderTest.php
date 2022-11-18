<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetOrderTest extends TestCase
{
    protected $page = 0;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Status_200_get_orders()
    {
        $response = $this->get('http://127.0.0.1:8000/api/orders');

        $response->assertStatus(200);
        $this->page = 10;
    }

    public function test_empty_page_array()
    {
        $response = $this->get('http://127.0.0.1:8000/api/orders?page='.$this->page+1);

        $response->assertJsonCount(0,'data');
    }

    public function test_201_created_order()
    {
        $response = $this->post('http://127.0.0.1:8000/api/order',['order_id'=>1,'product_id'=>1,'status'=>'Qweweqwe']);
        $response->assertStatus(201);
    }

    public function test_204_Deleted(){
        $response = $this->delete('http://127.0.0.1:8000/api/order/7');
        $response->assertStatus(204);  
    }

   public function test_405_Not_Allowed()
    {
        $response = $this->get('http://127.0.0.1:8000/api/order',['order_id'=>1,'product_id'=>3,'status'=>'Qwerty']);
        $response->assertStatus(405);
    }

    public function test_404_Access_allowed_only_for_registered_(){
        
        $response = $this->post('//http://127.0.0.1:8000/api/order/1',['order_id'=>1,'product_id'=>3,'status'=>'mosz']);
        Order::find($response->id);
        $response->assertStatus(404);
    }

    public function test_404_Access_allowed_only_for_registered_update(){
        $response = $this->put('http://127.0.0.1:8000/api/order/1');
        $response->assertStatus(404);  
    }

    public function test_404_Deleted(){
        $response = $this->delete('http://127.0.0.1:8000/api/order/7');
        $response->assertStatus(404);  
    }
//    public function test_json_missing_path(){
//        $response = $this->get('http://127.0.0.1:8000/api/orders');
//        $response->assertJsonMissingPath('orders.email');
//    }
//    public function test_json_missing_path(){
//     $message = '<h1>Header</h1>';
//     $response = $this->get('http://127.0.0.1:8000/api/orders');
//     $response->assertStatus(200);
//     $response->assertSee($message,$escaped=false);
//   }

}
