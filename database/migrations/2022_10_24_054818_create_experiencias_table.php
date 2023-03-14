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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();

            $table->string('trabajo_anterior');
            $table->string('lugar');
            $table->string('categoria');
            $table->string('descripcion');
            $table->string('salario');
            $table->string('fecha_de_inicio');
            $table->string('fecha_de_finalizacion');
            $table->string('evidencias')->nullable();
           
            
            $table->unsignedBigInteger('hojadevida_id')->nullable();
            $table->foreign('hojadevida_id')->references('id')->on('hojadevidas')->onDelete('set null');
          

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
        Schema::dropIfExists('experiencias');
    }
};
