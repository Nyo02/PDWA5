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
        Schema::create('musicais_instrumentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nome', 50);
            $table->string('Categoria', 50);
            $table->string('Material', 50);
            $table->string('Marca', 50);
            $table->date('Data_Cadastro');
            $table->decimal('Preco', total: 10, places: 2);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicais_instrumentos');
    }
};
