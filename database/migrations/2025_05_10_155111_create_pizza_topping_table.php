<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     public function up()
     {
         Schema::create('pizza_topping', function (Blueprint $table) {
             $table->id();
             $table->foreignId('pizza_id')->constrained()->onDelete('cascade');
             $table->foreignId('topping_id')->constrained()->onDelete('cascade');
             $table->timestamps(); // optional, but fine to keep
         });
     }
     


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizza_topping');
    }
};
