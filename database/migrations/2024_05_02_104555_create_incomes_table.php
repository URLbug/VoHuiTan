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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('warehouses_id');
            $table->foreign('warehouses_id')
                ->references('id')
                ->on('warehouses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('incomes'); # продажи - себестоймость продукта
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
