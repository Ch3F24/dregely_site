<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTables extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->integer('position')->unsigned()->nullable();
            $table->integer('year')->nullable();
        });

        Schema::create('article_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'article');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });




    }

    public function down()
    {

        Schema::dropIfExists('article_translations');
        Schema::dropIfExists('articles');
    }
}
