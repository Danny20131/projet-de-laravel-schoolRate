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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Clé étrangère pour l'utilisateur
            $table->foreignId('university_id')->constrained()->onDelete('cascade'); // Clé étrangère pour l'université
            $table->foreignId('criteria_id')->constrained('rating_criteria')->onDelete('cascade'); // Clé étrangère pour les critères
            $table->unsignedTinyInteger('score'); // Score attribué
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
