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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();

            $table->text('primer_nombre');
            $table->text('segundo_nombre');
            $table->text('primer_apellido');
            $table->text('segundo_apellido');
            $table->string('estado_civil');
            $table->string('nivel_educativo');
            $table->string('colegios_anteriores');
           
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
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
        Schema::dropIfExists('candidatos');
    }
};
