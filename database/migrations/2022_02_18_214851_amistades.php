<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Amistades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amistades', function (Blueprint $table) {
            $table->id();
            $table->integer('notificacionEnvio');
            $table->string('estado');
            $table->unsignedBigInteger('idUsuarioPrincipal');
            $table->unsignedBigInteger('idUsuarioAmigo');
            $table->timestamps();

            $table->foreign('idUsuarioPrincipal')
                ->references('id')
                ->on('usuarios');
            $table->foreign('idUsuarioAmigo')
                ->references('id')
                ->on('usuarios');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amistades');
        //
    }
}
