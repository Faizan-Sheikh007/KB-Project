<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // ✅ Required for MySQL FKs
            $table->id();
            $table->string('heading');
            $table->text('description');
            $table->string('image');
            $table->string('quantity');
            $table->decimal('price', 8, 2);
            $table->string('subcategory')->nullable();
            // Foreign key setup
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
