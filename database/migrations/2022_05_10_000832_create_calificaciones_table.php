<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idResultado');
            $table->unsignedBigInteger('idAlumno');
            $table->unsignedBigInteger('idDocente');
            $table->integer('calificacion');
            $table->foreign('idResultado')->references('id')->on('resultados')->onDelete('cascade');
            $table->foreign('idAlumno')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idDocente')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
}
