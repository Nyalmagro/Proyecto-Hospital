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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',45);
            $table->string('contrasenia',45);
            $table->unsignedBigInteger('Persona_idPersona');
            $table->unsignedBigInteger('Actividad_idActividad');
            $table->foreign('Persona_idPersona')
            ->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('Actividad_idActividad')
            ->references('id')->on('actividads')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
