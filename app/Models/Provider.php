<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Provider extends Model
{
    use HasFactory;
    protected $fillable = ['provider_id', 'provider_name'];

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
