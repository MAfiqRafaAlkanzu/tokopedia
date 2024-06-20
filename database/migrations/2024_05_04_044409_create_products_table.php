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
            $table->foreignId('shop_id');
            $table->string('name');
            $table->string('price');
            $table->string('picture');
            $table->text('description')->nullable();
            $table->foreignId('category_id');
            $table->string('weight')->nullable();
            $table->string('display_case')->nullable();
            $table->string('rating')->nullable();
            $table->enum('conditions',['new', 'second'])->default('new');
            $table->enum('discount',['no', 'yes'])->default('no');
            $table->timestamps();
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
