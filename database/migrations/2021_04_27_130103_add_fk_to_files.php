<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('files', function (Blueprint $table) {
            $table->foreign('extension_id')->references('id')->on('file_extensions');
            $table->foreign('role_id')->references('id')->on('file_roles');
            $table->foreign('ed_id')->references('id')->on('eds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('files', function (Blueprint $table) {
            $table->dropForeign(['extension_id']);
            $table->dropForeign(['role_id']);
            $table->dropForeign(['ed_id']);
        });
    }
}
