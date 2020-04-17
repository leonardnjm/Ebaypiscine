<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
             $table->text('description');
             $table->string('adresse');
             $table->string('ville');
             $table->integer('codePostal');
             $table->string('pays');
            $table->timestamps();
             $table->integer('carte_id')->unsigned();
             $table->foreign('carte_id')->references('id')->on('cartes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
