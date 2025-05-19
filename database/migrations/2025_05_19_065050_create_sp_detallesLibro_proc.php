<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_detallesLibro`(in _codigo varchar(9))
BEGIN
SELECT libros.codigo_libro,
       libros.nombre_libro,
       libros.existencias,
       libros.precio,
       autores.nombre_autor,
       editoriales.nombre_editorial,
       generos.nombre_genero,
       libros.descripcion
  FROM ((inventario_libros.libros libros
         INNER JOIN inventario_libros.generos generos
            ON (libros.id_genero = generos.id_genero))
        INNER JOIN inventario_libros.autores autores
           ON (libros.codigo_autor = autores.codigo_autor))
       INNER JOIN inventario_libros.editoriales editoriales
          ON (libros.codigo_editorial = editoriales.codigo_editorial)
          WHERE libros.codigo_libro=_codigo;
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_detallesLibro");
    }
};
