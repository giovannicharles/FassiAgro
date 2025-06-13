<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id('id_offer');
            $table->unsignedBigInteger('producteur_id');
            $table->string('region');

            $table->foreign('producteur_id')
                  ->references('id_user')
                  ->on('users')
                  ->onDelete('cascade');

            $table->string('description')->nullable();
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
