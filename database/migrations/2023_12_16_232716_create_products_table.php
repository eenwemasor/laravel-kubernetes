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
            $table->uuid('id')->primary();
            $table->uuid('category_id');
            $table->string('name');
            $table->boolean('active');
            $table->text('short_description');
            $table->longText('description');
            $table->string('unit_price');
            $table->longText('settings');
            $table->boolean('allow_custom_size')->nullable();
            $table->boolean('allow_custom_quantity')->nullable();
            $table->string('quantity_postfix')->nullable();
            $table->string('discount_percentage')->nullable();
            $table->string('min_width')->nullable();
            $table->string('min_height')->nullable();
            $table->string('max_width')->nullable();
            $table->string('max_height')->nullable();
            $table->string('min_quantity')->nullable();
            $table->string('max_quantity')->nullable();
            $table->string('icon')->nullable();
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
