<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('id_seccion');
            $table->unsignedBigInteger('id_aula');
            $table->float('evaluacion1')->nullable();
            $table->float('evaluacion2')->nullable();
            $table->timestamps();
            
            $table->foreign('id_seccion')->references('id')->on('secciones');
            $table->foreign('id_aula')->references('id')->on('aulas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
