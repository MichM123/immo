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
            $table->foreignId('type_id')->constrained('type_biens')->onDelete('cascade');
            $table->foreignId('ville_id')->constrained('villes')->onDelete('cascade');
            $table->integer('code_postal');
            $table->string('adresse');
            $table->string('description');
            $table->integer('superficie');
            $table->integer('nombre_pieces');
            $table->string('document')->nullable();
            $table->string('statut');
            $table->integer('prix');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
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
