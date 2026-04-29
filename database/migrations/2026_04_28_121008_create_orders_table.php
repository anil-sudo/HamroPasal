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
            $table->id();
             // 🔗 User who placed order
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');

            // 📦 Order details
            $table->string('order_number')->unique();
            $table->decimal('total_amount', 10, 2);

            // 📊 Status
            $table->string('status')->default('pending');

            // 💳 Payment
            $table->string('payment_method')->nullable(); // cod, esewa, khalti
            $table->string('payment_status')->default('unpaid');

            // 📍 Delivery
            $table->text('shipping_address');
            $table->string('phone');

            $table->timestamps();
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
