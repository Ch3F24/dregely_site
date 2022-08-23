<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLexiconsTables extends Migration
{
    public function up()
    {
        Schema::create('lexicons', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('lexicon_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'lexicon');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('lexicon_translations');
        Schema::dropIfExists('lexicons');
    }
}
