<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToEd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eds', function (Blueprint $table) {
            $table->foreign('ed_type_id')->references('id')->on('document_types');
            $table->foreign('source_id')->references('id')->on('sources');
            $table->foreign('dossier_id')->references('id')->on('dossiers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('electronic_documents', function (Blueprint $table) {
            $table->dropForeign(['ed_type_id']);
            $table->dropForeign(['source_id']);
            $table->dropForeign(['dossier_id']);
        });
    }
}
