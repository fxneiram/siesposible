<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionUserTable extends Migration
{
    public function up()
    {
        Schema::create('permission_user', function (Blueprint $table) {
            $table->string('uuid', 36)->primary();
            $table->string('permission_uuid')->index();
            $table->foreign('permission_uuid')->references('uuid')->on('permissions')->onDelete('cascade');
            $table->string('user_uuid')->index();
            $table->foreign('user_uuid')->references('uuid')->on('users')->onDelete('cascade');
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
        Schema::drop('permission_user');
    }

}
