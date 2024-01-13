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
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->longText('notes')->nullable();
            $table->float('amount');
            $table->string('shipping_method');
            $table->boolean('ship_same_as_bill')->default(true);
            $table->boolean('privacy_policy')->default(false);
            $table->string('tx_id');
            $table->string('tx_ref');
            $table->string('flw_tx_ref');
            $table->uuid('shipping_info_id');
            $table->uuid('billing_info_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('shipping_info_id')->references('id')->on('order_shippings')->onDelete('cascade');
            $table->foreign('billing_info_id')->references('id')->on('order_billings')->onDelete('cascade');
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
