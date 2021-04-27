<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectronicDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electronic_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('number');
            $table->date('reg_date');
            $table->unsignedInteger('document_type_id');
            $table->unsignedInteger('source_id');
            $table->integer('source_ed_id');
            $table->unsignedInteger('dossier_id');
            $table->integer('save_period');
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
        Schema::dropIfExists('electronic_documents');
    }
}
