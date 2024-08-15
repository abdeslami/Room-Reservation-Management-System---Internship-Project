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
    Schema::create('reservation', function (Blueprint $table) {
        $table->id();
        $table->string('date_debut_re');
        $table->string('date_fin_re');
        $table->string('etat_re');
        $table->string('nom_re');
        
        $table->unsignedBigInteger('id_chambre')->nullable();
        $table->foreign('id_chambre')->references('id')->on('chambres')->onDelete('set null');
        $table->unsignedBigInteger('id_user')->nullable();
        $table->foreign('id_user')->references('id')->on('users')->onDelete('set null');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
