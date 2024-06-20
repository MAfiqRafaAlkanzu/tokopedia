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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('shops_name')->unique();
            $table->text('bio')->nullable();
            $table->string('rating')->nullable();
            $table->enum('status', ['offline', 'online'])->default('offline');
            $table->enum('badge', ['none', 'power_merchant', 'power_merchant_pro', 'official_store'])->default('none');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
