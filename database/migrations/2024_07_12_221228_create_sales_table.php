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
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seller_id');
            $table->decimal('sale_value', 10, 2);
            $table->timestamp('sale_date');
            $table->point('coordinates');
            $table->unsignedBigInteger('nearest_unit')->nullable();
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('nearest_unit')->references('id')->on('units')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
