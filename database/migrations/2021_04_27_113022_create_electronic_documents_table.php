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
        Schema::create('eds', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('number');
            $table->date('reg_date');
            $table->unsignedInteger('ed_type_id');
            $table->unsignedInteger('source_id');
            $table->text('source_ed_id');
            $table->unsignedInteger('dossier_id')->nullable();
            $table->unsignedInteger('save_period')->default(1);
            $table->timestamps();

            $table->index(['ed_type_id', 'source_id', 'dossier_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eds');
    }
}
