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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->string('identificacion',10);
            $table->string('e_mail',45);
            $table->string('direcccion',45);
            $table->string('telefono',12);
            $table->date('fecha_nacimiento',45);
            $table->string('genero',12);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
