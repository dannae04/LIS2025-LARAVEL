<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->string('codigo_libro', 9)->primary();
            $table->string('nombre_libro', 50);
            $table->integer('existencias');
            $table->decimal('precio', 10);
            $table->string('codigo_autor', 6)->index('fk_libro_autor');
            $table->string('codigo_editorial', 6)->index('fk_libro_editorial');
            $table->integer('id_genero')->index('fk_libro_genero');
            $table->text('descripcion')->nullable();
            $table->string('imagen', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};
