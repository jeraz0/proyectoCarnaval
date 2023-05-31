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
        Schema::create('propuestas', function (Blueprint $table) {
            $table->id('idPropuesta');
            $table->String('nombrePropuesta', 255);
            $table->String('descripcion', 255);
            $table->unsignedBigInteger('id_Categoria')->nullable();
            $table->foreign('id_Categoria')->references('idCategoria')->on('categorias')->onDelete('set null');
            $table->unsignedBigInteger('id_persona');
            $table->foreign('id_persona')->references('idPersona')->on('personas')->onDelete('cascade');
            $table->String('imagenovideo', 150);
            $table->float('calificacion');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};
