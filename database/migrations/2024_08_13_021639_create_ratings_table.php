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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->enum('rating_value',[1,2,3,4,5]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
