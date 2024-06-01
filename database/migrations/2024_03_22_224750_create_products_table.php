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
            $table->string('code');
            $table->string('name');
            $table->unsignedBigInteger('category_id'); // Change this line
            $table->integer('stock')->default(0);
            $table->decimal('price', 15, 2)->nullable();
            $table->decimal('purchase', 15, 2)->nullable();
            $table->date('purchasing_date');
            $table->string('image');
            $table->timestamps();
        
            // Add this line
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
