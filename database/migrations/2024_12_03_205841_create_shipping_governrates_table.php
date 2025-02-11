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
        Schema::create('shipping_governrates', function (Blueprint $table) {
            $table->id();
            $table->decimal('price',10,2)->default(0);
            $table->foreignId('governrate_id')->references('id')->on('govern_rates')->cascadeOnDelete();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_governrates');
    }
};
