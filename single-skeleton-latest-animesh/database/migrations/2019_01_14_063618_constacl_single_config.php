<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstaclSingleConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constacl_single_config', function (Blueprint $table) {
            $table->increments('constacl_single_config_id',10)->key();
            $table->string('constacl_single_config_category',255);
            $table->string('constacl_single_config_attribute_title',255);
            $table->string('constacl_single_config_attribute_value',255);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constacl_single_config');
    }
}
