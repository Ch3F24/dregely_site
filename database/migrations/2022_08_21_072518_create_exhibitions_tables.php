<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitionsTables extends Migration
{
    public function up()
    {
        Schema::create('exhibitions', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('year',12)->nullable();
            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('exhibition_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'exhibition');
            $table->string('title', 200)->nullable();
            $table->string('location',255)->nullable();
            $table->string('optional')->nullable();
        });
        Schema::create('exhibition_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'exhibition');
        });
    }

    public function down()
    {

        Schema::dropIfExists('exhibition_translations');
        Schema::dropIfExists('exhibition_slugs');
        Schema::dropIfExists('exhibitions');
    }
}
