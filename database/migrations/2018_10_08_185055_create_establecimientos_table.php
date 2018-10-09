<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 128);
            $table->string('direccion', 128)->unique();
            $table->string('ciudad', 128);
            $table->string('correo', 128)->unique();
            $table->integer('telefono');
            $table->integer('rbd')->unique();
            $table->enum('nivel_educacional',['BASICA','MEDIA','COMPLETO']);
            $table->string('entidad', 128);

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
        Schema::dropIfExists('establecimientos');
    }
}
