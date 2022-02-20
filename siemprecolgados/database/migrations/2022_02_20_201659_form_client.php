<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_clients', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('cif');
            $table->string('pais');
            $table->string('correo');
            $table->string('telefono');
            $table->string('cuenta_corriente');
            $table->string('descripcion');
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('formClient');
    }
}
