<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casas', function (Blueprint $table) {
            $table->string('uuid', 36)->primary();
            $table->string('nombre_cuidador');
            $table->string('telefono_cuidador');
            $table->string('capacidad_personas');
            $table->string('gps');
            $table->integer('numero_casa');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('casas');
    }
}
