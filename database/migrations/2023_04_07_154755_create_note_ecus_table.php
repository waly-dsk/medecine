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
        Schema::create('note_ecus', function (Blueprint $table) {
            $table->string('matricule');

            $table->foreign('matricule')->references('matricule')
                ->on('etudiants')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('anneeAca');

            $table->string('codeEcu');

            $table->foreign('codeEcu')->references('codeEcu')
                ->on('ecus')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->double('note', 8, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note_ecus');
    }
};
