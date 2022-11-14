<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id','status'];
   
    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }
    public function transaction(){
        return $this->hasMany(transactions::class);
    }
}
