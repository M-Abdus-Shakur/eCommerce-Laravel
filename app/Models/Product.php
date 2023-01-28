<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'product_name',
        'slug',
        'product_des',
        'price',
        'product_img',
        'product_category_name',
        'product_subcategory_name',
        'product_category_id',
        'product_subcategory_id',
    ];
}
