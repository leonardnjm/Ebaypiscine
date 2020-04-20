<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('users');
             $table->integer('info_id')->unsigned();
             $table->foreign('info_id')->references('id')->on('infos');
            $table->string('name');
             $table->string('surname');
             $table->string('avatar')->default('/images/1587277519.jpg');
             $table->string('background')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
             $table->integer('post_id')->unsigned();
             $table->foreign('post_id')->references('id')->on('posts');
            $table->string('role')->default('acheteur');
             $table->integer('panier_id')->unsigned();
             $table->foreign('panier_id')->references('id')->on('paniers');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
