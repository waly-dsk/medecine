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
        Schema::create('decision_annee_acas', function (Blueprint $table) {
            $table->string('matricule');

            $table->foreign('matricule')
                ->references('matricule')
                ->on('etudiants')
                ->onDelete('cascade');

            $table->string('anneeAca');

            $table->string('decision');

            $table->unique(['matricule', 'anneeAca'], 'custom_key');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decision_annee_acs');
    }
};
