<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogAchatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_achat', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titre', 255); // Création d'un champ texte 'titre' de 255 caractères
            $table->longText('contenu'); // Création d'un champ texte long 'contenu'
            $table->date('date_article');
  // Création d'un champ 'date_article' de type date
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_achat');
    }
}
