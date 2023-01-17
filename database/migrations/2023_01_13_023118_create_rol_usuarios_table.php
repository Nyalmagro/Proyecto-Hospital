<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('Usuario_idUsuario');
            $table->unsignedBigInteger('Rol_idRol');
            $table->foreign('Usuario_idUsuario')
            ->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('Rol_idRol')
            ->references('id')->on('rols')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_usuarios');
    }
};
