<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $with = ['user', 'productCategory', 'productAttachements'];

    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }
    
    public function productCategory(){
        return $this->belongsTo(\App\Models\ProductCategory::class, 'product_categories_id');
    }

    public function productAttachements(){
        return $this->hasMany(\App\Models\ProductAttachements::class, 'product_id');
    }
}
