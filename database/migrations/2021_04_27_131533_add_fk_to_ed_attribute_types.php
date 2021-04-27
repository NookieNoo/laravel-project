<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToEdAttributeTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ed_attribute_types', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('ed_attribute_types');
            $table->foreign('etalon_attr_id')->references('id')->on('ed_attribute_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ed_attribute_types', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropForeign(['etalon_attr_id']);
        });
    }
}
