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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("filiere");
            $table->integer("prix");
            $table->string("title");
            $table->text("description");
            $table->string("image_formateur");
            $table->string("nom_formateur");
            $table->integer("followers");
            $table->integer("favoris");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
