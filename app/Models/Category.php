<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $fillable = [
        'category',
        'subcategory',
    ];
      public function product()
    {
        return $this->HasMany(Product::class);
    }
}
