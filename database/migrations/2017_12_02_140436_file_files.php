<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FileFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('file_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('repack_id')->unsigned();
            $table->integer('size');
            $table->text('files_list');
            $table->integer('count_loads');
            $table->text('description');
            $table->integer('processor_id')->unsigned();
            $table->integer('videocard_id')->unsigned();
            $table->timestamps();

            $table->foreign('file_id')->references('id')->on('files');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_files');
    }
}
