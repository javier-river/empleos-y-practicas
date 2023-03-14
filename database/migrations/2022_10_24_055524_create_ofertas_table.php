<?php

use App\Models\Oferta;
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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            
            $table->string('nombre_de_la_oferta');
            $table->string('descripcion_de_la_oferta');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('jornada');
            $table->string('disponibilidad_de_viajar');
            $table->string('cambio_de_residencia');
            $table->string('discapacidad');
           


            $table->enum('status',[Oferta::BORRADOR,Oferta::PUBLICADO])->default(Oferta::BORRADOR);


            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');
        
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
        Schema::dropIfExists('ofertas');
    }
};
