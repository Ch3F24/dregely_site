<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTables extends Migration
{
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->string('year')->nullable();
        });

        Schema::create('publication_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'publication');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('publication_translations');
        Schema::dropIfExists('publications');
    }
}
