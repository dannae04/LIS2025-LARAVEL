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
        Schema::table('libros', function (Blueprint $table) {
            $table->foreign(['codigo_editorial'], 'fk_libro_editorial')->references(['codigo_editorial'])->on('editoriales');
            $table->foreign(['codigo_autor'], 'fk_libro_autor')->references(['codigo_autor'])->on('autores');
            $table->foreign(['id_genero'], 'fk_libro_genero')->references(['id_genero'])->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->dropForeign('fk_libro_editorial');
            $table->dropForeign('fk_libro_autor');
            $table->dropForeign('fk_libro_genero');
        });
    }
};
