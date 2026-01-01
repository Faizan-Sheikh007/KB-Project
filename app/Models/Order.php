<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
 'customer_name', 'email', 'phone', 'address', 'total_amount', 'items', 'status'

 ];
protected $casts = [
 'items' => 'array'
 ];


}
