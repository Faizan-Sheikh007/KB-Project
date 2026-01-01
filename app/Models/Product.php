<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'heading',
        'description',
        'image',
        'quantity',
        'price',
        'subcategory',
        'category_id',
    ];


public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}
public function productDetail()
{
    return $this->hasOne(ProductDetail::class);

}
}
