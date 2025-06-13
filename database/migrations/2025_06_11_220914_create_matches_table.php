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
        Schema::create('matches', function (Blueprint $table) {
            $table->id('id_matches');
            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id')
                  ->references('id_offer')
                  ->on('offers')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('demande_id');
            $table->foreign('demande_id')
                  ->references('id_demande')
                  ->on('demandes')
                  ->onDelete('cascade');
            $table->float('match_score');
            $table->boolean('is_accepted');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
