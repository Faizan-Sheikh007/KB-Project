<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

            Schema::create('orders', function (Blueprint $table) {
 $table->engine = 'InnoDB'; // Required for FK
 $table->id(); // Order ID
 $table->string('customer_name'); // Customer Name
 $table->string('email'); // Customer Email
 $table->string('phone'); // Customer Phone
 $table->text('address'); // Delivery Address
 $table->decimal('total_amount', 10, 2); // Total order price
 $table->text('items'); // JSON of cart items
 $table->string('status')->default('Pending'); // Order status
 $table->timestamps(); // Created_at & updat
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
