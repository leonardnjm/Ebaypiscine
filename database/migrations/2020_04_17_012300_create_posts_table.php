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
           $table->increments('id');
          $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
             $table->string('category');
            $table->string('title',100);
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_keywords');
            $table->string('typeVente');
             $table->integer('prixVariable');
             $table->integer('prixFixe');
             $table->integer('prixMax');
            $table->boolean('featured')->default(0);
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
