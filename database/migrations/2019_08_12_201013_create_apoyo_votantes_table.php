<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApoyoVotantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoyo_votante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apoyo_uuid')->index();
            $table->foreign('apoyo_uuid')->references('uuid')->on('apoyos')->onDelete('cascade');
            $table->string('votante_uuid')->index();
            $table->foreign('votante_uuid')->references('uuid')->on('votantes')->onDelete('cascade');
            $table->timestamps();
        });
        //$table->foreign('role_uuid')->references('uuid')->on('roles')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apoyo_votante');
    }
}
