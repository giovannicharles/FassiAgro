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
        Schema::create('price_predictions', function (Blueprint $table) {
            $table->id('id_price_predictions');
            $table->string('region');
            $table->date('forecast_month');
            $table->double('predicted_price');
            $table->float('confidence_level');
            $table->unsignedBigInteger('croptype_id');
            $table->foreign('croptype_id')
                  ->references('id_croptype')
                  ->on('croptype')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_predictions');
    }
};
