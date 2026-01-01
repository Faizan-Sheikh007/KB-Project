<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = 'product_details'; // correct table name

    protected $fillable = [
        'product_id',
        'specifications',
        'warranty',
        'manufacturer'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
