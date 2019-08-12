<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVotantesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votantes', function (Blueprint $table) {
            $table->string('uuid', 36)->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('celular');
            $table->string('barrio_id');
            $table->date('nacimiento')->nullable();
            $table->string('gps')->nullable();
            $table->string('sector');
            $table->string('tipo_voto');
            $table->string('intencion_voto');
            $table->boolean('incentivado');
            $table->string('usuario_regitra');

            $table->enum('sexo', ['M', 'F' ,'O'])->nullable();
            $table->string('lider_id')->nullable();
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
        Schema::drop('votantes');
    }
}
