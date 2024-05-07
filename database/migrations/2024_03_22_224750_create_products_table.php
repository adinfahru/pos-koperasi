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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->integer('stock')->default(0);
            $table->decimal('price', 15, 2)->nullable();
            $table->decimal('purchase', 15, 2)->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }
    
    // public function up()
    // {
    //     Schema::create('transactions', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('product_id')->constrained()->onDelete('cascade');
    //         $table->string('type');
    //         $table->integer('quantity');
    //         $table->decimal('amount', 15, 2);
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
