<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('servicos', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->text('Tipo de Servico');   // <--- esta é a coluna que está a faltar
    $table->decimal('preco', 10, 2);
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
