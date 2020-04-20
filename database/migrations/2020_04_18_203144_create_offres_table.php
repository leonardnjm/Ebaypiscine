<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
               $table->increments('id');
               $table->integer('user_id')->unsigned();
              $table->foreign('user_id')->references('id')->on('users');
             $table->integer('post_id')->unsigned();
              $table->foreign('post_id')->references('id')->on('posts');
               $table->integer('nbNego');
             $table->string('statutArticle');
            $table->integer('prixNego')->nullable();
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
        Schema::dropIfExists('offres');
    }
}
