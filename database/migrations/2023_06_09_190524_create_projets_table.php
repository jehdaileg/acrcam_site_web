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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('commmentaires_projet');
            $table->date('date_realisation')->nullable();
            $table->string('partenaire_concerne')->nullable();
            $table->integer('revenu_benefice_projet')->default(0)->nullable();
            $table->integer('statut_projet')->default(1);

            $table->unsignedBigInteger('type_projet_id');
            $table->foreign('type_projet_id')->references('id')->on('type_projets');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
