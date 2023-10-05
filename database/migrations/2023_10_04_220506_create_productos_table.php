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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 200);
            $table->decimal('precio', 9, 2);
            $table->string('imagen', 120);
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('categoria_id')->constrained('categorias', 'id');
            $table->foreignId('marca_id')->constrained('marcas', 'id');
            $table->foreignId('user_id')->constrained('users', 'id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
