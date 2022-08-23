<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallationsTables extends Migration
{
    public function up()
    {
        Schema::create('installations', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->string('year',12)->nullable();
            $table->integer('position')->unsigned()->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('installation_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'installation');
            $table->string('title', 200)->nullable();
            $table->string('location',255)->nullable();
            $table->string('optional')->nullable();
        });

        Schema::create('installation_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'installation');
        });
    }

    public function down()
    {
        Schema::dropIfExists('installation_translations');
        Schema::dropIfExists('installation_slugs');
        Schema::dropIfExists('installations');
    }
}
