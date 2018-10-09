<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 128);
            $table->string('apellidos', 128);
            $table->string('rut', 10)->unique();
            $table->string('ciudad', 128);
            $table->string('direccion', 128);
            $table->string('correo', 128)->unique();
            $table->date('fecha_nacimiento');
            $table->integer('telefono');
            $table->string('curso',128);
            $table->enum('sexo', ['MASCULINO','FEMENINO']);
            $table->enum('titulo_profesional', ['EDUCADORA DE PARBULO','PSICOLOGO(A)', 'TERAPEUTA OCUPACIONAL', 'FONOAUDIOLOGO(A)', 'PROFESOR(A)']);
            $table->boolean('jefatura_curso')->default(0);

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
        Schema::dropIfExists('profesionals');
    }
}
