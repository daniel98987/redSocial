<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Publicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('textoPublicacion');
            $table->string('linkImagen');
            $table->unsignedBigInteger('idUsuario');
            $table->string('linkVideo');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->timestamps();
            $table->foreign('idUsuario')
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
        Schema::dropIfExists('publicaciones');
        //
    }
}
