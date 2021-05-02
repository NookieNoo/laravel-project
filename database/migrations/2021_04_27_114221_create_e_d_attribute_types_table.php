<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEDAttributeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->text('name');
            $table->text('code')->nullable();
            $table->text('description')->nullable();
            $table->enum('type', [1, 2, 3, 4])->nullable();
            $table->unsignedInteger('etalon_attr_id')->nullable(); // ?? isRequired
            $table->smallInteger('is_etalon')->nullable();
            $table->timestamps();

            $table->index(['parent_id', 'etalon_attr_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
