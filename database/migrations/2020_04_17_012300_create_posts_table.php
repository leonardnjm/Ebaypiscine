<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
           $table->increments('id_post');
          $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('panier_id')->unsigned();
            $table->foreign('panier_id')->references('id')->on('users');
             $table->string('category');
            $table->string('title',100);
            $table->text('description');
            $table->string('image')->nullable();
            $table->text('meta_keywords');
            $table->string('typeVente');
             $table->integer('prixVariable')->nullable();
             $table->integer('prixFixe')->nullable();
             $table->integer('prixMax')->nullable();
            $table->boolean('featured')->default(0);
             $table->string('aricleVendu')->default('non');
            $table->dateTime('finEnchere');
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
        Schema::dropIfExists('posts');
    }
}
