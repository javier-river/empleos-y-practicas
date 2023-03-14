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
        Schema::create('conocimientos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('nivel');
            $table->string('idioma');
            $table->string('lugar');
            $table->string('titulo');
            $table->string('certificado');
         

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
        Schema::dropIfExists('conocimientos');
    }
};
