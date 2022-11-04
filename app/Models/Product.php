<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "image_paths",
        "price",
        "product_catogory_id",
        "stock"
    ];

    public function cat(){
        return ProductCatogory::findOrFail($this->product_catogory_id);
    }
}
