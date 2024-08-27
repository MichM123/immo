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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->unsignedBigInteger('type_id');
            $table->integer('superficie');
            $table->string('statut');
            $table->string('description');
            $table->integer('nombre_pieces');
            $table->integer('prix');
            $table->integer('salle_bains');
            $table->unsignedBigInteger('ville_id');
            $table->string('piscine')->nullable();
            $table->string('garage')->nullable();
            $table->string('meuble')->nullable();
            $table->string('document')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('type_biens')->onDelete('cascade');
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
