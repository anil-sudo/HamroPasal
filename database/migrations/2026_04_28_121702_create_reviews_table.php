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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
              // 🔗 Relationships
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');

            $table->foreignId('product_id')
                  ->constrained()
                  ->onDelete('cascade');

            // ⭐ Review data
            $table->tinyInteger('rating'); // 1–5
            $table->text('comment')->nullable();

            // moderation
            $table->string('status')->default('pending');

            $table->timestamps();

            // 🚫 One user = one review per product
            $table->unique(['user_id', 'product_id']);
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
