<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provider;
// enum ProductTypeEnum:string {
//     case Tech = 'Tech';
//     case Phone = 'Phone';
//     case Furniture = 'Furniture';
//     case Bijouterie = 'Bijouterie';
// }
class Product extends Model
{
   
    protected $fillable = [
        'Type', 'product_id', 'provider_id','product_name','description','price'
    ];
    
    public function provider(){
        return $this->belongsTo(Provider::class);
    }
    

    use HasFactory;
}
