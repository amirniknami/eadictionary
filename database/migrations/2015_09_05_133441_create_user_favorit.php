<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFavorit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorit', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->string('type');
            $table->text('definition');
            $table->integer("user_id")->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favorit', function (Blueprint $table) {
            Schema::drop('favorit');
        });
    }
}
