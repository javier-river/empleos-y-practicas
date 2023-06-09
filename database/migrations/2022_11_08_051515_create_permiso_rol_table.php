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
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('permiso_id');
            $table->unsignedBigInteger('rol_id');

            $table->foreign('permiso_id')->references('id')->on('permisos')->onDelete('cascade');
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade');

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
        Schema::dropIfExists('permiso_rol');
    }
};
