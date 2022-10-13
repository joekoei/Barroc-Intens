<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCatogory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_employee_only'
    ];

    protected $table = "product_catogories";
}
