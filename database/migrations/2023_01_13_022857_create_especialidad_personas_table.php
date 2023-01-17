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
        Schema::create('especialidad_personas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('Especialidad_idEspecialidad');
            $table->unsignedBigInteger('Persona_idPersona');
            $table->foreign('Especialidad_idEspecialidad')
            ->references('id')->on('especialidads')->onDelete('cascade');
            $table->foreign('Persona_idPersona')
            ->references('id')->on('personas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especialidad_personas');
    }
};
