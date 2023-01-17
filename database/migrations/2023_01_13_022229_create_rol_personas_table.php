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
        Schema::create('rol_personas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('Persona_idPersona');
            $table->unsignedBigInteger('Rol_idRol');
            $table->foreign('Persona_idPersona')
            ->references('id')->on('personas')->onDelete('cascade');
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
        Schema::dropIfExists('rol_personas');
    }
};
