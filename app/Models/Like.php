<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_id', 'like'];
   
    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    
    
}
