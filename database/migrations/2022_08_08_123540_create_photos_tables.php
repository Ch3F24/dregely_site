<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTables extends Migration
{
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->string('edition_number')->nullable();
            $table->string('size')->nullable();
            $table->date('date')->nullable();
            $table->foreignId('work_id')->nullable()->constrained()->cascadeOnDelete();
        });

        Schema::create('photo_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'photo');
            $table->string('title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('print')->nullable();
        });

        Schema::create('photo_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'photo');
        });


    }

    public function down()
    {

        Schema::dropIfExists('photo_translations');
        Schema::dropIfExists('photo_slugs');
        Schema::dropIfExists('photos');
    }
}
