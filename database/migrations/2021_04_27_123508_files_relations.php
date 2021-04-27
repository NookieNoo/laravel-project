<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FilesRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_files', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('f1_id');
            $table->unsignedInteger('f2_id');

            $table->foreign('f1_id')->references('id')->on('files');
            $table->foreign('f2_id')->references('id')->on('files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('files_files', function (Blueprint $table) {
            $table->dropForeign(['f1_id']);
            $table->dropForeign(['f2_id']);
        });
        Schema::dropIfExists('files_files');
    }
}
