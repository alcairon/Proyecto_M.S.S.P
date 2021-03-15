<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrgenicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urgencias', function (Blueprint $table) {
            $table->id();
			$table->date('f_entrada',14)->nulleable;
			$table->unsignedBigInteger('tipo_urgencia');
			$table->unsignedBigInteger('tratamiento');
            $table->unsignedBigInteger('paciente');
			$table->unsignedBigInteger('medico');
			
			$table->foreign('tipo_urgencia')->references('id')->on('categorias');
			$table->foreign('tratamiento')->references('id')->on('tratamientos');
			$table->foreign('paciente')->references('id')->on('pacientes');
			$table->foreign('medico')->references('id')->on('medicos');
			
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urgenicas');
    }
}
