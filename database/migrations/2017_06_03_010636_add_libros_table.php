<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('anio');
            $table->enum('tipo', ['libro', 'fotocopia']);
            $table->string('isbn');
            $table->integer('numero_edicion');
            $table->enum('estado_prestamo', ['SI', 'NO'])->default('NO');
            $table->timestamps();
        });

        Schema::create('libro_autor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('libro_id')->unsigned();
            $table->integer('autor_id')->unsigned();

            $table->foreign('libro_id')->references('id')->on('libros');
            $table->foreign('autor_id')->references('id')->on('autores');

            $table->timestamps();
        });

        Schema::create('libro_area', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('libro_id')->unsigned();
            $table->integer('area_id')->unsigned();

            $table->foreign('libro_id')->references('id')->on('libros');
            $table->foreign('area_id')->references('id')->on('areas_conocimientos');

            $table->timestamps();
        });

        Schema::create('libro_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('libro_id')->unsigned();
            $table->date('fecha_entrega');
            $table->boolean('estado_registro')->default('TRUE');

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('libro_id')->references('id')->on('libros');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro_autor');
        Schema::dropIfExists('libro_area');
        Schema::dropIfExists('libro_usuario');
        Schema::dropIfExists('libros');
    }
}
