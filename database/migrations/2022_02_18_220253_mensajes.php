<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->string('textoMensaje');
            $table->string('linkElemento');
            $table->unsignedBigInteger('idUsuario');
            $table->unsignedBigInteger('idChat');
            $table->timestamps();
            $table->foreign('idUsuario')
            ->references('id')
            ->on('usuarios');
            $table->foreign('idChat')
            ->references('id')
            ->on('chats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
