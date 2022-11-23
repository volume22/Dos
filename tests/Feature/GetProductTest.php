<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetProductTest extends TestCase
{
    protected $page = 0;
    protected $id=0;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_check_200_ok(){
        $response = $this->get('http://127.0.0.1:8000/api/products?Type=Bike');

        $response->assertStatus(200);
        $this->page = $response->json()['last_page']; 
    }

    public function test_empty_page_array()
    {
        $response = $this->get('http://127.0.0.1:8000/api/products?page='.$this->page+1);

        $response->assertJsonCount(0,'data');
    }

    public function test_201_created_product()
    {
        
        $response = $this->post('http://127.0.0.1:8000/api/product',
          ['Type' => 'Machine' , 'product_id' => 1,
          'provider_id' => 1, 'product_name' => 'Qweweqwe' ,
          'description' => 'Asdasdasd' , 'price' => '1200']);

        $response->assertStatus(201);
        $this->id = $response->json()['id'];
    }
    
    public function test_204_updated_successfully(){

        $response = $this->put('http://127.0.0.1:8000/api/product/'.$this->id,
           ['Type' => 'Machine' , 'product_id' => 1,
           'provider_id' => 1, 'product_name' => 'Qweweqwe' ,
           'description' => 'Qwerty' , 'price' => '550']);

        $response->assertStatus(204);
    }
    // public function test_405_Not_Allowed()
    // {
    //     $response = $this->get('http://127.0.0.1:8000/api/product',['Type'=>'Machine','product_id'=>1,'provider_id'=>1,'product_name'=>'Qweweqwe','description'=>'Asdasdasd','price'=>'1200']);
    //     $response->assertStatus(405);
    // }

    // public function test_404_Access_allowed_only_for_registered_(){
    //     $response = $this->post('//http://127.0.0.1:8000/api/product',['Type'=>'Machine','product_id'=>1,'provider_id'=>1,'product_name'=>'Qweweqwe','description'=>'Asdasdasd','price'=>'1200']);
    //     $response->assertStatus(404);
    // }


    public function test_204_Deleted(){
        $response = $this->delete('http://127.0.0.1:8000/api/product/'.$this->id);
        $response->assertStatus(204);  
    }

    }


