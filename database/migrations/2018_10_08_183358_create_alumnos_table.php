<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 128);
            $table->string('apellidos', 128);
            $table->string('rut', 10)->unique();
            $table->string('ciudad', 128);
            $table->string('direccion', 128);
            $table->date('fecha_nacimiento');
            $table->integer('telefono');
            $table->enum('sexo', ['MASCULINO','FEMENINO']);
            $table->integer('num_matricula');
            $table->string('curso', 128);

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
        Schema::dropIfExists('alumnos');
    }
}
