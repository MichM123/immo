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
            $table->string('description');
            $table->integer('code_postal');
            $table->integer('superficie');
            $table->integer('nombre_pieces');
            $table->integer('prix');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('ville_id');
            $table->string('document')->nullable();
            $table->string('statut');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->boolean('accept')->default(0);

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
