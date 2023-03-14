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
        Schema::create('hojadevidas', function (Blueprint $table) {
            $table->id();
            //SOBRE EL
            $table->string('foto')->nullable();
            $table->text('primer_nombre');
            $table->text('segundo_nombre')->nullable();
            $table->text('primer_apellido');
            $table->text('segundo_apellido')->nullable();
            $table->date('fecha_de_nacimiento');
            $table->string('tipo_de_documento');
            $table->string('numero_de_documento');
            $table->string('genero');
            
            //LUGAR DE RESIDENCIA
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('poblacion');
            
            //TELEFONO DE CONTACTO
            $table->string('telefono_movil');
            $table->string('telefono_fijo')->nullable();

            $table->unsignedBigInteger('candidato_id')->nullable();
            $table->foreign('candidato_id')
            ->references('id')->on('candidatos')
            ->onDelete('set null')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('hojadevidas');
    }
};
