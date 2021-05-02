<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->unsignedInteger('extension_id');
            $table->decimal('size');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('ed_id');
            $table->text('path');
            $table->timestamps();

            $table->index(['extension_id', 'role_id', 'ed_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
