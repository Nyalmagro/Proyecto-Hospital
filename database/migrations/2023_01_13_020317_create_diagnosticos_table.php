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
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('Persona_idPersona');
            $table->unsignedBigInteger('CitaMedica_idCitaMedica');
            $table->string('observaciones',45);
            $table->string('examenes',45);
            $table->string('medicacion',45);
            $table->date('proxima_cita');
            $table->foreign('Persona_idPersona')
            ->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('CitaMedica_idCitaMedica')
            ->references('id')->on('cita_medicas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosticos');
    }
};
