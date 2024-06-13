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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('ID_proveedores');
            $table->string('Nom_proveedores', 30);
            $table->string('RUC_proveedores', 10);
            $table->string('Telf_proveedores', 9);
            $table->string('Correo_proveedores', 30);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
