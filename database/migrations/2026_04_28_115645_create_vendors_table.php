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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
             // Link to user
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');

            // Shop info
            $table->string('shop_name');
            $table->string('slug')->unique();

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();

            // Branding
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();

            $table->text('description')->nullable();

            // Status control
            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
