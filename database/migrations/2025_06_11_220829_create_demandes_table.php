<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id('id_demande');
            $table->unsignedBigInteger('acheteur_id');
            $table->unsignedBigInteger('croptype_id');
            $table->string('region');
            $table->foreign('acheteur_id')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('croptype_id')
                ->references('id_croptype')
                ->on('croptype')
                ->onDelete('cascade');

            $table->integer('quantity');
            $table->date('preferred_delivery_date');
            $table->enum('status', ['ouverte', 'en cours', 'satisfaite']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
