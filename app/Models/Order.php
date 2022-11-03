<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','pieces','status','agree'];

    public function product(){
        return Product::findOrFail($this->product_id);
    }
}
