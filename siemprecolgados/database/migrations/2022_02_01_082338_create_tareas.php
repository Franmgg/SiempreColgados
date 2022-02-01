<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('cliente_id')->nullable();
            $table->string('nombre');
            $table->string('telefono');
            $table->string('descripcion');
            $table->string('correo');
            $table->string('dir');
            $table->string('estado');
            $table->string('fecha_crea');
            $table->string('fecha_rea');
            $table->string('anotaciones_anteriores');
            $table->string('anotaciones_posteriores');
            $table->string('fichero');
            $table->rememberToken();
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
        Schema::dropIfExists('tareas');
    }
}
