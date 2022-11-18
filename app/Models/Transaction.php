<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id', 'product_id', 'sum', 'payment_for_goods', 'order_id'
    ];
  
    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function orders(){
        return $this->belongsTo(Order::class, 'order_id');
    }
}
