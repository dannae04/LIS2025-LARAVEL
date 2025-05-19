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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertarAutor`(in _codigo_autor varchar(6), in _nombre_autor varchar(50), in _nacionalidad varchar(50) )
BEGIN
  INSERT INTO autores VALUES(_codigo_autor, _nombre_autor, _nacionalidad );
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_insertarAutor");
    }
};
