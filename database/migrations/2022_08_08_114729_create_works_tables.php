<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTables extends Migration
{
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->integer('parent_work_id')->unsigned()->nullable();
            $table->string('year')->nullable();
            $table->string('reference_number')->unique()->nullable();
        });

        Schema::create('work_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'work');
            $table->string('title', 200)->nullable();
            $table->text('meta_description')->nullable();
        });

        Schema::create('work_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'work');
        });


    }

    public function down()
    {

        Schema::dropIfExists('work_translations');
        Schema::dropIfExists('work_slugs');
        Schema::dropIfExists('works');
    }
}
