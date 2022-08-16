<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;
    
    protected $with = ['products', 'users'];
    public function products(){
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
    
    public function users(){
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
    
}
