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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('ID_clientes');
            $table->string('Nom_cliente', 30);
            $table->string('Ape_cliente', 30);
            $table->string('Tipo_documento', 20);
            $table->string('DNI_cliente', 20)->unique();
            $table->string('Cel_cliente', 9)->unique();
            $table->string('Correo_cliente', 30)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

